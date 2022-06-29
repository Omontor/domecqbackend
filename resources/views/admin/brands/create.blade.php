@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.brand.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.brands.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="marca">{{ trans('cruds.brand.fields.marca') }}</label>
                <input class="form-control {{ $errors->has('marca') ? 'is-invalid' : '' }}" type="text" name="marca" id="marca" value="{{ old('marca', '') }}" required>
                @if($errors->has('marca'))
                    <span class="text-danger">{{ $errors->first('marca') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.brand.fields.marca_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="categoria_id">{{ trans('cruds.brand.fields.categoria') }}</label>
                <select class="form-control select2 {{ $errors->has('categoria') ? 'is-invalid' : '' }}" name="categoria_id" id="categoria_id" required>
                    @foreach($categorias as $id => $entry)
                        <option value="{{ $id }}" {{ old('categoria_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('categoria'))
                    <span class="text-danger">{{ $errors->first('categoria') }}</span>
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



@endsection