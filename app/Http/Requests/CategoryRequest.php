<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends BaseRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:categories,name',
            'slug' => 'required'
        ];
    }
}
