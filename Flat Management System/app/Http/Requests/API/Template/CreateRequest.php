<?php

namespace App\Http\Requests\API\Template;

use App\Models\Template;
use App\Http\Requests\BaseRequest;

class CreateRequest extends BaseRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return $this->can('add-template');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return Template::$rules;
    }

    /**
     * Extend the default getValidatorInstance method
     * so fields can be modified or added before validation
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {
        $translations = (new Template)->applyTranslation($this->request);

        // Add new data field before it gets sent to the validator
        $this->merge($translations);

        // Fire the parent getValidatorInstance method
        return parent::getValidatorInstance();
    }
}
