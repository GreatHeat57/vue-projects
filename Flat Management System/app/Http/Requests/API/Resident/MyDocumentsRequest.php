<?php

namespace App\Http\Requests\API\Resident;

use App\Http\Requests\BaseRequest;

class MyDocumentsRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->user()->resident;
    }
}
