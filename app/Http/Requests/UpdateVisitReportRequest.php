<?php

namespace App\Http\Requests;

use App\Models\VisitReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVisitReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('visit_report_edit');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'client_id' => [
                'required',
                'integer',
            ],
            'productos.*' => [
                'integer',
            ],
            'productos' => [
                'array',
            ],
        ];
    }
}
