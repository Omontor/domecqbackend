<?php

namespace App\Http\Requests;

use App\Models\Client;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
            'lat' => [
                'string',
                'nullable',
            ],
            'lng' => [
                'string',
                'nullable',
            ],
            'rfc' => [
                'string',
                'required',
            ],
            'razon_social' => [
                'string',
                'required',
            ],
            'nombre_comercial' => [
                'string',
                'required',
            ],
            'clasificacion_id' => [
                'required',
                'integer',
            ],
            'status_id' => [
                'required',
                'integer',
            ],
            'kam_id' => [
                'required',
                'integer',
            ],
            'ejecutivo_id' => [
                'required',
                'integer',
            ],
            'variantes.*' => [
                'integer',
            ],
            'variantes' => [
                'array',
            ],
            'mayoristas.*' => [
                'integer',
            ],
            'mayoristas' => [
                'array',
            ],
        ];
    }
}
