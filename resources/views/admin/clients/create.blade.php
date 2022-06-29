@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.client.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.clients.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.client.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.client.fields.logo') }}</label>
                <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                </div>
                @if($errors->has('logo'))
                    <span class="text-danger">{{ $errors->first('logo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="contact_email">{{ trans('cruds.client.fields.contact_email') }}</label>
                <input class="form-control {{ $errors->has('contact_email') ? 'is-invalid' : '' }}" type="email" name="contact_email" id="contact_email" value="{{ old('contact_email') }}">
                @if($errors->has('contact_email'))
                    <span class="text-danger">{{ $errors->first('contact_email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.contact_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                <input class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" type="text" name="phone" id="phone" value="{{ old('phone', '') }}">
                @if($errors->has('phone'))
                    <span class="text-danger">{{ $errors->first('phone') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.phone_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="address">{{ trans('cruds.client.fields.address') }}</label>
                <input class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" type="text" name="address" id="address" value="{{ old('address', '') }}">
                @if($errors->has('address'))
                    <span class="text-danger">{{ $errors->first('address') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.address_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lat">{{ trans('cruds.client.fields.lat') }}</label>
                <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat', '') }}">
                @if($errors->has('lat'))
                    <span class="text-danger">{{ $errors->first('lat') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="lng">{{ trans('cruds.client.fields.lng') }}</label>
                <input class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" type="text" name="lng" id="lng" value="{{ old('lng', '') }}">
                @if($errors->has('lng'))
                    <span class="text-danger">{{ $errors->first('lng') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.lng_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="rfc">{{ trans('cruds.client.fields.rfc') }}</label>
                <input class="form-control {{ $errors->has('rfc') ? 'is-invalid' : '' }}" type="text" name="rfc" id="rfc" value="{{ old('rfc', '') }}" required>
                @if($errors->has('rfc'))
                    <span class="text-danger">{{ $errors->first('rfc') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.rfc_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="razon_social">{{ trans('cruds.client.fields.razon_social') }}</label>
                <input class="form-control {{ $errors->has('razon_social') ? 'is-invalid' : '' }}" type="text" name="razon_social" id="razon_social" value="{{ old('razon_social', '') }}" required>
                @if($errors->has('razon_social'))
                    <span class="text-danger">{{ $errors->first('razon_social') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.razon_social_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="nombre_comercial">{{ trans('cruds.client.fields.nombre_comercial') }}</label>
                <input class="form-control {{ $errors->has('nombre_comercial') ? 'is-invalid' : '' }}" type="text" name="nombre_comercial" id="nombre_comercial" value="{{ old('nombre_comercial', '') }}" required>
                @if($errors->has('nombre_comercial'))
                    <span class="text-danger">{{ $errors->first('nombre_comercial') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.nombre_comercial_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="grupo_id">{{ trans('cruds.client.fields.grupo') }}</label>
                <select class="form-control select2 {{ $errors->has('grupo') ? 'is-invalid' : '' }}" name="grupo_id" id="grupo_id">
                    @foreach($grupos as $id => $entry)
                        <option value="{{ $id }}" {{ old('grupo_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('grupo'))
                    <span class="text-danger">{{ $errors->first('grupo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.grupo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="segmento_id">{{ trans('cruds.client.fields.segmento') }}</label>
                <select class="form-control select2 {{ $errors->has('segmento') ? 'is-invalid' : '' }}" name="segmento_id" id="segmento_id">
                    @foreach($segmentos as $id => $entry)
                        <option value="{{ $id }}" {{ old('segmento_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('segmento'))
                    <span class="text-danger">{{ $errors->first('segmento') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.segmento_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="clasificacion_id">{{ trans('cruds.client.fields.clasificacion') }}</label>
                <select class="form-control select2 {{ $errors->has('clasificacion') ? 'is-invalid' : '' }}" name="clasificacion_id" id="clasificacion_id" required>
                    @foreach($clasificacions as $id => $entry)
                        <option value="{{ $id }}" {{ old('clasificacion_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('clasificacion'))
                    <span class="text-danger">{{ $errors->first('clasificacion') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.clasificacion_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="status_id">{{ trans('cruds.client.fields.status') }}</label>
                <select class="form-control select2 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status_id" id="status_id" required>
                    @foreach($statuses as $id => $entry)
                        <option value="{{ $id }}" {{ old('status_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="kam_id">{{ trans('cruds.client.fields.kam') }}</label>
                <select class="form-control select2 {{ $errors->has('kam') ? 'is-invalid' : '' }}" name="kam_id" id="kam_id" required>
                    @foreach($kams as $id => $entry)
                        <option value="{{ $id }}" {{ old('kam_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('kam'))
                    <span class="text-danger">{{ $errors->first('kam') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.kam_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="ejecutivo_id">{{ trans('cruds.client.fields.ejecutivo') }}</label>
                <select class="form-control select2 {{ $errors->has('ejecutivo') ? 'is-invalid' : '' }}" name="ejecutivo_id" id="ejecutivo_id" required>
                    @foreach($ejecutivos as $id => $entry)
                        <option value="{{ $id }}" {{ old('ejecutivo_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('ejecutivo'))
                    <span class="text-danger">{{ $errors->first('ejecutivo') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.ejecutivo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="variantes">{{ trans('cruds.client.fields.variantes') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('variantes') ? 'is-invalid' : '' }}" name="variantes[]" id="variantes" multiple>
                    @foreach($variantes as $id => $variante)
                        <option value="{{ $id }}" {{ in_array($id, old('variantes', [])) ? 'selected' : '' }}>{{ $variante }}</option>
                    @endforeach
                </select>
                @if($errors->has('variantes'))
                    <span class="text-danger">{{ $errors->first('variantes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.variantes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="mayoristas">{{ trans('cruds.client.fields.mayorista') }}</label>
                <div style="padding-bottom: 4px">
                    <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                    <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                </div>
                <select class="form-control select2 {{ $errors->has('mayoristas') ? 'is-invalid' : '' }}" name="mayoristas[]" id="mayoristas" multiple>
                    @foreach($mayoristas as $id => $mayorista)
                        <option value="{{ $id }}" {{ in_array($id, old('mayoristas', [])) ? 'selected' : '' }}>{{ $mayorista }}</option>
                    @endforeach
                </select>
                @if($errors->has('mayoristas'))
                    <span class="text-danger">{{ $errors->first('mayoristas') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.client.fields.mayorista_helper') }}</span>
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

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.clients.storeMedia') }}',
    maxFilesize: 2, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 2,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($client) && $client->logo)
      var file = {!! json_encode($client->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
      this.options.maxFiles = this.options.maxFiles - 1
@endif
    },
    error: function (file, response) {
        if ($.type(response) === 'string') {
            var message = response //dropzone sends it's own error messages in string
        } else {
            var message = response.errors.file
        }
        file.previewElement.classList.add('dz-error')
        _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
        _results = []
        for (_i = 0, _len = _ref.length; _i < _len; _i++) {
            node = _ref[_i]
            _results.push(node.textContent = message)
        }

        return _results
    }
}
</script>
@endsection