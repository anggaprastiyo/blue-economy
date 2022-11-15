@extends('layouts.frontend')

@section('content')
  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center"> -->

    <!-- <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Bettter digital experience with Presento</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>
    </div> -->
  <!-- </section>End Hero -->


  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/LAaSoL0LrYs/1920x1080')">
          <div class="carousel-caption">
            <!-- <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p> -->
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
          <div class="carousel-caption">
            <!-- <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p> -->
          </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
          <div class="carousel-caption">
            <!-- <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p> -->
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>
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
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Articles</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Resource Library</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
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
      <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1yWpsj6aBnPLYZCJbYGCOfzUG5MjWI8k&ehbc=2E312F" id="our_location"></iframe>
      <!-- <img src="{{ asset('assets/img/map_xl.jpeg') }}"/> -->
    </div>
  </section><!-- End Clients Section -->

  <!-- ======= Tabs Section ======= -->
  <section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Events</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
      </div>

      <div id="carouselId" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
            <li data-target="#carouselId" data-slide-to="1"></li>
            <li data-target="#carouselId" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner row w-100 mx-auto">
          
        @if(isset($events))
          @foreach($events as $event)
            <div class="carousel-item active col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-1.jpg" alt="">
                    <div class="card-body">
                        <h3>{{$event->title}}</h3>
                      <p class="fst-italic">
                        <?php echo substr($event->detail, 0, 30).'...'; ?>
                      </p>
                      <ul>
                        <li><i class="ri-time-line"></i> {{$event->date}}.</li>
                        <li><i class="ri-map-pin-line"></i> {!! $event->location !!}.</li>
                      </ul>
                    </div>
                </div>
            </div>
          
            @endforeach
        @endif
            <div class="carousel-item col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-3.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-1.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-2.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item col-md-4">
                <div class="card">
                    <img class="card-img-top" src="assets/img/tabs-3.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Title</h4>
                        <p class="card-text">Text</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
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
