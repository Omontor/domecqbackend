<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\CsvImportTrait;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyClientRequest;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use App\Models\Clasification;
use App\Models\Client;
use App\Models\Group;
use App\Models\Provider;
use App\Models\Segment;
use App\Models\Status;
use App\Models\User;
use App\Models\Variante;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ClientController extends Controller
{
    use MediaUploadingTrait;
    use CsvImportTrait;

    public function index()
    {
        abort_if(Gate::denies('client_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $clients = Client::with(['grupo', 'segmento', 'clasificacion', 'status', 'kam', 'ejecutivo', 'variantes', 'mayoristas', 'media'])->get();

        return view('admin.clients.index', compact('clients'));
    }

    public function create()
    {
        abort_if(Gate::denies('client_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $grupos = Group::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $segmentos = Segment::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clasificacions = Clasification::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $kams = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $ejecutivos = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $variantes = Variante::pluck('producto', 'id');

        $mayoristas = Provider::pluck('name', 'id');

        return view('admin.clients.create', compact('clasificacions', 'ejecutivos', 'grupos', 'kams', 'mayoristas', 'segmentos', 'statuses', 'variantes'));
    }

    public function store(StoreClientRequest $request)
    {
        $client = Client::create($request->all());
        $client->variantes()->sync($request->input('variantes', []));
        $client->mayoristas()->sync($request->input('mayoristas', []));
        if ($request->input('logo', false)) {
            $client->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $client->id]);
        }

        return redirect()->route('admin.clients.index');
    }

    public function edit(Client $client)
    {
        abort_if(Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $grupos = Group::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $segmentos = Segment::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $clasificacions = Clasification::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $statuses = Status::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $kams = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $ejecutivos = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $variantes = Variante::pluck('producto', 'id');

        $mayoristas = Provider::pluck('name', 'id');

        $client->load('grupo', 'segmento', 'clasificacion', 'status', 'kam', 'ejecutivo', 'variantes', 'mayoristas');

        return view('admin.clients.edit', compact('clasificacions', 'client', 'ejecutivos', 'grupos', 'kams', 'mayoristas', 'segmentos', 'statuses', 'variantes'));
    }

    public function update(UpdateClientRequest $request, Client $client)
    {
        $client->update($request->all());
        $client->variantes()->sync($request->input('variantes', []));
        $client->mayoristas()->sync($request->input('mayoristas', []));
        if ($request->input('logo', false)) {
            if (!$client->logo || $request->input('logo') !== $client->logo->file_name) {
                if ($client->logo) {
                    $client->logo->delete();
                }
                $client->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($client->logo) {
            $client->logo->delete();
        }

        return redirect()->route('admin.clients.index');
    }

    public function show(Client $client)
    {
        abort_if(Gate::denies('client_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->load('grupo', 'segmento', 'clasificacion', 'status', 'kam', 'ejecutivo', 'variantes', 'mayoristas', 'clientAppointments');

        return view('admin.clients.show', compact('client'));
    }

    public function destroy(Client $client)
    {
        abort_if(Gate::denies('client_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $client->delete();

        return back();
    }

    public function massDestroy(MassDestroyClientRequest $request)
    {
        Client::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('client_create') && Gate::denies('client_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Client();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
