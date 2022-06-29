<?php

namespace App\Http\Requests;

use App\Models\Variante;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyVarianteRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('variante_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:variantes,id',
        ];
    }
}
