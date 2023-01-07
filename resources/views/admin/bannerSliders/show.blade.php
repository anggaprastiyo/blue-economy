@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.banner_slider.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.banner_sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.banner_slider.fields.id') }}
                        </th>
                        <td>
                            {{ $bannerSlider->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.banner_slider.fields.title') }}
                        </th>
                        <td>
                            {{ $bannerSlider->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.banner_slider.fields.text') }}
                        </th>
                        <td>
                            {!! $bannerSlider->text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.banner_slider.fields.featured_image') }}
                        </th>
                        <td>
                            @if($bannerSlider->featured_image)
                                <a href="{{ $bannerSlider->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $bannerSlider->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.banner_slider.fields.publish_status') }}
                        </th>
                        <td>
                            {{ App\Models\BannerSlider::PUBLISH_STATUS_RADIO[$bannerSlider->publish_status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.banner_sliders.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
