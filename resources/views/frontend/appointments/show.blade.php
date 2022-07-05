@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.appointment.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.appointments.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $appointment->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $appointment->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.date') }}
                                    </th>
                                    <td>
                                        {{ $appointment->date }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.hour') }}
                                    </th>
                                    <td>
                                        {{ $appointment->hour }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.client') }}
                                    </th>
                                    <td>
                                        {{ $appointment->client->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.executive') }}
                                    </th>
                                    <td>
                                        {{ $appointment->executive->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.appointment.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $appointment->status->name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.appointments.index') }}">
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