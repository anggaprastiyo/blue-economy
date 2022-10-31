<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Home') }}</title>

  <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    @yield('styles')
</head>

<body>
    <div id="app">
        
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center">
            <div class="container d-flex align-items-center">
            <h1 class="logo me-auto"><a href="index.html">Blue Economy<span>.</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>-->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                <li><a class="nav-link scrollto active" href="{{ route('frontend.home') }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#">Drop Down 1</a></li>
                    <li><a href="#">Drop Down 2</a></li>
                    <li><a href="#">Drop Down 3</a></li>
                    <li><a href="#">Drop Down 4</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Blue Economy Framework</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#">Discussions</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Events</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#"><span>Blue Economy Community</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                    <li><a href="#">Discussions</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Events</a></li>
                    </ul>
                </li>
                <li><a class="nav-link scrollto" href="#hero">Resource Library</a></li>
                <i class="bi bi-list mobile-nav-toggle"></i>
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="get-started-btn scrollto">{{ __('Login') }}</a>
                        </li>
                        @if(Route::has('register'))
                            <li class="nav-item">
                                <a href="{{ route('register') }}" class="join-btn scrollto">{{ __('Join') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="dropdown"><a href="#"><span> {{ Auth::user()->name }} </span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a class="dropdown-item" href="{{ route('frontend.profile.index') }}">{{ __('My profile') }}</a></li>
                                @can('user_management_access')
                                    <li><a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.userManagement.title') }}
                                    </a></li>
                                @endcan
                                @can('permission_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.permissions.index') }}">
                                        {{ trans('cruds.permission.title') }}
                                    </a></li>
                                @endcan
                                @can('role_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.roles.index') }}">
                                        {{ trans('cruds.role.title') }}
                                    </a></li>
                                @endcan
                                @can('user_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.users.index') }}">
                                        {{ trans('cruds.user.title') }}
                                    </a></li>
                                @endcan
                                @can('user_alert_access')
                                    <li><a class="dropdown-item" href="{{ route('frontend.user-alerts.index') }}">
                                        {{ trans('cruds.userAlert.title') }}
                                    </a></li>
                                @endcan
                                @can('content_management_access')
                                    <li><a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.contentManagement.title') }}
                                    </a></li>
                                @endcan
                                @can('content_category_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.content-categories.index') }}">
                                        {{ trans('cruds.contentCategory.title') }}
                                    </a></li>
                                @endcan
                                @can('content_tag_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.content-tags.index') }}">
                                        {{ trans('cruds.contentTag.title') }}
                                    </a></li>
                                @endcan
                                @can('content_page_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.content-pages.index') }}">
                                        {{ trans('cruds.contentPage.title') }}
                                    </a></li>
                                @endcan
                                @can('event_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.events.index') }}">
                                        {{ trans('cruds.event.title') }}
                                    </a></li>
                                @endcan
                                @can('faq_management_access')
                                    <li><a class="dropdown-item disabled" href="#">
                                        {{ trans('cruds.faqManagement.title') }}
                                    </a></li>
                                @endcan
                                @can('faq_category_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.faq-categories.index') }}">
                                        {{ trans('cruds.faqCategory.title') }}
                                    </a></li>
                                @endcan
                                @can('faq_question_access')
                                    <li><a class="dropdown-item ml-3" href="{{ route('frontend.faq-questions.index') }}">
                                        {{ trans('cruds.faqQuestion.title') }}
                                    </a></li>
                                @endcan

                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a></li>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </li>
                    @endguest
                </ul>
            </nav><!-- .navbar -->
            </div>
        </header><!-- End Header -->

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Home') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('frontend.home') }}">
                                    {{ __('Dashboard') }}
                                </a>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4" style="padding-top: 3rem !important">
            @if(session('message'))
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-success" role="alert">{{ session('message') }}</div>
                        </div>
                    </div>
                </div>
            @endif
            @if($errors->count() > 0)
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">
                                <ul class="list-unstyled mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @yield('content')
        </main>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
@yield('scripts')

</html>