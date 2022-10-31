<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\DB;
use Session;

class HomeController
{
    public function index()
    {
        $data['events'] = DB::select("SELECT * from events where publish_status=1 ORDER BY date DESC LIMIT 4");
        $data['articles'] = DB::select("SELECT a.*, b.Name from content_pages a, users b where a.publish_status=1 and a.created_by_id =b.id ORDER BY a.created_at DESC");
        return view('frontend.home', $data);
    }
    public function test()
    {
        return view('frontend.home2');
    }
}
