<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWitnessRequest;
use App\Http\Requests\StoreWitnessRequest;
use App\Http\Requests\UpdateWitnessRequest;
use App\Models\Witness;
use App\Models\WitnessCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class WitnessController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('witness_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $witnesses = Witness::with(['witness_category', 'media'])->get();

        return view('frontend.witnesses.index', compact('witnesses'));
    }

    public function create()
    {
        abort_if(Gate::denies('witness_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $witness_categories = WitnessCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.witnesses.create', compact('witness_categories'));
    }

    public function store(StoreWitnessRequest $request)
    {
        $witness = Witness::create($request->all());

        if ($request->input('witness', false)) {
            $witness->addMedia(storage_path('tmp/uploads/' . basename($request->input('witness'))))->toMediaCollection('witness');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $witness->id]);
        }

        return redirect()->route('frontend.witnesses.index');
    }

    public function edit(Witness $witness)
    {
        abort_if(Gate::denies('witness_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $witness_categories = WitnessCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $witness->load('witness_category');

        return view('frontend.witnesses.edit', compact('witness', 'witness_categories'));
    }

    public function update(UpdateWitnessRequest $request, Witness $witness)
    {
        $witness->update($request->all());

        if ($request->input('witness', false)) {
            if (!$witness->witness || $request->input('witness') !== $witness->witness->file_name) {
                if ($witness->witness) {
                    $witness->witness->delete();
                }
                $witness->addMedia(storage_path('tmp/uploads/' . basename($request->input('witness'))))->toMediaCollection('witness');
            }
        } elseif ($witness->witness) {
            $witness->witness->delete();
        }

        return redirect()->route('frontend.witnesses.index');
    }

    public function show(Witness $witness)
    {
        abort_if(Gate::denies('witness_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $witness->load('witness_category');

        return view('frontend.witnesses.show', compact('witness'));
    }

    public function destroy(Witness $witness)
    {
        abort_if(Gate::denies('witness_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $witness->delete();

        return back();
    }

    public function massDestroy(MassDestroyWitnessRequest $request)
    {
        Witness::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('witness_create') && Gate::denies('witness_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Witness();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
