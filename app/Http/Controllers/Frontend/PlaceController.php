<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPlaceRequest;
use App\Http\Requests\StorePlaceRequest;
use App\Http\Requests\UpdatePlaceRequest;
use App\Models\Place;
use App\Models\Region;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PlaceController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('place_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $places = Place::with(['region'])->get();

        return view('frontend.places.index', compact('places'));
    }

    public function create()
    {
        abort_if(Gate::denies('place_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $regions = Region::pluck('region', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.places.create', compact('regions'));
    }

    public function store(StorePlaceRequest $request)
    {
        $place = Place::create($request->all());

        return redirect()->route('frontend.places.index');
    }

    public function edit(Place $place)
    {
        abort_if(Gate::denies('place_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $regions = Region::pluck('region', 'id')->prepend(trans('global.pleaseSelect'), '');

        $place->load('region');

        return view('frontend.places.edit', compact('place', 'regions'));
    }

    public function update(UpdatePlaceRequest $request, Place $place)
    {
        $place->update($request->all());

        return redirect()->route('frontend.places.index');
    }

    public function show(Place $place)
    {
        abort_if(Gate::denies('place_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $place->load('region');

        return view('frontend.places.show', compact('place'));
    }

    public function destroy(Place $place)
    {
        abort_if(Gate::denies('place_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $place->delete();

        return back();
    }

    public function massDestroy(MassDestroyPlaceRequest $request)
    {
        Place::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
