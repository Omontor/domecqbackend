@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.visitReport.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.visit-reports.update", [$visitReport->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.visitReport.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $visitReport->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.visitReport.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="client_id">{{ trans('cruds.visitReport.fields.client') }}</label>
                <select class="form-control select2 {{ $errors->has('client') ? 'is-invalid' : '' }}" name="client_id" id="client_id" required>
                    @foreach($clients as $id => $entry)
                        <option value="{{ $id }}" {{ (old('client_id') ? old('client_id') : $visitReport->client->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('client'))
                    <span class="text-danger">{{ $errors->first('client') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.visitReport.fields.client_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="checkin_id">{{ trans('cruds.visitReport.fields.checkin') }}</label>
                <select class="form-control select2 {{ $errors->has('checkin') ? 'is-invalid' : '' }}" name="checkin_id" id="checkin_id" required>
                    @foreach($checkins as $id => $entry)
                        <option value="{{ $id }}" {{ (old('checkin_id') ? old('checkin_id') : $visitReport->checkin->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('checkin'))
                    <span class="text-danger">{{ $errors->first('checkin') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.visitReport.fields.checkin_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="checkout_id">{{ trans('cruds.visitReport.fields.checkout') }}</label>
                <select class="form-control select2 {{ $errors->has('checkout') ? 'is-invalid' : '' }}" name="checkout_id" id="checkout_id" required>
                    @foreach($checkouts as $id => $entry)
                        <option value="{{ $id }}" {{ (old('checkout_id') ? old('checkout_id') : $visitReport->checkout->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('checkout'))
                    <span class="text-danger">{{ $errors->first('checkout') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.visitReport.fields.checkout_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="productos">{{ trans('cruds.visitReport.fields.productos') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('productos') ? 'is-invalid' : '' }}" name="productos[]" id="productos" multiple>
                    @foreach($productos as $id => $producto)
                        <option value="{{ $id }}" {{ (in_array($id, old('productos', [])) || $visitReport->productos->contains($id)) ? 'selected' : '' }}>{{ $producto }}</option>
                    @endforeach
                </select>
                @if($errors->has('productos'))
                    <span class="text-danger">{{ $errors->first('productos') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.visitReport.fields.productos_helper') }}</span>
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