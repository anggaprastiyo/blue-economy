@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.resourceLibrary.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.resource-libraries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.id') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.nama') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->nama ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.alamat') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->alamat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.pic') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->PIC }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.long') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->long }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.lat') }}
                        </th>
                        <td>
                            {{ $resourceLibrary->lat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.resourceLibrary.fields.type') }}
                        </th>
                        <td>
                            {{ App\Models\ResourceLibrary::PUBLISH_STATUS_RADIO[$resourceLibrary->type] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.resource-libraries.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection