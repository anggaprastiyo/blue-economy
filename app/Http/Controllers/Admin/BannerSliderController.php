<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyBannerSliderRequest;
use App\Http\Requests\StoreBannerSliderRequest;
use App\Http\Requests\UpdateBannerSliderRequest;
use App\Models\BannerSlider;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BannerSliderController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('banner_slider_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = BannerSlider::select(sprintf('%s.*', (new BannerSlider())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'banner_slider_show';
                $editGate = 'banner_slider_edit';
                $deleteGate = 'banner_slider_delete';
                $crudRoutePart = 'banner_sliders';

                return view('partials.datatablesActions', compact('viewGate', 'editGate', 'deleteGate', 'crudRoutePart', 'row'));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });

            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });

            $table->editColumn('text', function ($row) {
                return $row->text ? $row->text : '';
            });

            $table->editColumn('featured_image', function ($row) {
                if ($photo = $row->featured_image) {
                    return sprintf('<a href="%s" target="_blank"><img src="%s" width="50px" height="50px"></a>', $photo->url, $photo->thumbnail);
                }

                return '';
            });
            $table->editColumn('publish_status', function ($row) {
                return $row->publish_status ? BannerSlider::PUBLISH_STATUS_RADIO[$row->publish_status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'featured_image']);

            return $table->make(true);
        }

        $users = User::get();

        return view('admin.bannerSliders.index', compact('users'));
    }

    public function create()
    {
        abort_if(Gate::denies('banner_slider_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bannerSliders.create');
    }

    public function store(StoreBannerSliderRequest $request)
    {
        $bannerSlider = BannerSlider::create($request->all());

        if ($request->input('featured_image', false)) {
            $bannerSlider->addMedia(storage_path('tmp/uploads/'.basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $bannerSlider->id]);
        }

        return redirect()->route('admin.banner_sliders.index');
    }

    public function edit(BannerSlider $bannerSlider)
    {
        abort_if(Gate::denies('banner_slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bannerSliders.edit', compact('bannerSlider'));
    }

    public function update(UpdateBannerSliderRequest $request, BannerSlider $bannerSlider)
    {
        $bannerSlider->update($request->all());

        if ($request->input('featured_image', false)) {
            if (! $bannerSlider->featured_image || $request->input('featured_image') !== $bannerSlider->featured_image->file_name) {
                if ($bannerSlider->featured_image) {
                    $bannerSlider->featured_image->delete();
                }
                $bannerSlider->addMedia(storage_path('tmp/uploads/'.basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($bannerSlider->featured_image) {
            $bannerSlider->featured_image->delete();
        }

        return redirect()->route('admin.banner_sliders.index');
    }

    public function show(BannerSlider $bannerSlider)
    {
        abort_if(Gate::denies('banner_slider_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.bannerSliders.show', compact('bannerSlider'));
    }

    public function destroy(BannerSlider $bannerSlider)
    {
        abort_if(Gate::denies('banner_slider_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $bannerSlider->delete();

        return back();
    }

    public function massDestroy(MassDestroyBannerSliderRequest $request)
    {
        BannerSlider::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('banner_slider_create') && Gate::denies('banner_slider_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model = new BannerSlider();
        $model->id = $request->input('crud_id', 0);
        $model->exists = true;
        $media = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
