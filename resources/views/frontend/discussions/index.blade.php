@extends('layouts.frontend')

@section('content')
<section>
    <div class="container" style="margin-top: 70px">
        <div class="section-title">
            <h2>All Discussions</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>
        <div class="row" id="discussions">
        <div class="container">
        <div class="row m-rl--1">
            <div class="col-md-6 p-rl-1 p-b-2">
                <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{asset('assets/img/mag/post-01.jpg')}});">
                    <a href="{{url('discussions/detail')}}" ></a>

                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                        <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                            Business
                        </a>

                        <h3 class="how1-child2 m-t-14 m-b-10">
                            <a href="{{url('discussions/detail')}}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                Microsoft quisque at ipsum vel orci eleifend ultrices
                            </a>
                        </h3>

                        <span class="how1-child2">
                            <span class="f1-s-4 cl11">
                                Jack Sims
                            </span>

                            <span class="f1-s-3 cl11 m-rl-3">
                                -
                            </span>

                            <span class="f1-s-3 cl11">
                                Feb 16
                            </span>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-rl-1">
                <div class="row m-rl--1">
                    <div class="col-12 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{asset('assets/img/mag/post-02.jpg')}});">
                            <a href="{{url('discussions/detail')}}" ></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Culture
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="{{url('discussions/detail')}}">
                                        London ipsum dolor sit amet, consectetur adipiscing elit.
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{asset('assets/img/mag/post-03.jpg')}});">
                            <a href="{{url('discussions/detail')}}" ></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Life Style
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="{{url('discussions/detail')}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        Pellentesque dui nibh, pellen-tesque ut dapibus ut
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{asset('assets/img/mag/post-04.jpg')}});">
                            <a href="{{url('discussions/detail')}}" ></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    Sport
                                </a>

                                <h3 class="how1-child2 m-t-14">
                                    <a href="{{url('discussions/detail')}}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                        Motobike Vestibulum vene-natis purus nec nibh volutpat
                                    </a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Post -->
<section class="bg0 p-t-70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <div class="p-b-20">
                    <!-- Entertainment -->
                    <div class="tab01 p-b-20">
                        <div class="tab01-head how2 how2-cl6 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                            <!-- Brand tab -->
                            <h3 class="f1-m-2 cl18 tab01-title">
                                Discussions
                            </h3>

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tab1-1" role="tab">All</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-2" role="tab">Business</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-3" role="tab">Finance</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-4" role="tab">Framework</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tab1-5" role="tab">Markets</a>
                                </li>

                                <li class="nav-item-more dropdown dis-none">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        
                                    </ul>
                                </li>
                            </ul>

                            <!--  -->
                        </div>
                            

                        <!-- Tab panes -->
                        <div class="tab-content p-t-35">
                            <!-- - -->
                            <div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                        <a href="{{url('discussions/detail')}}" ></a>
                                        <!-- Item post -->	
                                        <div class="m-b-30 discussion-card">
                                            <h3><a href="{{url('discussions/detail')}}">American live music lorem ipsum dolor sit amet consectetur</a> </h3>
                                            <p class="fst-italic">
                                            Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
                                            </p>
                                            <ul>
                                                <li><i class="ri-heart-line"></i> 10 <i class="ri-discuss-line"></i> 100</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex-wr-s-c m-rl--7 p-t-15">
                                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>
                                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-2" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-09.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-08.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-06.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-07.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-3" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-08.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-07.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-06.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-05.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-4" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-06.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-09.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-07.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-08.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- - -->
                            <div class="tab-pane fade" id="tab1-5" role="tabpanel">
                                <div class="row">
                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->	
                                        <div class="m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-07.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="p-t-20">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                                        American live music lorem ipsum dolor sit amet consectetur 
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 18
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-08.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Celebrity
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 12
                                                    </span>
                                                </span>
                                            </div>
                                        </div>

                                        <!-- Item post -->	
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-06.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Music
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 17
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        
                                        <!-- Item post -->
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a href="{{url('discussions/detail')}}" class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{asset('assets/img/mag/post-09.jpg')}}" alt="IMG">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a href="{{url('discussions/detail')}}" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        Donec metus orci, malesuada et lectus vitae
                                                    </a>
                                                </h5>

                                                <span class="cl8">
                                                    <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
                                                        Game
                                                    </a>

                                                    <span class="f1-s-3 m-rl-3">
                                                        -
                                                    </span>

                                                    <span class="f1-s-3">
                                                        Feb 16
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!--  -->
                    <div>
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Most Popular Discussions
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    1
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    2
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    3
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Nunc vestibulum, enim vitae condimentum volutpat lobortis ante
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
                                    4
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit justo consectetur non neque elementum
                                </a>
                            </li>

                            <li class="flex-wr-sb-s p-b-22">
                                <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0">
                                    5
                                </div>

                                <a href="#" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
                                    Proin velit consectetur non neque
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--  -->
                    <div class="flex-c-s p-t-8">
                        <a href="#">
                            <img class="max-w-full" src="{{asset('assets/img/mag/banner-02.jpg')}}" alt="IMG">
                        </a>
                    </div>
                    
                    <!--  -->
                    <div class="p-t-50">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Stay Connected
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
                                    <span class="fab fa-facebook-f"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        6879 Fans
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        Like
                                    </a>
                                </div>
                            </li>

                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
                                    <span class="fab fa-twitter"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        568 Followers
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        Follow
                                    </a>
                                </div>
                            </li>

                            <li class="flex-wr-sb-c p-b-20">
                                <a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
                                    <span class="fab fa-youtube"></span>
                                </a>

                                <div class="size-w-3 flex-wr-sb-c">
                                    <span class="f1-s-8 cl3 p-r-20">
                                        5039 Subscribers
                                    </span>

                                    <a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
                                        Subscribe
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner -->
<div class="container">
    <div class="flex-c-c">
        <a href="#">
            <img class="max-w-full" src="{{asset('assets/img/mag/banner-01.jpg')}}" alt="IMG">
        </a>
    </div>
</div>

<!-- Latest -->
<section class="bg0 p-t-60 p-b-35">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-20">
                <div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
                    <h3 class="f1-m-2 cl3 tab01-title">
                        Latest discussions
                    </h3>
                </div>

                <div class="row p-t-35">
                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-01.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-02.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 16
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-03.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 15
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-04.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 13
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-05.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 10
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 p-r-25 p-r-15-sr991">
                        <!-- Item latest -->	
                        <div class="m-b-45">
                            <a href="{{url('discussions/detail')}}" class="wrap-pic-w hov1 trans-03">
                                <img src="{{asset('assets/img/mag/latest-06.jpg')}}" alt="IMG">
                            </a>

                            <div class="p-t-16">
                                <h5 class="p-b-5">
                                    <a href="{{url('discussions/detail')}}" class="f1-m-3 cl2 hov-cl10 trans-03">
                                        You wish lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl8">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 09
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-10 col-lg-4">
                <div class="p-l-10 p-rl-0-sr991 p-b-20">
                    <!-- Video -->
                    <div class="p-b-55">
                        <div class="how2 how2-cl4 flex-s-c m-b-35">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Featured Video
                            </h3>
                        </div>

                        <div>
                            <div class="wrap-pic-w pos-relative">
                                <img src="{{asset('assets/img/mag/video-01.jpg')}}" alt="IMG">

                                <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
                                    <span class="fab fa-youtube"></span>
                                </button>
                            </div>

                            <div class="p-tb-16 p-rl-25 bg3">
                                <h5 class="p-b-5">
                                    <a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
                                        Music lorem ipsum dolor sit amet consectetur 
                                    </a>
                                </h5>

                                <span class="cl15">
                                    <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
                                        by John Alvarado
                                    </a>

                                    <span class="f1-s-3 m-rl-3">
                                        -
                                    </span>

                                    <span class="f1-s-3">
                                        Feb 18
                                    </span>
                                </span>
                            </div>
                        </div>	
                    </div>
                        
                    <!-- Subscribe -->
                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
                        <h5 class="f1-m-5 cl0 p-b-10">
                            Subscribe
                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">
                            Get all latest content delivered to your email a few times a month.
                        </p>

                        <form class="size-a-9 pos-relative">
                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </form>
                    </div>
                    
                    <!-- Tag -->
                    <div class="p-b-55">
                        <div class="how2 how2-cl4 flex-s-c m-b-30">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Tags
                            </h3>
                        </div>

                        <div class="flex-wr-s-s m-rl--5">
                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Fashion
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Lifestyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Denim
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Streetstyle
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Crafts
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Magazine
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                News
                            </a>

                            <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">
                                Blogs
                            </a>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  @endsection