@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.checkin.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.checkins.update", [$checkin->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="datetime">{{ trans('cruds.checkin.fields.datetime') }}</label>
                            <input class="form-control datetime" type="text" name="datetime" id="datetime" value="{{ old('datetime', $checkin->datetime) }}" required>
                            @if($errors->has('datetime'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('datetime') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkin.fields.datetime_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lat">{{ trans('cruds.checkin.fields.lat') }}</label>
                            <input class="form-control" type="text" name="lat" id="lat" value="{{ old('lat', $checkin->lat) }}" required>
                            @if($errors->has('lat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkin.fields.lat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lng">{{ trans('cruds.checkin.fields.lng') }}</label>
                            <input class="form-control" type="text" name="lng" id="lng" value="{{ old('lng', $checkin->lng) }}" required>
                            @if($errors->has('lng'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lng') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkin.fields.lng_helper') }}</span>
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