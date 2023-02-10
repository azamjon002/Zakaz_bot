<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
            'mobile_number' => [
                'string',
                'required',
                'unique:users',
            ],
            'chat' => [
                'string',
                'required',
                'unique:users',
            ],
            'status' => [
                'string',
                'nullable',
            ],
            'lang' => [
                'required',
            ],
        ];
    }
}
