@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.client.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.clients.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $client->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.name') }}
                                    </th>
                                    <td>
                                        {{ $client->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.logo') }}
                                    </th>
                                    <td>
                                        @if($client->logo)
                                            <a href="{{ $client->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $client->logo->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.contact_email') }}
                                    </th>
                                    <td>
                                        {{ $client->contact_email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $client->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $client->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.lat') }}
                                    </th>
                                    <td>
                                        {{ $client->lat }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.lng') }}
                                    </th>
                                    <td>
                                        {{ $client->lng }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.rfc') }}
                                    </th>
                                    <td>
                                        {{ $client->rfc }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.razon_social') }}
                                    </th>
                                    <td>
                                        {{ $client->razon_social }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.nombre_comercial') }}
                                    </th>
                                    <td>
                                        {{ $client->nombre_comercial }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.grupo') }}
                                    </th>
                                    <td>
                                        {{ $client->grupo->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.segmento') }}
                                    </th>
                                    <td>
                                        {{ $client->segmento->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.clasificacion') }}
                                    </th>
                                    <td>
                                        {{ $client->clasificacion->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $client->status->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.kam') }}
                                    </th>
                                    <td>
                                        {{ $client->kam->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.ejecutivo') }}
                                    </th>
                                    <td>
                                        {{ $client->ejecutivo->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.variantes') }}
                                    </th>
                                    <td>
                                        @foreach($client->variantes as $key => $variantes)
                                            <span class="label label-info">{{ $variantes->producto }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.client.fields.mayorista') }}
                                    </th>
                                    <td>
                                        @foreach($client->mayoristas as $key => $mayorista)
                                            <span class="label label-info">{{ $mayorista->name }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.clients.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection