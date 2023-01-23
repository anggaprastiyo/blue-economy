@extends('layouts.app')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card mx-4">
                <div class="card-body p-4">

                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <h1>{{ trans('panel.site_title') }}</h1>
                        <p class="text-muted">{{ trans('global.register') }}</p>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user fa-fw"></i>
                                </span>
                            </div>
                            <input type="text" name="name"
                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus
                                placeholder="{{ trans('global.user_name') }}" value="{{ old('name', null) }}">
                            @if ($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope fa-fw"></i>
                                </span>
                            </div>
                            <input type="email" name="email"
                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required
                                placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                            @if ($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-fw"></i>
                                </span>
                            </div>
                            <input type="password" name="password"
                                class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required
                                placeholder="{{ trans('global.login_password') }}">
                            @if ($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock fa-fw"></i>
                                </span>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" required
                                placeholder="{{ trans('global.login_password_confirmation') }}">
                        </div>

                        <div class="form-group">
                            <label class="required" for="instansi">{{ trans('cruds.user.fields.instansi') }}</label>
                            <input class="form-control {{ $errors->has('instansi') ? 'is-invalid' : '' }}" type="text"
                                name="instansi" id="instansi" value="{{ old('instansi', '') }}" required>
                            @if ($errors->has('instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.instansi_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label class="required" for="jabatan">Jabatan</label>
                            <input class="form-control {{ $errors->has('jabatan') ? 'is-invalid' : '' }}" type="text"
                                   name="jabatan" id="jabatan" value="{{ old('jabatan', '') }}" required>
                            @if ($errors->has('jabatan'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jabatan') }}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label class="required">{{ trans('cruds.user.fields.jenis_instansi') }}</label>
                            @foreach (App\Models\User::JENIS_INSTANSI_RADIO as $key => $label)
                                <div class="form-check {{ $errors->has('jenis_instansi') ? 'is-invalid' : '' }}">
                                    <input class="form-check-input" type="radio" id="jenis_instansi_{{ $key }}"
                                        name="jenis_instansi" value="{{ $key }}"
                                        {{ old('jenis_instansi', '') === (string) $key ? 'checked' : '' }} required>
                                    <label class="form-check-label"
                                        for="jenis_instansi_{{ $key }}">{{ $label }}</label>
                                </div>
                            @endforeach
                            @if ($errors->has('jenis_instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('jenis_instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.jenis_instansi_helper') }}</span>
                        </div>

                        <div class="form-group">
                            <label for="alamat_instansi">{{ trans('cruds.user.fields.alamat_instansi') }}</label>
                            <textarea class="form-control ckeditor {{ $errors->has('alamat_instansi') ? 'is-invalid' : '' }}"
                                name="alamat_instansi" id="alamat_instansi">{!! old('alamat_instansi') !!}</textarea>
                            @if ($errors->has('alamat_instansi'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('alamat_instansi') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.alamat_instansi_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required">{{ trans('cruds.user.fields.pendidikan_terakhir') }}</label>
                            <select class="form-control {{ $errors->has('pendidikan_terakhir') ? 'is-invalid' : '' }}"
                                name="pendidikan_terakhir" id="pendidikan_terakhir" required>
                                <option value disabled {{ old('pendidikan_terakhir', null) === null ? 'selected' : '' }}>
                                    {{ trans('global.pleaseSelect') }}</option>
                                @foreach (App\Models\User::PENDIDIKAN_TERAKHIR_SELECT as $key => $label)
                                    <option value="{{ $key }}"
                                        {{ old('pendidikan_terakhir', '') === (string) $key ? 'selected' : '' }}>
                                        {{ $label }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('pendidikan_terakhir'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('pendidikan_terakhir') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.user.fields.pendidikan_terakhir_helper') }}</span>
                        </div>

                        <button class="btn btn-block btn-primary">
                            {{ trans('global.register') }}
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
