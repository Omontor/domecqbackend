<?php

namespace App\Http\Requests;

use App\Models\Variante;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVarianteRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('variante_create');
    }

    public function rules()
    {
        return [
            'producto' => [
                'string',
                'required',
                'unique:variantes',
            ],
            'marca_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
