@extends('layouts.frontend')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bettter digital experience with Presento</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Clients Section ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="zoom-in">
      <div class="section-title">
        <h2>Get to know our partners</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
      </div>
      <!-- <h2 class="partners-title">Get to know our partners</h2> -->
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt=""></div>
          <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt=""></div>
        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>
    <div style="text-align:center">
      <a href="#about" class="get-started-btn scrollto" style="margin: 10px 0px 0px 0px;">Go to Partners</a>
    </div>
  </section><!-- End Clients Section -->

  <!-- ======= About Section ======= -->
  <section id="about" class="about section-bg">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch">
          <div class="content">
            <h3>The Blue Economy Community Forum</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <a href="#" class="about-btn"><span>About us</span> <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex align-items-stretch">
          <div class="icon-boxes d-flex flex-column justify-content-center">
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Resource Library</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Groups</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-images"></i>
                <h4>Discussions</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-shield"></i>
                <h4>Events</h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Clients Section ======= -->
  <section id="locations" class="locations">
    <div class="container" data-aos="zoom-in">
      <div class="section-title">
        <h2>Our location</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
      </div>
      <img src="{{ asset('assets/img/map_xl.jpeg') }}"/>
    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Events</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
      </div>

      <ul class="nav nav-tabs row d-flex">
        @foreach($events as $event)
          <li class="nav-item col-3">
            <a class="nav-link @if($loop->iteration == 1) active @endif show" data-bs-toggle="tab" data-bs-target="#tab-{{$loop->iteration}}">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">{{$event->title}}</h4>
            </a>
          </li>
        @endforeach
      </ul>

      <div class="tab-content">
        @if(isset($events))
          @foreach($events as $event)
            <div class="tab-pane @if($loop->iteration == 1) active @endif show" id="tab-{{$loop->iteration}}">
              <div class="row">
                <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                  <h3>{{$event->title}}</h3>
                  <p class="fst-italic">
                    {!! $event->detail !!}
                  </p>
                  <ul>
                    <li><i class="ri-time-line"></i> {{$event->date}}.</li>
                    <li><i class="ri-map-pin-line"></i> {{$event->location}}.</li>
                    <li><i class="ri-check-double-line"></i></li>
                  </ul>
                  <div style="text-align:center">
                    <a href="{{url('events-page/detail')}}" class="get-started-btn scrollto" style="margin: 10px 0px 0px 0px;">Go to Event</a>
                  </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
{{--                  <img src="assets/img/tabs-1.jpg" alt="" class="img-fluid">--}}
                  <img src="event->featured_image->url" alt="" class="img-fluid">
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </section><!-- End Tabs Section -->

  <!-- ======= Portfolio Section ======= -->
  <section id="portfolio" class="portfolio">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Articles</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
            <li style="background:#fff"><a href="{{url('articles/all')}}" style="color:#444;" >Show More</a></li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <?php
          $count = 0;
          ?>
        @foreach($articles as $article)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-<?php echo $count + 1;?>.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{substr($article->title, 0, 30)}}</h4>
                <p>{{substr($article->page_text, 0, 150)}}</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-<?php echo $count + 1;?>.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            <h5>{{$article->title}}</h5>
            <p>by {{$article->Name}} - {{$article->created_at}}</p>
            <p>{{substr($article->page_text, 0, 150)}}...</p>
            <div style="text-align:center">
              <a href="{{url('articles/detail')}}" class="get-started-btn scrollto" style="margin: 10px 0px 0px 0px;">Read more</a>
            </div>
          </div>
              <?php
              $count++;
              ?>
        @endforeach


      </div>

    </div>
  </section><!-- End Portfolio Section -->


@endsection
