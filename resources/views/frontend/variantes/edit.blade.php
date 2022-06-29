@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.variante.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.variantes.update", [$variante->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="producto">{{ trans('cruds.variante.fields.producto') }}</label>
                            <input class="form-control" type="text" name="producto" id="producto" value="{{ old('producto', $variante->producto) }}" required>
                            @if($errors->has('producto'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('producto') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.variante.fields.producto_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="marca_id">{{ trans('cruds.variante.fields.marca') }}</label>
                            <select class="form-control select2" name="marca_id" id="marca_id" required>
                                @foreach($marcas as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('marca_id') ? old('marca_id') : $variante->marca->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('marca'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('marca') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.variante.fields.marca_helper') }}</span>
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