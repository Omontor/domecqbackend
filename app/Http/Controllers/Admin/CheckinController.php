<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyCheckinRequest;
use App\Http\Requests\StoreCheckinRequest;
use App\Http\Requests\UpdateCheckinRequest;
use App\Models\Checkin;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckinController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('checkin_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $checkins = Checkin::all();

        return view('admin.checkins.index', compact('checkins'));
    }

    public function create()
    {
        abort_if(Gate::denies('checkin_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.checkins.create');
    }

    public function store(StoreCheckinRequest $request)
    {
        $checkin = Checkin::create($request->all());

        return redirect()->route('admin.checkins.index');
    }

    public function edit(Checkin $checkin)
    {
        abort_if(Gate::denies('checkin_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.checkins.edit', compact('checkin'));
    }

    public function update(UpdateCheckinRequest $request, Checkin $checkin)
    {
        $checkin->update($request->all());

        return redirect()->route('admin.checkins.index');
    }

    public function show(Checkin $checkin)
    {
        abort_if(Gate::denies('checkin_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.checkins.show', compact('checkin'));
    }

    public function destroy(Checkin $checkin)
    {
        abort_if(Gate::denies('checkin_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $checkin->delete();

        return back();
    }

    public function massDestroy(MassDestroyCheckinRequest $request)
    {
        Checkin::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
