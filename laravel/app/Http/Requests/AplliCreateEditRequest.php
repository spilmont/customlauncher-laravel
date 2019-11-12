<?php

namespace App\Http\Requests;

use App\Application;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AplliCreateEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "name" => 'required|min:1',
           "path"=>"required|"

        ];
    }
}
