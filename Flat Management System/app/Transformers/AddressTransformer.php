<?php

namespace App\Transformers;

use App\Models\Address;
use League\Fractal\TransformerAbstract;

/**
 * Class AddressTransformer.
 *
 * @package namespace App\Transformers;
 */
class AddressTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'state'
    ];

    protected $defaultIncludes = [
        'state'
    ];

    /**
     * @param Address $model
     * @return array
     */
    public function transform(Address $model)
    {
        $response =  [
            'id' => $model->id,
            'country_id' => $model->country_id,
            'country' => 'Switzerland',
            'state' => (new StateTransformer)->transform($model->state),
            'city' => $model->city,
            'street' => $model->street,
            'zip' => $model->zip,
        ];

        if (key_exists('house_num', $model->getAttributes())) {
            $response['house_num'] =  $model->house_num;
        }
        return $response;
    }

    /**
     * Transform Request to Address entity.
     *
     * @param array $input
     *
     * @return array
     */
    public function transformRequest(array $input)
    {
        $address = $input['address'] ?? [];
        if (!count($address)) {
            return [];
        }

        $address['state_id'] = $address['state']['id'];
        unset($address['state']);
        unset($address['country']);

        return $address;
    }

    /**
     * Include State
     *
     * @return \League\Fractal\Resource\Item
     */
    public function includeState(Address $address)
    {
        $state = $address->state;

        return $this->item($state, new StateTransformer);
    }
}
