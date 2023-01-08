@extends('layouts.frontend')

@section('content')
    <!-- ======= Hero Section ======= -->
    <!-- <section id="hero" class="d-flex align-items-center"> -->

    <!-- <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" style="background-image: url('{{asset('assets/img/ocean.jpg')}}')">
                <div class="carousel-caption">
                    <h1>BluEconNet, Solusi Interaksi Ekonomi Biru</h1>
                    <h2>Platform digital untuk mendukung koordinasi dan sinergi stakeholder ekonomi biru</h2>
                    <a href="{{url('/admin')}}}" class="btn-get-started scrollto">Bergabung bersama kami</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{asset('assets/img/beach1.jpeg')}}')">
                <div class="carousel-caption">
                    <h1>BluEconNet, Solusi Interaksi Ekonomi Biru</h1>
                    <h2>Platform digital untuk mendukung koordinasi dan sinergi stakeholder ekonomi biru</h2>
                    <a href="{{url('/admin')}}}" class="btn-get-started scrollto">Bergabung bersama kami</a>
                </div>
            </div>
            <div class="carousel-item" style="background-image: url('{{asset('assets/img/beach2.jpeg')}}')">
                <div class="carousel-caption">
                    <h1>BluEconNet, Solusi Interaksi Ekonomi Biru</h1>
                    <h2>Platform digital untuk mendukung koordinasi dan sinergi stakeholder ekonomi biru</h2>
                    <a href="{{url('/admin')}}}" class="btn-get-started scrollto">Bergabung bersama kami</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div> -->

    <div id="carouselHome" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @if(isset($sliders))
                <?php $no =0; ?>
                @foreach($sliders as $slider)
                    @if($no ==0)
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="{{$no}}" class="active" aria-current="true" aria-label="{{$slider->text}}"></button>
                    @else
                    <button type="button" data-bs-target="#carouselHome" data-bs-slide-to="{{$no}}" aria-label="Slide 2"></button>
                    @endif
                    <?php $no++; ?>
                @endforeach
            @endif
        </div>
        <div class="carousel-inner">
            @if(isset($sliders))
                <?php $no =1; ?>
                @foreach($sliders as $slider)
                    @if($no ==1)
                    <div class="carousel-item active" style="background-image: url('<?php echo $slider->getFeaturedImageAttribute()->url ; ?>')">
                    @else
                    <div class="carousel-item" style="background-image: url('<?php echo $slider->getFeaturedImageAttribute()->url ; ?>')">
                    @endif
                        <div class="carousel-caption">
                            <h1>{{$slider->title}}</h1>
                            <h2>{{$slider->text}}</h2>
                            <a href="{{url('/admin')}}}" class="btn-get-started scrollto">Bergabung bersama kami</a>
                        </div>
                    </div>
                    <?php $no++; ?>
                @endforeach
            @endif
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselHome" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselHome" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>

    <section id="locations" class="locations">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Our location</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
            </div>
            <div id="map" class="map"></div>
            <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1yWpsj6aBnPLYZCJbYGCOfzUG5MjWI8k&ehbc=2E312F" id="our_location"></iframe> -->
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
            <div id="carouselId" class="carousel carousel-card slide" data-ride="carousel">
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
                                                <?php echo substr($event->detail, 0, 30) . '...'; ?>
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
    </section>

    <!-- ======= Clients Section ======= -->
    <!--  <section id="clients" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Get to know our partners</h2> -->
    <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
    <!-- </div> -->
    <!-- <h2 class="partners-title">Get to know our partners</h2> -->
    <!-- <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
            </div>
            <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</div>
<div style="text-align:center">
    <a href="#about" class="get-started-btn scrollto" style="margin: 10px 0px 0px 0px;">Go to Partners</a>
</div> -->
    <!-- </section> -->
    <!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>Blue Economy Platform</h3>
                        <p>
                            Wadah berjejaring stakeholders, memfasilitasi koordinasi dan sinergi berbagai inisiatif
                            serta aktivitas guna pembangunan ekonomi biru
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
                                <p>Hubungi stakeholder lain secara langsung melalui Blue Economy</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                                <i class="bx bx-shield"></i>
                                <h4>Events</h4>
                                <p>Daftar event yang berkaitan dengan ekonomi biru</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                                <i class="bx bx-cube-alt"></i>
                                <h4>Articles</h4>
                                <p>Artikel-artikel dari stakeholder terkait ekonomi biru</p>
                            </div>
                            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                                <i class="bx bx-receipt"></i>
                                <h4>Resource Library</h4>
                                <p>Daftar stakeholder ekonomi biru</p>
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
                <h2>Resource Stakeholder</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
            </div>
            <div id="map_resource" class="map"></div>
            <!-- <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1yWpsj6aBnPLYZCJbYGCOfzUG5MjWI8k&ehbc=2E312F"
                id="our_location"></iframe> -->
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
                    @if (isset($events))
                        @foreach ($events as $event)
                            <div class="carousel-item active col-md-4">

                                <div class="card">
                                    <img class="card-img-top" src="{{ $event->getFeaturedImageAttribute()->url }}"
                                         alt="Card image cap" style="height:150px">
                                    <div class="card-body">
                                        <h5 class="card-title text-uppercase"><b>{{ $event->title }}</b></h5>
                                        <p class="card-text">{!! substr($event->detail, 0, 50) . '...' !!}</p>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $event->date }}</li>
                                    </ul>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-block btn-info">Show</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
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
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        @foreach ($contentCategories as $category)
                            <li>
                                <a href="{{ route('frontend.articles.all', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                        <li style="background:#fff"><a href="{{ url('articles/all') }}" style="color:#444;">Show
                                More</a></li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @foreach ($articles as $article)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ $article->getFeaturedImageAttribute()->url }}" class="img-fluid" alt=""
                                 style="height:200px; width:100%">
                            <div class="portfolio-info">
                                <h4>{{ substr($article->title, 0, 30) }}</h4>
                                <p>{!! substr($article->page_text, 0, 150) !!}</p>
                                <div class="portfolio-links">
                                    <a href="{{ $article->getFeaturedImageAttribute()->url }}"
                                       data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i
                                            class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-uppercase" style="padding:15px"><b>{{ $article->title }}</b></h4>
                        <p>{!! substr($article->page_text, 0, 150) !!}...</p>
                        <div style="text-align:center">
                            <a href="{{ url('articles/detail') }}" class="btn btn-block btn-info"
                               style="margin: 10px 0px 0px 0px;">Read more</a>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section><!-- End Portfolio Section -->


    <script>
        //   var map;
        //   function initMap() {
        //     map = new google.maps.Map(document.getElementById('map'), {
        //       center: {lat: -34.397, lng: 150.644},
        //       zoom: 8
        //     });
        //   }
        function initMap() {

            console.log(<?php echo $resources; ?>);
            var loc = [];
            var res_data = <?php echo $resources; ?>;

            for (var j = 0; j < res_data.length; j++) {
                var data = ['<h5>' + res_data[j].PIC + '<h5>', res_data[j].long, res_data[j].lat];
                loc.push(data);
            }
            console.log(loc);
            var locations = [
                ['<h5>Ibukota Provinsi Aceh</h5>', 5.550176, 95.319263],
                ['<h5>Ibukota Kab.Aceh Jaya</h5>', 4.727890, 95.601373],
                ['<h5>Ibukota Abdya</h5>', 3.818570, 96.831841],
                ['<h5>Ibukota Kotamadya Langsa</h5>', 4.476020, 97.952447],
                ['<h5>Ibukota Kotamadya Sabang</h5>', 5.909284, 95.304742]

            ];
            var infowindow = new google.maps.InfoWindow();

            var options = {
                zoom: 5,
                center: new google.maps.LatLng(-0.789275, 113.921327),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Pembuatan petanya
            var map = new google.maps.Map(document.getElementById('map'), options);

            var marker, i;
            // proses penambahan marker pada masing-masing lokasi yang berbeda
            for (i = 0; i < loc.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(loc[i][1], loc[i][2]),
                    map: map,

                });

                // Menampilkan informasi pada masing-masing marker yang diklik
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(loc[i][0]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }

            // Pembuatan petanya
            var map2 = new google.maps.Map(document.getElementById('map_resource'), options);

            var marker2;
            // proses penambahan marker pada masing-masing lokasi yang berbeda
            for (i = 0; i < loc.length; i++) {
                marker2 = new google.maps.Marker({
                    position: new google.maps.LatLng(loc[i][1], loc[i][2]),
                    map: map2,

                });

                // Menampilkan informasi pada masing-masing marker yang diklik
                google.maps.event.addListener(marker2, 'click', (function (marker2, i) {
                    return function () {
                        infowindow.setContent(loc[i][0]);
                        infowindow.open(map2, marker2);
                    }
                })(marker2, i));
            }

        };
    </script>
@endsection
