@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.checkout.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.checkouts.update", [$checkout->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="datetime">{{ trans('cruds.checkout.fields.datetime') }}</label>
                <input class="form-control datetime {{ $errors->has('datetime') ? 'is-invalid' : '' }}" type="text" name="datetime" id="datetime" value="{{ old('datetime', $checkout->datetime) }}" required>
                @if($errors->has('datetime'))
                    <span class="text-danger">{{ $errors->first('datetime') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.checkout.fields.datetime_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lat">{{ trans('cruds.checkout.fields.lat') }}</label>
                <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat', $checkout->lat) }}" required>
                @if($errors->has('lat'))
                    <span class="text-danger">{{ $errors->first('lat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.checkout.fields.lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lng">{{ trans('cruds.checkout.fields.lng') }}</label>
                <input class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" type="text" name="lng" id="lng" value="{{ old('lng', $checkout->lng) }}" required>
                @if($errors->has('lng'))
                    <span class="text-danger">{{ $errors->first('lng') }}</span>
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



@endsection