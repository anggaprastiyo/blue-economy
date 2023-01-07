<?php

namespace App\Http\Controllers\Frontend;

use App\Models\ResourceLibrary;
use App\Models\ContentCategory;
use App\Models\ContentPage;
use App\Models\Event;

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

        $resources = ResourceLibrary::where('type',1)
            ->get();
        // dd($resource);
        $contentCategories = ContentCategory::get()->whereNotIn('slug', ['about', 'regulation']);

        return view('frontend.home', compact('events', 'articles', 'contentCategories', 'resources'));
    }

    public function test()
    {
        return view('frontend.home2');
    }
}
