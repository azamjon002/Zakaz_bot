<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_edit');
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
                'unique:users,mobile_number,' . request()->route('user')->id,
            ],
            'chat' => [
                'string',
                'required',
                'unique:users,chat,' . request()->route('user')->id,
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
