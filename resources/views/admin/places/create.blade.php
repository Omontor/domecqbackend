@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.place.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.places.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="place">{{ trans('cruds.place.fields.place') }}</label>
                <input class="form-control {{ $errors->has('place') ? 'is-invalid' : '' }}" type="text" name="place" id="place" value="{{ old('place', '') }}" required>
                @if($errors->has('place'))
                    <span class="text-danger">{{ $errors->first('place') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.place.fields.place_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="region_id">{{ trans('cruds.place.fields.region') }}</label>
                <select class="form-control select2 {{ $errors->has('region') ? 'is-invalid' : '' }}" name="region_id" id="region_id" required>
                    @foreach($regions as $id => $entry)
                        <option value="{{ $id }}" {{ old('region_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('region'))
                    <span class="text-danger">{{ $errors->first('region') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.place.fields.region_helper') }}</span>
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