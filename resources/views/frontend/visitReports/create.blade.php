@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.visitReport.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.visit-reports.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="user_id">{{ trans('cruds.visitReport.fields.user') }}</label>
                            <select class="form-control select2" name="user_id" id="user_id" required>
                                @foreach($users as $id => $entry)
                                    <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.visitReport.fields.user_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="client_id">{{ trans('cruds.visitReport.fields.client') }}</label>
                            <select class="form-control select2" name="client_id" id="client_id" required>
                                @foreach($clients as $id => $entry)
                                    <option value="{{ $id }}" {{ old('client_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('client'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('client') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.visitReport.fields.client_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="checkin_id">{{ trans('cruds.visitReport.fields.checkin') }}</label>
                            <select class="form-control select2" name="checkin_id" id="checkin_id" required>
                                @foreach($checkins as $id => $entry)
                                    <option value="{{ $id }}" {{ old('checkin_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('checkin'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('checkin') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.visitReport.fields.checkin_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="checkout_id">{{ trans('cruds.visitReport.fields.checkout') }}</label>
                            <select class="form-control select2" name="checkout_id" id="checkout_id" required>
                                @foreach($checkouts as $id => $entry)
                                    <option value="{{ $id }}" {{ old('checkout_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('checkout'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('checkout') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.visitReport.fields.checkout_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="productos">{{ trans('cruds.visitReport.fields.productos') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="productos[]" id="productos" multiple>
                                @foreach($productos as $id => $producto)
                                    <option value="{{ $id }}" {{ in_array($id, old('productos', [])) ? 'selected' : '' }}>{{ $producto }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('productos'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('productos') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection