<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Validation\Validator;

class TaskRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required|max:100',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'A title is required',
            'title.max' => 'The title must be less than 100 characters',
            'description.required' => 'A description is required',
        ];
    }
}
