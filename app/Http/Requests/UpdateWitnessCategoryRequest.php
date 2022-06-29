<?php

namespace App\Http\Requests;

use App\Models\WitnessCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateWitnessCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('witness_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:witness_categories,name,' . request()->route('witness_category')->id,
            ],
        ];
    }
}
