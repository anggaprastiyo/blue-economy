@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.resourceLibrary.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.resource-libraries.update", [$resourceLibrary->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label class="required" for="nama">{{ trans('cruds.resourceLibrary.fields.nama') }}</label>
                <input class="form-control {{ $errors->has('nama') ? 'is-invalid' : '' }}" type="text" name="nama" id="nama" value="{{ old('nama', $resourceLibrary->nama) }}" required>
                @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nama') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.nama_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="alamat">{{ trans('cruds.resourceLibrary.fields.alamat') }}</label>
                <input class="form-control {{ $errors->has('alamat') ? 'is-invalid' : '' }}" type="text" name="alamat" id="alamat" value="{{ old('alamat', $resourceLibrary->alamat) }}" required>
                @if($errors->has('alamat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('alamat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.alamat_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="pic">{{ trans('cruds.resourceLibrary.fields.pic') }}</label>
                <input class="form-control {{ $errors->has('pic') ? 'is-invalid' : '' }}" type="text" name="pic" id="pic" value="{{ old('pic', $resourceLibrary->PIC) }}" required>
                @if($errors->has('pic'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pic') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.pic_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="long">{{ trans('cruds.resourceLibrary.fields.long') }}</label>
                <input class="form-control {{ $errors->has('long') ? 'is-invalid' : '' }}" type="text" name="long" id="long" value="{{ old('long', $resourceLibrary->long) }}" required>
                @if($errors->has('long'))
                    <div class="invalid-feedback">
                        {{ $errors->first('long') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.long_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="lat">{{ trans('cruds.resourceLibrary.fields.lat') }}</label>
                <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="text" name="lat" id="lat" value="{{ old('lat', $resourceLibrary->lat) }}" required>
                @if($errors->has('lat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.lat_helper') }}</span>
            </div>

            <div class="form-group">
                <label>{{ trans('cruds.resourceLibrary.fields.publish_status') }}</label>
                @foreach(App\Models\ResourceLibrary::PUBLISH_STATUS_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('type') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="type_{{ $key }}" name="type" value="{{ $key }}" {{ old('type', $resourceLibrary->type) === (string) $key ? 'checked' : '' }}>
                        <label class="form-check-label" for="type_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.resourceLibrary.fields.type_helper') }}</span>
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
