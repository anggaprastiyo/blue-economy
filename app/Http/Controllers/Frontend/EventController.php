<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyEventRequest;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\ContentCategory;
use App\Models\ContentPage;
use App\Models\ContentTag;
use App\Models\ResourceLibrary;
use App\Repositories\ContentPageRepository;
use App\Models\Event;
use App\Models\User;
use Carbon\Carbon;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class EventController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::with(['created_by', 'media'])->get();
        $events->transform(function ($item) {
            $item->new_date = date('l, d Y | H:i', strtotime($item->date));
            return $item;
        });

        $users = User::get();

        return view('frontend.events.index', compact('events', 'users'));
    }

    public function detail($id)
    {
        $article = ContentPageRepository::getById($id);
        $contentCategories = ContentCategory::get()->whereNotIn('slug', ['about', 'regulation']);
        $events = Event::where('id', $id)
            ->get();
        return view('frontend.events.detail')->with(compact('events', 'contentCategories', 'article'));
    }

    public function all()
    {
        $events = Event::with(['created_by', 'media'])->simplePaginate(10);
        return view('frontend.events.list_all')->with(compact('events'));
    }

    public function categoryAll()
    {
        return view('frontend.events.category_all');
    }

    public function test()
    {
        abort_if(Gate::denies('event_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $events = Event::with(['created_by', 'media'])->get();

        $users = User::get();

        return view('frontend.events.index2', compact('events', 'users'));
    }

    public function create()
    {
        abort_if(Gate::denies('event_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.events.create');
    }

    public function store(StoreEventRequest $request)
    {
        $request->merge(['publish_status'=> 0, 'date' => $request->date.' '.$request->time.':00']);
        $event = Event::create($request->all());

        if ($request->input('featured_image', false)) {
            $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $event->id]);
        }

        return redirect()->route('frontend.events.index');
    }

    public function edit(Event $event)
    {
        abort_if(Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->load('created_by');
        $datetime = Carbon::parse($event->date);
        $event->new_date = $datetime->format('Y-m-d');
        $event->time = $datetime->format('H:i');

        return view('frontend.events.edit', compact('event'));
    }

    public function update(UpdateEventRequest $request, Event $event)
    {
        $request->merge(['date' => $request->date.' '.$request->time.':00']);
        $event->update($request->all());

        if ($request->input('featured_image', false)) {
            if (!$event->featured_image || $request->input('featured_image') !== $event->featured_image->file_name) {
                if ($event->featured_image) {
                    $event->featured_image->delete();
                }
                $event->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($event->featured_image) {
            $event->featured_image->delete();
        }

        return redirect()->route('frontend.events.index');
    }

    public function show(Event $event)
    {
        abort_if(Gate::denies('event_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->load('created_by');

        return view('frontend.events.show', compact('event'));
    }

    public function destroy(Event $event)
    {
        abort_if(Gate::denies('event_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $event->delete();

        return back();
    }

    public function massDestroy(MassDestroyEventRequest $request)
    {
        Event::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('event_create') && Gate::denies('event_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Event();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
