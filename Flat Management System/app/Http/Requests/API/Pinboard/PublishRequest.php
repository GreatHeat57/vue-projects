<?php

namespace App\Http\Requests\API\Pinboard;

use App\Models\Pinboard;
use App\Http\Requests\BaseRequest;

class PublishRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->can('(un)publish-pinboard');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Pinboard::publishRules();
    }
}
