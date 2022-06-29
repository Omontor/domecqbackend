<?php

namespace App\Http\Requests;

use App\Models\Brand;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateBrandRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('brand_edit');
    }

    public function rules()
    {
        return [
            'marca' => [
                'string',
                'required',
                'unique:brands,marca,' . request()->route('brand')->id,
            ],
            'categoria_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
