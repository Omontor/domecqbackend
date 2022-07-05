<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyVarianteRequest;
use App\Http\Requests\StoreVarianteRequest;
use App\Http\Requests\UpdateVarianteRequest;
use App\Models\Brand;
use App\Models\Variante;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VarianteController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('variante_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $variantes = Variante::with(['marca'])->get();

        return view('admin.variantes.index', compact('variantes'));
    }

    public function create()
    {
        abort_if(Gate::denies('variante_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marcas = Brand::pluck('marca', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.variantes.create', compact('marcas'));
    }

    public function store(StoreVarianteRequest $request)
    {
        $variante = Variante::create($request->all());

        return redirect()->route('admin.variantes.index');
    }

    public function edit(Variante $variante)
    {
        abort_if(Gate::denies('variante_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $marcas = Brand::pluck('marca', 'id')->prepend(trans('global.pleaseSelect'), '');

        $variante->load('marca');

        return view('admin.variantes.edit', compact('marcas', 'variante'));
    }

    public function update(UpdateVarianteRequest $request, Variante $variante)
    {
        $variante->update($request->all());

        return redirect()->route('admin.variantes.index');
    }

    public function show(Variante $variante)
    {
        abort_if(Gate::denies('variante_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $variante->load('marca', 'productosVisitReports');

        return view('admin.variantes.show', compact('variante'));
    }

    public function destroy(Variante $variante)
    {
        abort_if(Gate::denies('variante_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $variante->delete();

        return back();
    }

    public function massDestroy(MassDestroyVarianteRequest $request)
    {
        Variante::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
