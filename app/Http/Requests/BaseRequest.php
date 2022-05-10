<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

abstract class BaseRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    protected function failedValidation(Validator $validator)
    {
        $response = new Response([
            'status' => false,
            'errors' => $validator->errors()->all(),
        ], 422);
        throw new ValidationException($validator, $response);
    }
    abstract public function rules();
}
