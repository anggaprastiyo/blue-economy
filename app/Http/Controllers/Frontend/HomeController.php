<?php

namespace App\Http\Controllers\Frontend;
use App\Models\ContentPage;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController
{
    public function index()
    {
        $events = Event::where('publish_status', config('constant.general_publish_status.published'))
            ->orderBy('date', 'DESC')
            ->limit(config('constant.default_page_limit'))
            ->get();

        $articles = ContentPage::where('publish_status', config('constant.general_publish_status.published'))
            ->with('created_by')
            ->orderBy('created_at', 'DESC')
            ->get();

        return view('frontend.home', compact('events', 'articles'));
    }

    public function test()
    {
        return view('frontend.home2');
    }
}
