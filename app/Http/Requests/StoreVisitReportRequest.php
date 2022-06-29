<?php

namespace App\Http\Requests;

use App\Models\VisitReport;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVisitReportRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('visit_report_create');
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
            'checkin_id' => [
                'required',
                'integer',
            ],
            'checkout_id' => [
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
