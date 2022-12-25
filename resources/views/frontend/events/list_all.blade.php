@extends('layouts.frontend')
@section('content')
    <section class="bg0 p-b-5">
        <div class="section-title">
            <h2>Events</h2>
        </div>
    </section>

    <!-- Post -->
    <section class="bg0 p-t-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12">
                    <div class="p-b-20">
                        <!-- Entertainment -->
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl6 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl18 tab01-title">
                                    Events
                                </h3>
                            </div>


                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                    <div class="row">
                                        @foreach ($events as $event)
                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                                <!-- Item post -->
                                                <div class="m-b-30">
                                                    <a href="{{ route('frontend.events-page.detail', ['id' => $event->id]) }}"
                                                        class="wrap-pic-w hov1 trans-03">
                                                        <img src="{{ $event->getFeaturedImageAttribute()->url }}"
                                                            alt="IMG" width="100%" height="300px">
                                                    </a>

                                                    <div class="p-t-20">
                                                        <h5 class="p-b-5">
                                                            <a href="{{ route('frontend.events-page.detail', ['id' => $event->id]) }}"
                                                                class="f1-m-3 cl2 hov-cl10 trans-03">
                                                                {{ $event->title }}
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
                                                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                                {!! $event->location !!}
                                                            </a>
                                                        </span>
                                                        <span class="badge badge-info">
                                                            {{ $event->date }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="page_navigation">
                                        {{ $events->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
