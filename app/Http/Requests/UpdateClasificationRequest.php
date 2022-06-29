<?php

namespace App\Http\Requests;

use App\Models\Clasification;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClasificationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('clasification_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
