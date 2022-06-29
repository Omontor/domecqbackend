<?php

namespace App\Http\Requests;

use App\Models\Variante;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVarianteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('variante_edit');
    }

    public function rules()
    {
        return [
            'producto' => [
                'string',
                'required',
                'unique:variantes,producto,' . request()->route('variante')->id,
            ],
            'marca_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
