@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.event.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.events.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.event.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="detail">{{ trans('cruds.event.fields.detail') }}</label>
                            <textarea class="form-control ckeditor" name="detail" id="detail">{!! old('detail') !!}</textarea>
                            @if($errors->has('detail'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('detail') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.detail_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="location">{{ trans('cruds.event.fields.location') }}</label>
                            <textarea class="form-control ckeditor" name="location" id="location">{!! old('location') !!}</textarea>
                            @if($errors->has('location'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.location_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="date">{{ trans('cruds.event.fields.date') }}</label>
                            <input class="form-control datetime" type="text" name="date" id="date" value="{{ old('date') }}" required>
                            @if($errors->has('date'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('date') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.date_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="featured_image">{{ trans('cruds.event.fields.featured_image') }}</label>
                            <input class="form-control" type="file" name="featured_image" id="featured_image"  required>
                            </div>
                            @if($errors->has('featured_image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('featured_image') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.featured_image_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.event.fields.publish_status') }}</label>
                            @foreach(App\Models\Event::PUBLISH_STATUS_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="publish_status_{{ $key }}" name="publish_status" value="{{ $key }}" {{ old('publish_status', '0') === (string) $key ? 'checked' : '' }}>
                                    <label for="publish_status_{{ $key }}">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('publish_status'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('publish_status') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.event.fields.publish_status_helper') }}</span>
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
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('frontend.events.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $event->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

<script>
    Dropzone.options.featuredImageDropzone = {
    url: '{{ route('frontend.events.storeMedia') }}',
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
      $('form').find('input[name="featured_image"]').remove()
      $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="featured_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($event) && $event->featured_image)
      var file = {!! json_encode($event->featured_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
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