@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.client.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.clients.update", [$client->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.client.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $client->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="logo">{{ trans('cruds.client.fields.logo') }}</label>
                            <div class="needsclick dropzone" id="logo-dropzone">
                            </div>
                            @if($errors->has('logo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('logo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.logo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contact_email">{{ trans('cruds.client.fields.contact_email') }}</label>
                            <input class="form-control" type="email" name="contact_email" id="contact_email" value="{{ old('contact_email', $client->contact_email) }}">
                            @if($errors->has('contact_email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contact_email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.contact_email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ trans('cruds.client.fields.phone') }}</label>
                            <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone', $client->phone) }}">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="address">{{ trans('cruds.client.fields.address') }}</label>
                            <input class="form-control" type="text" name="address" id="address" value="{{ old('address', $client->address) }}">
                            @if($errors->has('address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="lat">{{ trans('cruds.client.fields.lat') }}</label>
                            <input class="form-control" type="text" name="lat" id="lat" value="{{ old('lat', $client->lat) }}">
                            @if($errors->has('lat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lat') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.lat_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="lng">{{ trans('cruds.client.fields.lng') }}</label>
                            <input class="form-control" type="text" name="lng" id="lng" value="{{ old('lng', $client->lng) }}">
                            @if($errors->has('lng'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lng') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.lng_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="rfc">{{ trans('cruds.client.fields.rfc') }}</label>
                            <input class="form-control" type="text" name="rfc" id="rfc" value="{{ old('rfc', $client->rfc) }}" required>
                            @if($errors->has('rfc'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('rfc') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.rfc_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="razon_social">{{ trans('cruds.client.fields.razon_social') }}</label>
                            <input class="form-control" type="text" name="razon_social" id="razon_social" value="{{ old('razon_social', $client->razon_social) }}" required>
                            @if($errors->has('razon_social'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('razon_social') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.razon_social_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="nombre_comercial">{{ trans('cruds.client.fields.nombre_comercial') }}</label>
                            <input class="form-control" type="text" name="nombre_comercial" id="nombre_comercial" value="{{ old('nombre_comercial', $client->nombre_comercial) }}" required>
                            @if($errors->has('nombre_comercial'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nombre_comercial') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.nombre_comercial_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="grupo_id">{{ trans('cruds.client.fields.grupo') }}</label>
                            <select class="form-control select2" name="grupo_id" id="grupo_id">
                                @foreach($grupos as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('grupo_id') ? old('grupo_id') : $client->grupo->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('grupo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('grupo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.grupo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="segmento_id">{{ trans('cruds.client.fields.segmento') }}</label>
                            <select class="form-control select2" name="segmento_id" id="segmento_id">
                                @foreach($segmentos as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('segmento_id') ? old('segmento_id') : $client->segmento->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('segmento'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('segmento') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.segmento_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="clasificacion_id">{{ trans('cruds.client.fields.clasificacion') }}</label>
                            <select class="form-control select2" name="clasificacion_id" id="clasificacion_id" required>
                                @foreach($clasificacions as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('clasificacion_id') ? old('clasificacion_id') : $client->clasificacion->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('clasificacion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('clasificacion') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.clasificacion_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="status_id">{{ trans('cruds.client.fields.status') }}</label>
                            <select class="form-control select2" name="status_id" id="status_id" required>
                                @foreach($statuses as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('status_id') ? old('status_id') : $client->status->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.status_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="kam_id">{{ trans('cruds.client.fields.kam') }}</label>
                            <select class="form-control select2" name="kam_id" id="kam_id" required>
                                @foreach($kams as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('kam_id') ? old('kam_id') : $client->kam->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('kam'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('kam') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.kam_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="ejecutivo_id">{{ trans('cruds.client.fields.ejecutivo') }}</label>
                            <select class="form-control select2" name="ejecutivo_id" id="ejecutivo_id" required>
                                @foreach($ejecutivos as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('ejecutivo_id') ? old('ejecutivo_id') : $client->ejecutivo->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('ejecutivo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ejecutivo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.ejecutivo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="variantes">{{ trans('cruds.client.fields.variantes') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="variantes[]" id="variantes" multiple>
                                @foreach($variantes as $id => $variante)
                                    <option value="{{ $id }}" {{ (in_array($id, old('variantes', [])) || $client->variantes->contains($id)) ? 'selected' : '' }}>{{ $variante }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('variantes'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('variantes') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.client.fields.variantes_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="mayoristas">{{ trans('cruds.client.fields.mayorista') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="mayoristas[]" id="mayoristas" multiple>
                                @foreach($mayoristas as $id => $mayorista)
                                    <option value="{{ $id }}" {{ (in_array($id, old('mayoristas', [])) || $client->mayoristas->contains($id)) ? 'selected' : '' }}>{{ $mayorista }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('mayoristas'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('mayoristas') }}
                                </div>
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

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.logoDropzone = {
    url: '{{ route('frontend.clients.storeMedia') }}',
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