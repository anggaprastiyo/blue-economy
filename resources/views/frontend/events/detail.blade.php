@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->
                    <div class="p-b-70">

                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            {{ $events[0]->title }}
                        </h3>

                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <span>
                                    {{ $events[0]->created_at }}
                                </span>
                            </span>

                            <span class="f1-s-3 cl8 m-r-15">
                                5239 Views
                            </span>

                            <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">
                                0 Comment
                            </a>
                        </div>

                        <div class="wrap-pic-max-w p-b-30">
                            <img src="{{ $events[0]->getFeaturedImageAttribute()->url }}" alt="IMG">
                        </div>

                        <b>Date: </b>{{$events[0]->date}}. <br />
                        <b>Place: </b>{!! $events[0]->location !!}.  <br />
                        <b>Description of the event: </b> <br />
                        {!! $events[0]->detail !!}

                        <!-- Tag -->
                    </div>

                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-md-10 col-lg-4 p-b-30">
                <div class="p-l-10 p-rl-0-sr991 p-t-70">
                    <!-- Category -->
                    <div class="p-b-60">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Article Category
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($contentCategories as $category)
                                <li class="how-bor3 p-rl-4">
                                    <a href="{{ route('frontend.articles.all', ['slug' => $category->slug]) }}"
                                        class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
