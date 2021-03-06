<?php

namespace App\Criteria\Request;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class FilterByInternalFieldsCriteria
 * @package Prettus\Repository\Criteria
 */
class FilterByInternalFieldsCriteria implements CriteriaInterface
{
    /**
     * @var \Illuminate\Http\Request
     */
    protected $request;

    /**
     * FilterByInternalFieldsCriteria constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Apply criteria in query repository
     *
     * @param Builder|Model $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     * @throws \Exception
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $created = $this->request->get('created', null);
        if ($created && $created !== "null") {
            $model->where('requests.created_at', '>=', Carbon::parse($created)->format('Y-m-d 00:00:00'));
            $model->where('requests.created_at', '<=', Carbon::parse($created)->format('Y-m-d 23:59:59'));
        }

        $dueDate = $this->request->get('due_date', null);
        if ($dueDate && $dueDate !== "null") {
            $model->where('due_date', '=', Carbon::parse($dueDate)->format('Y-m-d'));
        }
        $createdFrom = $this->request->get('created_from', null);
        if ($createdFrom && $createdFrom !== "null") {
            $model->where('requests.created_at', '>=', Carbon::parse($createdFrom)->format('Y-m-d'));
        }

        $createdTo = $this->request->get('created_to', null);
        if ($createdTo && $createdTo !== "null") {
            $model->where('due_date', '<=', Carbon::parse($createdTo)->format('Y-m-d'));
        }

        $solvedDate = $this->request->get('solved_date', null);
        if ($solvedDate && $solvedDate !== "null") {
            $model->where('solved_date', '>=', Carbon::parse($solvedDate)->format('Y-m-d'));
        }

        $type = $this->request->get('type', null);
        if ($type) {
            $model->where('type', $type);
        }

        $status = $this->request->get('status', null);
        if ($status) {
            $model->where('status', $status);
        }

//        $priority = $this->request->get('priority', null);
//        if ($priority) {
//            $model->where('priority', $priority);
//        }

//        $internalPriority = $this->request->get('internal_priority', null);
//        if ($internalPriority) {
//            $model->where('internal_priority', $internalPriority);
//        }

        return $model;
    }
}
