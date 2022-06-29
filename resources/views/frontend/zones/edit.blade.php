@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.zone.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.zones.update", [$zone->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="zone">{{ trans('cruds.zone.fields.zone') }}</label>
                            <input class="form-control" type="text" name="zone" id="zone" value="{{ old('zone', $zone->zone) }}" required>
                            @if($errors->has('zone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('zone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.zone.fields.zone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="place_id">{{ trans('cruds.zone.fields.place') }}</label>
                            <select class="form-control select2" name="place_id" id="place_id" required>
                                @foreach($places as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('place_id') ? old('place_id') : $zone->place->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('place'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('place') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.zone.fields.place_helper') }}</span>
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