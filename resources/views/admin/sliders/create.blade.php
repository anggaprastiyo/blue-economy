@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.sliders.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.content-tags.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.sliders.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sliders.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="subtitle">{{ trans('cruds.sliders.fields.subtitle') }}</label>
                <input class="form-control {{ $errors->has('subtitle') ? 'is-invalid' : '' }}" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', '') }}">
                @if($errors->has('subtitle'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subtitle') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sliders.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="file_name">{{ trans('cruds.sliders.fields.file_name') }}</label>
                <div class="needsclick dropzone {{ $errors->has('file_name') ? 'is-invalid' : '' }}" id="file_name-dropzone">
                </div>
                @if($errors->has('file_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('file_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sliders.fields.slug_helper') }}</span>
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