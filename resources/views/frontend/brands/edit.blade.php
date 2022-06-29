@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.brand.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.brands.update", [$brand->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="marca">{{ trans('cruds.brand.fields.marca') }}</label>
                            <input class="form-control" type="text" name="marca" id="marca" value="{{ old('marca', $brand->marca) }}" required>
                            @if($errors->has('marca'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('marca') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.brand.fields.marca_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="categoria_id">{{ trans('cruds.brand.fields.categoria') }}</label>
                            <select class="form-control select2" name="categoria_id" id="categoria_id" required>
                                @foreach($categorias as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('categoria_id') ? old('categoria_id') : $brand->categoria->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('categoria'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('categoria') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.brand.fields.categoria_helper') }}</span>
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