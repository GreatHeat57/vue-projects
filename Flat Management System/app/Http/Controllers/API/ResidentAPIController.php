<?php

namespace App\Http\Controllers\API;

use App\Criteria\Common\RequestCriteria;
use App\Criteria\Common\WhereCriteria;
use App\Criteria\Resident\FilterByRelationRelatedCriteria;
use App\Criteria\Common\FilterByLanguageCriteria;
use App\Criteria\Resident\FilterByRequestCriteria;
use App\Criteria\Resident\FilterByStatusCriteria;
use App\Criteria\Resident\IncludeForOrderCriteria;
use App\Http\Controllers\AppBaseController;
use App\Http\Requests\API\Resident\AddReviewRequest;
use App\Http\Requests\API\Resident\CheckHasRequestOrRelationRequest;
use App\Http\Requests\API\Resident\CreateRequest;
use App\Http\Requests\API\Resident\DeleteRequest;
use App\Http\Requests\API\Resident\DownloadCredentialsRequest;
use App\Http\Requests\API\Resident\GetMediaRequest;
use App\Http\Requests\API\Resident\ListRequest;
use App\Http\Requests\API\Resident\MyDocumentsRequest;
use App\Http\Requests\API\Resident\MyNeighboursRequest;
use App\Http\Requests\API\Resident\MyPropertyManagersRequest;
use App\Http\Requests\API\Resident\SendCredentialsRequest;
use App\Http\Requests\API\Resident\ShowRequest;
use App\Http\Requests\API\Resident\UpdateDefaultRelationRequest;
use App\Http\Requests\API\Resident\UpdateLoggedInRequest;
use App\Http\Requests\API\Resident\UpdateRequest;
use App\Http\Requests\API\Resident\UpdateStatusRequest;
use App\Jobs\Notify\NotifyResidentCredentials;
use App\Models\AuditableModel;
use App\Models\Relation;
use App\Models\Settings;
use App\Models\Resident;
use App\Models\User;
use App\Repositories\TemplateRepository;
use App\Repositories\ResidentRepository;
use App\Repositories\UserRepository;
use App\Transformers\RelationTransformer;
use App\Transformers\MediaTransformer;
use App\Transformers\PropertyManagerTransformer;
use App\Transformers\ResidentTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Illuminate\Support\Facades\Validator;

/**
 * Class ResidentController
 * @package App\Http\Controllers\API
 */
class ResidentAPIController extends AppBaseController
{
    /** @var  ResidentRepository */
    private $residentRepository;

    /** @var  UserRepository */
    private $userRepository;

    /**
     * @var string
     */
    private $credentialsFileNotFound = "Credentials file not found. Try updating the resident password to regenerate it";

    /**
     * ResidentAPIController constructor.
     * @param ResidentRepository $residentRepo
     * @param UserRepository $userRepo
     */
    public function __construct(ResidentRepository $residentRepo, UserRepository $userRepo)
    {
        $this->residentRepository = $residentRepo;
        $this->userRepository = $userRepo;
    }

    /**
     * @SWG\Get(
     *      path="/residents",
     *      summary="Get a listing of the Residents.",
     *      tags={"Resident"},
     *      description="Get all Residents",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/Resident")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param ListRequest $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function index(ListRequest $request)
    {
        $request->merge([
            'model' => (new Resident)->getTable(),
        ]);
        if ($request->orderBy == 'email') {
            $request->merge(['orderBy' => 'users:id|email']);
        }

        $this->residentRepository->pushCriteria(new RequestCriteria($request, 'concat(first_name, " ", last_name)'));
        $this->residentRepository->pushCriteria(new FilterByRelationRelatedCriteria($request));
        $this->residentRepository->pushCriteria(new FilterByRequestCriteria($request));
        $this->residentRepository->pushCriteria(new FilterByStatusCriteria($request));
        $this->residentRepository->pushCriteria(new FilterByLanguageCriteria($request));
        $this->residentRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->residentRepository->pushCriteria(new IncludeForOrderCriteria($request));

        $getAll = $request->get('get_all', false);
        if ($getAll) {
            $this->residentRepository->pushCriteria(new LimitOffsetCriteria($request));
            $residents = $this->residentRepository->with([
                'relations' => function ($q) {
                    $q->with('unit.building.address');
                },
                'default_relation' => function ($q) {
                    $q->with('unit.building.address');
                },])
                ->get();
            foreach ($residents as $resident) {
                $resident->setRelation('relations', collect((new RelationTransformer())->transformCollection($resident->relations)));
            }

            // @TODO use transformer
            return $this->sendResponse($residents->toArray(), 'Residents retrieved successfully');
        }

        $perPage = $request->get('per_page', env('APP_PAGINATE', 10));
        $residents = $this->residentRepository->with([
            'user',
            'default_relation' => function ($q) {
                $q->with('unit.building.address');
            },
            'relations' => function ($q) {
                $q->with('unit.building.address');
            }])->scope('allRequestStatusCount')
            ->paginate($perPage);
        $response = (new ResidentTransformer())->transformPaginator($residents);
        return $this->sendResponse($response, 'Residents retrieved successfully');
    }

    /**
     * @SWG\Get(
     *      path="/residents/latest",
     *      summary="Get a latest 5 Residents",
     *      tags={"Resident"},
     *      description="Get a latest 5(limit) Residents",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="limit",
     *          in="query",
     *          description="How many residents get",
     *          type="integer",
     *          default=5
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="true"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(
     *                      @SWG\Property(
     *                          property="id",
     *                          type="integer",
     *                      ),
     *                      @SWG\Property(
     *                          property="first_name",
     *                          type="string"
     *                      ),
     *                      @SWG\Property(
     *                          property="last_name",
     *                          type="string"
     *                      ),
     *                      @SWG\Property(
     *                          property="status",
     *                          type="integer"
     *                      )
     *                  )
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param ListRequest $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function latest(ListRequest $request)
    {
        $limit = $request->get('limit', 5);
        $request->merge([
            'limit' => $limit,
        ]);
        $this->residentRepository->pushCriteria(new LimitOffsetCriteria($request));
        $this->residentRepository->pushCriteria(new RequestCriteria($request));
        $residents = $this->residentRepository->with([
            'user',
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with('unit.building.address', 'media');
            }])
            ->get(['id', 'first_name', 'last_name', 'status', 'created_at']);
        $response = (new ResidentTransformer())->transformCollection($residents);
        return $this->sendResponse($response, 'Residents retrieved successfully');
    }

    /**
     * @SWG\Post(
     *      path="/residents",
     *      summary="Store a newly created Resident in storage",
     *      tags={"Resident"},
     *      description="Store Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Resident that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Resident")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
    /**
     * @param CreateRequest $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     */
    public function store(CreateRequest $request)
    {
        $input = (new ResidentTransformer)->transformRequest($request->all());
        //@TODO This action already done in  ResidentTransformer delete it
        $input['user']['name'] = sprintf('%s %s', $input['first_name'], $input['last_name']);
        $validator = Validator::make($input['user'], User::$rules);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        DB::beginTransaction();
        try {
            $input['user']['role'] = 'resident';
            $input['user']['settings'] = Arr::pull($input, 'settings');
            User::disableAuditing();
            $user = $this->userRepository->create($input['user']);
            User::enableAuditing();
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendError(__('models.resident.errors.create') . $e->getMessage());
        }

        $input['user_id'] = $user->id;

        try {
            $resident = $this->residentRepository->create($input);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendError(__('models.resident.errors.create') . $e->getMessage());
        }

        $resident->load([
            'user',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);

        $resident->addDataInAudit(AuditableModel::MergeInMainData, $user);

        DB::commit();
        $response = (new ResidentTransformer)->transform($resident);
        return $this->sendResponse($response, __('models.resident.saved'));
    }

    /**
     * @SWG\Get(
     *      path="/residents/{id}",
     *      summary="Display the specified Resident",
     *      tags={"Resident"},
     *      description="Get Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Resident",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param $id
     * @param ShowRequest $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function show($id, ShowRequest $request)
    {
        /** @var Resident $resident */
        $resident = $this->residentRepository->findWithoutFail($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $resident->load([
            'settings',
            'user',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('building.address', 'unit', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);
        $response = (new ResidentTransformer)->transform($resident);

        return $this->sendResponse($response, 'Resident retrieved successfully');
    }

    /**
     * @SWG\Get(
     *      path="/residents/me",
     *      summary="Display the Logged In Resident",
     *      tags={"Resident"},
     *      description="Get Logged In Resident",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param Request $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function showLoggedIn(Request $request)
    {
        /** @var User $user */
        $user = $this->userRepository->with('resident')->findWithoutFail($request->user()->id);
        if (empty($user) || empty($user->resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $user->resident->load([
            'user',
            'settings',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);
        $response = (new ResidentTransformer)->transform($user->resident);

        return $this->sendResponse($response, 'Resident retrieved successfully');
    }

    /**
     * @SWG\Put(
     *      path="/residents/{id}",
     *      summary="Update the specified Resident in storage",
     *      tags={"Resident"},
     *      description="Update Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Resident",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Resident that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Resident")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param $id
     * @param UpdateRequest $request
     * @return mixed
     * @throws \Exception
     */
    public function update($id, UpdateRequest $request)
    {
        $input = (new ResidentTransformer)->transformRequest($request->all());
        /** @var Resident $resident */
        $resident = $this->residentRepository->findWithoutFail($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $input['user'] = $input['user'] ?? [];
        $input['user']['name'] = sprintf('%s %s', $input['first_name'], $input['last_name']);
        $input['user']['email'] = $input['email'];
        if (isset($input['password'])) {
            $input['user']['password'] = $input['password'];
        }

        $validator = Validator::make($input['user'], User::$rulesUpdate);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $input['user']['settings'] = Arr::pull($input, 'settings', []);

        DB::beginTransaction();
        try {
            // for prevent user update log related resident
            User::disableAuditing();
            $updatedUser = $this->userRepository->update($input['user'], $resident->user_id);
            $resident->setRelation('user', $updatedUser);
            User::enableAuditing();
        } catch (\Exception $e) {
            return $this->sendError(__('models.resident.errors.update') . $e->getMessage());
        }

        try {
            $resident = $this->residentRepository->updateExisting($resident, $input);
            $resident->addDataInAudit(AuditableModel::MergeInMainData, $updatedUser, AuditableModel::UpdateOrCreate);
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->sendError(__('models.resident.errors.create') . $e->getMessage());
        }

        $resident->load([
            'settings',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);

        //if ($userPass) {
            //$resident->setCredentialsPDF();
        //}
        DB::commit();

        $response = (new ResidentTransformer)->transform($resident);
        return $this->sendResponse($response, __('models.resident.saved'));
    }

    /**
     * @SWG\Put(
     *      path="/residents/me",
     *      summary="Update the Logged In Resident in storage",
     *      tags={"Resident"},
     *      description="Update the Logged In Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Resident that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Resident")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param UpdateLoggedInRequest $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function updateLoggedIn(UpdateLoggedInRequest $request)
    {
        $input = $request->only((new Resident)->getFillable());

        /** @var User $user */
        $user = $this->userRepository->with('resident')->findWithoutFail($request->user()->id);
        if (empty($user)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $userInput = $request->get('user', []);
        $userInput['name'] = sprintf('%s %s', $input['first_name'], $input['last_name']);
        $userInput['email'] = $user->email;
        $validator = Validator::make($userInput, User::$rulesUpdate);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        try {
            $this->userRepository->update($userInput, $user->id);
        } catch (\Exception $e) {
            return $this->sendError(__('models.resident.errors.update') . $e->getMessage());
        }


        try {
            $resident = $this->residentRepository->update($input, $user->resident->id);
        } catch (\Exception $e) {
            return $this->sendError(__('models.resident.errors.update') . $e->getMessage());
        }

        $resident->load([
            'user',
            'settings',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);
        $response = (new ResidentTransformer)->transform($resident);
        return $this->sendResponse($response, __('models.resident.saved'));
    }

    /**
     * @SWG\Put(
     *      path="/residents/default-relation",
     *      summary="Update the Logged In Resident default-relation-id",
     *      tags={"Resident"},
     *      description="Update the Logged In Resident default-relation-id",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Resident that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Resident")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param UpdateLoggedInRequest $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function updateDefaultRelation(UpdateDefaultRelationRequest $request)
    {
        $resident = $request->user()->resident;
        $resident->update($request->only('default_relation_id'));
        $resident->load([
            'user',
            'settings',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);
        $response = (new ResidentTransformer)->transform($resident);
        return $this->sendResponse($response, __('models.resident.saved'));
    }


    /**
     * @SWG\Post(
     *      path="/residents/{id}/status",
     *      summary="Change status on Resident",
     *      tags={"Resident"},
     *      description="Change status on Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Resident that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Resident")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/Resident"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param int $id
     * @param UpdateStatusRequest $request
     * @return mixed
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function changeStatus(int $id, UpdateStatusRequest $request)
    {
        /** @var Resident $resident */
        $resident = $this->residentRepository->with('user')->findWithoutFail($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $validator = Validator::make($request->all(), ['status' => 'required|integer|in:1,2']);
        if ($validator->fails()) {
            return $this->sendError($validator->errors());
        }

        $input = [
            'status' => $request->get('status', '')
        ];

        if (!$this->residentRepository->checkStatusPermission($input, $resident->status)) {
            return $this->sendError(__('models.resident.errors.not_allowed_change_status'));
        }

        try {
            $resident = $this->residentRepository->update($input, $id);
        } catch (\Exception $e) {
            return $this->sendError(__('models.resident.errors.update') . $e->getMessage());
        }

        $resident->load([
            'user',
            'settings',
            'media' => function ($q) {
                $q->withCount('relations');
            },
            'default_relation' => function ($q) {
                $q->with('unit.building.address', 'media');
            },
            'relations' => function ($q) {
                $q->with([
                    'unit.building.address',
                    'media',
                    'quarter',
//                    'garant_residents:residents.id,residents.first_name,residents.last_name'
                ]);
            },
//            'garant_relations' => function ($q) {
//                $q->with(
//                    'unit.building.address',
//                    'media',
//                    'quarter',
//                );
//            }
        ]);
        $response = (new ResidentTransformer)->transform($resident);
        return $this->sendResponse($response, __('models.resident.status_changed'));
    }

    /**
     * @SWG\Delete(
     *      path="/residents/{id}",
     *      summary="Remove the specified Resident from storage",
     *      tags={"Resident"},
     *      description="Delete Resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of Resident",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param $id
     * @param DeleteRequest $request
     * @return mixed
     */
    public function destroy($id, DeleteRequest $request)
    {
        try {
            $this->residentRepository->delete($id);
        } catch (\Exception $e) {
            return $this->sendError('Delete error: ' . $e->getMessage());
        }

        return $this->sendResponse($id, __('models.resident.deleted'));
    }

    /**
     * @param DeleteRequest $request
     * @return mixed
     */
    public function destroyWithIds(DeleteRequest $request)
    {
        $ids = $request->get('ids');
        try{
            Resident::destroy($ids);
        }
        catch (\Exception $e) {
            return $this->sendError(__('models.resident.errors.deleted') . $e->getMessage());
        }
        return $this->sendResponse($ids, __('models.resident.deleted'));
    }

    /**
     * @param $id
     * @param DownloadCredentialsRequest $r
     * @return mixed|\Symfony\Component\HttpFoundation\StreamedResponse
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     */
    public function downloadCredentials($id, DownloadCredentialsRequest $r)
    {
        /**
         * @var $resident Resident
         */
        $resident = $this->residentRepository->findForCredentials($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }
        $pdfName = $this->getPdfName($resident);

        if (!\Storage::disk('resident_credentials')->exists($pdfName)) {
            return $this->sendError($this->credentialsFileNotFound);
        }

        $resident->addDataInAudit('pdf_name', $pdfName, AuditableModel::UpdateOrCreate, true, AuditableModel::DownloadCredentials);
        return \Storage::disk('resident_credentials')->download($pdfName, $pdfName);
    }

    /**
     * @param $id
     * @param SendCredentialsRequest $r
     * @param TemplateRepository $tRepo
     * @return mixed
     * @throws \OwenIt\Auditing\Exceptions\AuditingException
     */
    public function sendCredentials($id, SendCredentialsRequest $r, TemplateRepository $tRepo)
    {
        /* @var $resident Resident */
        $resident = $this->residentRepository->findForCredentials($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }
        $pdfName = $this->getPdfName($resident);
        if (!\Storage::disk('resident_credentials')->exists($pdfName)) {
            return $this->sendError($this->credentialsFileNotFound);
        }

        $resident->addDataInAudit('pdf_name', $pdfName, AuditableModel::UpdateOrCreate, true, AuditableModel::SendCredentials);
        dispatch_now(new NotifyResidentCredentials($resident));
        return $this->sendResponse($id, __('models.resident.credentials_sent'));
    }

    /**
     * @param $resident
     * @return mixed
     */
    protected function getPdfName(Resident $resident)
    {
        $resident->setCredentialsPDF();

        $settings = Settings::firstOrFail();

        $pdfName = $resident->pdfXFileName();
        if ($settings && $settings->blank_pdf) {
            $pdfName = $resident->pdfFileName();
        }

        return $pdfName ;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function resetPassword(Request $request){

        $this->residentRepository->pushCriteria(new WhereCriteria('activation_code', $request->token));
        $resident = $this->residentRepository->with('user:id,email')->first();

        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $user = $resident->user;
        if($user->email == $request->email) {
            $user->password = bcrypt($request->password);
            $user->save();
            return $this->sendResponse($resident->id, __('models.resident.password_reset'));
        } else {
            return $this->sendError(__('models.resident.errors.incorrect_email'));
        }
    }

    /**
     * @SWG\Post(
     *      path="/residents/activateResident",
     *      summary="Activate resident",
     *      tags={"Resident"},
     *      description="Activate resident",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="code",
     *          description="activation code of Resident",
     *          type="string",
     *          required=true,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="email",
     *          description="email of Resident",
     *          type="string",
     *          required=true,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="password",
     *          description="new password for Resident can login",
     *          type="string",
     *          required=true,
     *          in="query"
     *      ),
     *
     *      @SWG\Response(
     *          response=401,
     *          description="wrong operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string",
     *                  example="code, email, password required"
     *              )
     *          )
     *      ),
     *
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="true"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string",
     *                  example="2"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Resident password reset successfully"
     *              )
     *          )
     *      )
     * )
     *
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function activateResident(Request $request)
    {
        // @TODO fix query hard coding
        if (empty($request->code) || empty($request->email) || empty($request->password)) {
            return $this->sendError(__('general.resident_detail.activate_required_credentials'));
        }
        
        $this->userRepository->pushCriteria(new WhereCriteria('email', $request->email));
        $user = $this->userRepository->with('resident:id,user_id,activation_code,status')->first();

        if (empty($user)) {
            return $this->sendError(__('general.resident_detail.incorrect_email'));
        }

        if (empty($user->resident)) {
            return $this->sendError(__('general.resident_detail.user_not_resident'));
        }

        if ($user->resident->activation_code != $request->code) {

            return $this->sendError(__('general.resident_detail.invalid_code'));
        }

        if (Resident::StatusActive != $user->resident->status) {
            return $this->sendError(__('general.resident_detail.not_active_resident'));
        }

        // @TODO discuss if already active,
        $user->password = bcrypt($request->password);
        $user->save();
        return $this->sendResponse($user->resident->id, __('models.resident.saved'));
    }

    /**
     * @SWG\Post(
     *      path="/addReview",
     *      summary="Update Resident review and rating",
     *      tags={"Resident"},
     *      description="Update Resident review and rating",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="resident_id",
     *          description="resident_id of Resident",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="rating",
     *          description="rating of Resident",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="review",
     *          description="review of Resident",
     *          type="string",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=404,
     *          description="not found",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="false"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string",
     *                  example="Resident not found"
     *              )
     *          )
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successfully updated",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="true"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="integer",
     *                  example=1
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param UpdateRequest $request
     * @return mixed
     */
    public function addReview(AddReviewRequest $request){
        $input = $request->all();
        $resident = $this->residentRepository->findWithoutFail($input['resident_id']);
        
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }
        $data['review'] = $input['review'];
        $data['rating'] = $input['rating'];
        $resident->update($data);

        return $this->sendResponse($input['resident_id'], __('models.resident.saved'));
    }

    /**
     *
     * @SWG\Get(
     *      path="/my/documents",
     *      summary="Get Resident documents grouped by quarter, building, unit",
     *      tags={"Resident"},
     *      description="Get Resident documents grouped by quarter, building, unit",
     *      produces={"application/json"},
     *      @SWG\Response(
     *          response=200,
     *          description="successfully updated",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean",
     *                  example="true"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="integer",
     *                  example=1
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     *
     * @param MyDocumentsRequest $myDocumentsRequest
     * @return mixed
     */
    public function myDocuments(MyDocumentsRequest $myDocumentsRequest)
    {
        // @TODO correct
        $resident = Auth::user()->resident;
        $relations = $resident->relations()
            ->select('unit_id', 'building_id')
            ->where('status', Relation::StatusActive)
            ->with([
                'unit:id',
                'building:id,quarter_id',
                'building.quarter:id',
                'unit.media:id,name,collection_name,model_id,order_column,disk,file_name',
                'building.quarter.media:id,name,collection_name,model_id,order_column,disk,file_name',
                'building.media:id,name,collection_name,model_id,order_column,disk,file_name',
            ])->get();

        $unitMedias = $relations->pluck('unit.media')->collapse();
        $buildingMedias = $relations->pluck('building.media')->collapse();
        $quarterMedias = $relations->pluck('building.quarter.media')->collapse();
        $response['quarter'] = (new MediaTransformer)->transformCollection($quarterMedias);
        $response['building'] = (new MediaTransformer)->transformCollection($buildingMedias);
        $response['unit'] = (new MediaTransformer)->transformCollection($unitMedias);

        return $this->sendResponse($response, 'my products');
    }
    
    /**
     * @TODO add docs
     * @param MyNeighboursRequest $myNeighboursRequest
     * @return mixed
     */
    public function myNeighbours(MyNeighboursRequest $myNeighboursRequest)
    {
        $resident = Auth::user()->resident;
        $relations = $resident->relations()
            ->select('building_id')
            ->where('status', Relation::StatusActive)
            ->with([
                'building:id',
                'building.relations' => function ($q) use ($resident) {
                    $q->select('building_id', 'resident_id')
                        ->where('resident_id', '!=', $resident->id)
                        ->with([
                            'resident' => function ($q) {
                                $q->select('id', 'first_name', 'last_name', 'user_id')
                                    ->with('user:id,avatar');
                            }
                        ]);
                },
            ])->get();

        $residents = $relations->pluck('building.relations.*.resident')->collapse()->unique();
        $response = (new ResidentTransformer())->transformCollectionBy($residents, 'myNeighbours');
        return $this->sendResponse($response, 'my neighbours');
    }

    /**
     * @TODO add docs
     * @param MyPropertyManagersRequest $myPropertyManagersRequest
     * @return mixed
     */
    public function myPropertyManagers(MyPropertyManagersRequest $myPropertyManagersRequest)
    {
        $resident = Auth::user()->resident;
        $relations = $resident->relations()
            ->select('building_id')
            ->where('status', Relation::StatusActive)
            ->with([
                'building.property_managers' => function ($q) {
                    $q->select('property_managers.id', 'property_managers.user_id', 'property_managers.first_name', 'property_managers.last_name')
                        ->with('user:id,avatar,phone,email');
                },
            ])->get();

        $propertyManagers = $relations->pluck('building.property_managers')->collapse()->keyBy('id')->values();
        $response = (new PropertyManagerTransformer())->transformCollectionBy($propertyManagers, 'residentPropertyManagers');
        return $this->sendResponse($response, 'my property managers');
    }

    /**
     * @param $id
     * @param GetMediaRequest $request
     * @return mixed
     */
    public function getAllMedia($id, GetMediaRequest $request)
    {
        $resident = $this->residentRepository->findForCredentials($id);
        if (empty($resident)) {
            return $this->sendError(__('models.resident.errors.not_found'));
        }

        $media = $resident->media()->get();
        $response = (new MediaTransformer())->transformCollection($media);
        return $this->sendResponse($response, 'Residents all media get succesfully');
    }

}
