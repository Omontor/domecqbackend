@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.appointments.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="title">{{ trans('cruds.appointment.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}">
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="date">{{ trans('cruds.appointment.fields.date') }}</label>
                            <input class="form-control date" type="text" name="date" id="date" value="{{ old('date') }}" required>
                            @if($errors->has('date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="hour">{{ trans('cruds.appointment.fields.hour') }}</label>
                            <input class="form-control timepicker" type="text" name="hour" id="hour" value="{{ old('hour') }}">
                            @if($errors->has('hour'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('hour') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.hour_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="client_id">{{ trans('cruds.appointment.fields.client') }}</label>
                            <select class="form-control select2" name="client_id" id="client_id">
                                @foreach($clients as $id => $entry)
                                    <option value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('client') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.client_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="executive_id">{{ trans('cruds.appointment.fields.executive') }}</label>
                            <select class="form-control select2" name="executive_id" id="executive_id">
                                @foreach($executives as $id => $entry)
                                    <option value="{{ $id }}" {{ old('executive_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('executive'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('executive') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.executive_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="status_id">{{ trans('cruds.appointment.fields.status') }}</label>
                            <select class="form-control select2" name="status_id" id="status_id" required>
                                @foreach($statuses as $id => $entry)
                                    <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.appointment.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection