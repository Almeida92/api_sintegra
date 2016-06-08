<?php

namespace api_sintegra\Http\Requests;

use api_sintegra\Http\Requests\Request;

class CnpjRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'num_cnpj' => 'required|max:100',
        ];
    }
}
