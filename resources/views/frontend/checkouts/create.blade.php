@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.checkout.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.checkouts.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="datetime">{{ trans('cruds.checkout.fields.datetime') }}</label>
                            <input class="form-control datetime" type="text" name="datetime" id="datetime" value="{{ old('datetime') }}" required>
                            @if($errors->has('datetime'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('datetime') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkout.fields.datetime_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lat">{{ trans('cruds.checkout.fields.lat') }}</label>
                            <input class="form-control" type="text" name="lat" id="lat" value="{{ old('lat', '') }}" required>
                            @if($errors->has('lat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkout.fields.lat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="lng">{{ trans('cruds.checkout.fields.lng') }}</label>
                            <input class="form-control" type="text" name="lng" id="lng" value="{{ old('lng', '') }}" required>
                            @if($errors->has('lng'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lng') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.checkout.fields.lng_helper') }}</span>
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