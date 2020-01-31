<?php

namespace App\Http\Requests\API\Media;

use App\Http\Requests\BaseRequest;

class UnitDeleteRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->can('edit-unit');
    }
}
