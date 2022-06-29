<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVisitReportRequest;
use App\Http\Requests\StoreVisitReportRequest;
use App\Http\Requests\UpdateVisitReportRequest;
use App\Models\Checkin;
use App\Models\Checkout;
use App\Models\Client;
use App\Models\User;
use App\Models\Variante;
use App\Models\VisitReport;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VisitReportController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('visit_report_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visitReports = VisitReport::with(['user', 'client', 'checkin', 'checkout', 'productos'])->get();

        return view('frontend.visitReports.index', compact('visitReports'));
    }

    public function create()
    {
        abort_if(Gate::denies('visit_report_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $checkins = Checkin::pluck('datetime', 'id')->prepend(trans('global.pleaseSelect'), '');

        $checkouts = Checkout::pluck('datetime', 'id')->prepend(trans('global.pleaseSelect'), '');

        $productos = Variante::pluck('producto', 'id');

        return view('frontend.visitReports.create', compact('checkins', 'checkouts', 'clients', 'productos', 'users'));
    }

    public function store(StoreVisitReportRequest $request)
    {
        $visitReport = VisitReport::create($request->all());
        $visitReport->productos()->sync($request->input('productos', []));

        return redirect()->route('frontend.visit-reports.index');
    }

    public function edit(VisitReport $visitReport)
    {
        abort_if(Gate::denies('visit_report_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clients = Client::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $checkins = Checkin::pluck('datetime', 'id')->prepend(trans('global.pleaseSelect'), '');

        $checkouts = Checkout::pluck('datetime', 'id')->prepend(trans('global.pleaseSelect'), '');

        $productos = Variante::pluck('producto', 'id');

        $visitReport->load('user', 'client', 'checkin', 'checkout', 'productos');

        return view('frontend.visitReports.edit', compact('checkins', 'checkouts', 'clients', 'productos', 'users', 'visitReport'));
    }

    public function update(UpdateVisitReportRequest $request, VisitReport $visitReport)
    {
        $visitReport->update($request->all());
        $visitReport->productos()->sync($request->input('productos', []));

        return redirect()->route('frontend.visit-reports.index');
    }

    public function show(VisitReport $visitReport)
    {
        abort_if(Gate::denies('visit_report_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visitReport->load('user', 'client', 'checkin', 'checkout', 'productos');

        return view('frontend.visitReports.show', compact('visitReport'));
    }

    public function destroy(VisitReport $visitReport)
    {
        abort_if(Gate::denies('visit_report_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $visitReport->delete();

        return back();
    }

    public function massDestroy(MassDestroyVisitReportRequest $request)
    {
        VisitReport::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
