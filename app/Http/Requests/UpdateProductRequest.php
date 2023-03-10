<?php

namespace App\Http\Requests;

use App\Models\Product;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('product_edit');
    }

    public function rules()
    {
        return [
            'product_title' => [
                'string',
                'required',
            ],
            'price' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'stock' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'image' => [
                'string',
                'required',
            ],
        ];
    }
}
