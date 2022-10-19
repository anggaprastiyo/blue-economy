@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.user.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.users.update", [$user->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="name">{{ trans('cruds.user.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="jabatan">{{ trans('cruds.user.fields.jabatan') }}</label>
                            <input class="form-control" type="text" name="jabatan" id="jabatan" value="{{ old('jabatan', $user->jabatan) }}" required>
                            @if($errors->has('jabatan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jabatan') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.jabatan_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="instansi">{{ trans('cruds.user.fields.instansi') }}</label>
                            <input class="form-control" type="text" name="instansi" id="instansi" value="{{ old('instansi', $user->instansi) }}" required>
                            @if($errors->has('instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.instansi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.user.fields.jenis_instansi') }}</label>
                            @foreach(App\Models\User::JENIS_INSTANSI_RADIO as $key => $label)
                                <div>
                                    <input type="radio" id="jenis_instansi_{{ $key }}" name="jenis_instansi" value="{{ $key }}" {{ old('jenis_instansi', $user->jenis_instansi) === (string) $key ? 'checked' : '' }} required>
                                    <label for="jenis_instansi_{{ $key }}">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if($errors->has('jenis_instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jenis_instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.jenis_instansi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="alamat_instansi">{{ trans('cruds.user.fields.alamat_instansi') }}</label>
                            <textarea class="form-control ckeditor" name="alamat_instansi" id="alamat_instansi">{!! old('alamat_instansi', $user->alamat_instansi) !!}</textarea>
                            @if($errors->has('alamat_instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('alamat_instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.alamat_instansi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.user.fields.pendidikan_terakhir') }}</label>
                            <select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                                <option value disabled {{ old('pendidikan_terakhir', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\User::PENDIDIKAN_TERAKHIR_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('pendidikan_terakhir', $user->pendidikan_terakhir) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('pendidikan_terakhir'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pendidikan_terakhir') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.pendidikan_terakhir_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <div>
                                <input type="hidden" name="approved" value="0">
                                <input type="checkbox" name="approved" id="approved" value="1" {{ $user->approved || old('approved', 0) === 1 ? 'checked' : '' }}>
                                <label for="approved">{{ trans('cruds.user.fields.approved') }}</label>
                            </div>
                            @if($errors->has('approved'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('approved') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.approved_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="email">{{ trans('cruds.user.fields.email') }}</label>
                            <input class="form-control" type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="password">{{ trans('cruds.user.fields.password') }}</label>
                            <input class="form-control" type="password" name="password" id="password">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.password_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="roles">{{ trans('cruds.user.fields.roles') }}</label>
                            <div style="padding-bottom: 4px">
                                <span class="btn btn-info btn-xs select-all" style="border-radius: 0">{{ trans('global.select_all') }}</span>
                                <span class="btn btn-info btn-xs deselect-all" style="border-radius: 0">{{ trans('global.deselect_all') }}</span>
                            </div>
                            <select class="form-control select2" name="roles[]" id="roles" multiple required>
                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}" {{ (in_array($id, old('roles', [])) || $user->roles->contains($id)) ? 'selected' : '' }}>{{ $role }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('roles'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('roles') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.roles_helper') }}</span>
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
                xhr.open('POST', '{{ route('frontend.users.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $user->id ?? 0 }}');
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

@endsection