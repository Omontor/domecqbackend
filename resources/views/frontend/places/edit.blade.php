@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.place.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.places.update", [$place->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="place">{{ trans('cruds.place.fields.place') }}</label>
                            <input class="form-control" type="text" name="place" id="place" value="{{ old('place', $place->place) }}" required>
                            @if($errors->has('place'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('place') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.place.fields.place_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="region_id">{{ trans('cruds.place.fields.region') }}</label>
                            <select class="form-control select2" name="region_id" id="region_id" required>
                                @foreach($regions as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('region_id') ? old('region_id') : $place->region->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('region'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('region') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection