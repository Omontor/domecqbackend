@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.variante.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.variantes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="producto">{{ trans('cruds.variante.fields.producto') }}</label>
                <input class="form-control {{ $errors->has('producto') ? 'is-invalid' : '' }}" type="text" name="producto" id="producto" value="{{ old('producto', '') }}" required>
                @if($errors->has('producto'))
                    <span class="text-danger">{{ $errors->first('producto') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.variante.fields.producto_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="marca_id">{{ trans('cruds.variante.fields.marca') }}</label>
                <select class="form-control select2 {{ $errors->has('marca') ? 'is-invalid' : '' }}" name="marca_id" id="marca_id" required>
                    @foreach($marcas as $id => $entry)
                        <option value="{{ $id }}" {{ old('marca_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('marca'))
                    <span class="text-danger">{{ $errors->first('marca') }}</span>
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



@endsection