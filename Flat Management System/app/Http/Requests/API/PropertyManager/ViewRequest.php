<?php

namespace App\Http\Requests\API\PropertyManager;

use App\Http\Requests\BaseRequest;
use App\Models\PropertyManager;

class ViewRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ( ! $this->can('view-property_manager')) {
            return false;
        }

        if ($this->user()->hasRole('administrator')) {
            return true;
        }

        return PropertyManager::where('id', $this->route('id'))->where('user_id', $this->user()->id)->exists();
    }
}
