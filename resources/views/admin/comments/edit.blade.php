@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.comment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.comments.update", [$comment->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="content_page_id">{{ trans('cruds.comment.fields.content_page') }}</label>
                <select class="form-control select2 {{ $errors->has('content_page') ? 'is-invalid' : '' }}" name="content_page_id" id="content_page_id" required>
                    @foreach($content_pages as $id => $entry)
                        <option value="{{ $id }}" {{ (old('content_page_id') ? old('content_page_id') : $comment->content_page->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('content_page'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content_page') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.content_page_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="user_id">{{ trans('cruds.comment.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id" required>
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ (old('user_id') ? old('user_id') : $comment->user->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <div class="invalid-feedback">
                        {{ $errors->first('user') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="parent_id">{{ trans('cruds.comment.fields.parent') }}</label>
                <select class="form-control select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                    @foreach($parents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('parent_id') ? old('parent_id') : $comment->parent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.parent_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="comment">{{ trans('cruds.comment.fields.comment') }}</label>
                <input class="form-control {{ $errors->has('comment') ? 'is-invalid' : '' }}" type="text" name="comment" id="comment" value="{{ old('comment', $comment->comment) }}" required>
                @if($errors->has('comment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('comment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.comment.fields.comment_helper') }}</span>
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