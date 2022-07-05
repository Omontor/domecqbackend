@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.witness.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.witnesses.update", [$witness->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="witness_category_id">{{ trans('cruds.witness.fields.witness_category') }}</label>
                            <select class="form-control select2" name="witness_category_id" id="witness_category_id" required>
                                @foreach($witness_categories as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('witness_category_id') ? old('witness_category_id') : $witness->witness_category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('witness_category'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('witness_category') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.witness.fields.witness_category_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="witness">{{ trans('cruds.witness.fields.witness') }}</label>
                            <div class="needsclick dropzone" id="witness-dropzone">
                            </div>
                            @if($errors->has('witness'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('witness') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.witness.fields.witness_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="appointment_id">{{ trans('cruds.witness.fields.appointment') }}</label>
                            <select class="form-control select2" name="appointment_id" id="appointment_id">
                                @foreach($appointments as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('appointment_id') ? old('appointment_id') : $witness->appointment->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('appointment'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('appointment') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.witness.fields.appointment_helper') }}</span>
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
    Dropzone.options.witnessDropzone = {
    url: '{{ route('frontend.witnesses.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 10,
      width: 8192,
      height: 8192
    },
    success: function (file, response) {
      $('form').find('input[name="witness"]').remove()
      $('form').append('<input type="hidden" name="witness" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="witness"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($witness) && $witness->witness)
      var file = {!! json_encode($witness->witness) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="witness" value="' + file.file_name + '">')
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