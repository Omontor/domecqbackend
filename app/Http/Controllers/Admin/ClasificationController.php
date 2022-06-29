<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyClasificationRequest;
use App\Http\Requests\StoreClasificationRequest;
use App\Http\Requests\UpdateClasificationRequest;
use App\Models\Clasification;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ClasificationController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('clasification_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clasifications = Clasification::all();

        return view('admin.clasifications.index', compact('clasifications'));
    }

    public function create()
    {
        abort_if(Gate::denies('clasification_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clasifications.create');
    }

    public function store(StoreClasificationRequest $request)
    {
        $clasification = Clasification::create($request->all());

        return redirect()->route('admin.clasifications.index');
    }

    public function edit(Clasification $clasification)
    {
        abort_if(Gate::denies('clasification_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clasifications.edit', compact('clasification'));
    }

    public function update(UpdateClasificationRequest $request, Clasification $clasification)
    {
        $clasification->update($request->all());

        return redirect()->route('admin.clasifications.index');
    }

    public function show(Clasification $clasification)
    {
        abort_if(Gate::denies('clasification_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.clasifications.show', compact('clasification'));
    }

    public function destroy(Clasification $clasification)
    {
        abort_if(Gate::denies('clasification_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clasification->delete();

        return back();
    }

    public function massDestroy(MassDestroyClasificationRequest $request)
    {
        Clasification::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
