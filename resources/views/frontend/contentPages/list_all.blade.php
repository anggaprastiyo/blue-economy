@extends('layouts.frontend')
@section('content')
    <section class="bg0">
        <div class="section-title">
            <h2>Articles</h2>
            <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>
        <div class="container">
            <div class="row m-rl--1">
                @if (isset($latestArticle[1]))
                    <div class="col-md-6 p-rl-1 p-b-2">
                        <div class="bg-img1 size-a-3 how1 pos-relative"
                            style="background-image: url('{{ $latestArticle[1]['image']->url }}');">
                            <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[1]['id']]) }}"
                                class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                <a href="#"
                                    class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
                                    {{ $latestArticle[1]['excerpt'] }}
                                </a>

                                <h3 class="how1-child2 m-t-14 m-b-10">
                                    <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[1]['id']]) }}"
                                        class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
                                        {{ $latestArticle[1]['title'] }}
                                    </a>
                                </h3>

                                <span class="how1-child2">
                                    <span class="f1-s-3 cl11">
                                        {{ $latestArticle[1]['created_at'] }}
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="col-md-6 p-rl-1">
                    <div class="row m-rl--1">
                        @if (isset($latestArticle[2]))
                            <div class="col-12 p-rl-1 p-b-2">
                                <div class="bg-img1 size-a-4 how1 pos-relative"
                                    style="background-image: url('{{ $latestArticle[2]['image']->url }}');">
                                    <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[2]['id']]) }}"
                                        class="dis-block how1-child1 trans-03"></a>
                                    <div class="flex-col-e-s s-full p-rl-25 p-tb-24">
                                        <h3 class="how1-child2 m-t-14">
                                            <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[2]['id']]) }}"
                                                class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
                                                {{ $latestArticle[2]['title'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        @endif

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            @if (isset($latestArticle[3]))
                                <div class="bg-img1 size-a-5 how1 pos-relative"
                                    style="background-image: url('{{ $latestArticle[3]['image']->url }}');">
                                    <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[3]['id']]) }}"
                                        class="dis-block how1-child1 trans-03"></a>
                                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                        <h3 class="how1-child2 m-t-14">
                                            <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[3]['id']]) }}"
                                                class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                                {{ $latestArticle[3]['title'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endif
                        </div>

                        <div class="col-sm-6 p-rl-1 p-b-2">
                            @if (isset($latestArticle[4]))
                                <div class="bg-img1 size-a-5 how1 pos-relative"
                                    style="background-image: url('{{ $latestArticle[4]['image']->url }}');">
                                    <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[4]['id']]) }}"
                                        class="dis-block how1-child1 trans-03"></a>
                                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">
                                        <h3 class="how1-child2 m-t-14">
                                            <a href="{{ route('frontend.articles.detail', ['id' => $latestArticle[4]['id']]) }}"
                                                class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
                                                {{ $latestArticle[4]['title'] }}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Post -->
    <section class="bg0 p-t-10">
        <div class="col-md-12">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-8">
                    <div class="p-b-20">
                        <!-- Entertainment -->
                        <div class="tab01 p-b-20">
                            <div class="tab01-head how2 how2-cl6 bocl12 flex-s-c m-r-10 m-r-0-sr991">
                                <!-- Brand tab -->
                                <h3 class="f1-m-2 cl18 tab01-title">
                                    Category
                                </h3>
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{ route('frontend.articles.all') }}">All</a>
                                    </li>
                                    @foreach ($contentCategories as $category)
                                        <li class="nav-item">
                                            <a class="nav-link"
                                                href="{{ route('frontend.articles.all', ['slug' => $category->slug]) }}">{{ $category->name }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <!-- Tab panes -->
                            <div class="tab-content p-t-35">
                                <!-- - -->
                                <div class="tab-pane fade show active" id="all" role="tabpanel">
                                    <div class="row">
                                        <div class="col-sm-12 p-r-25 p-r-15-sr991">
                                            <!-- Item post -->
                                            @foreach ($articles as $article)
                                                <div class="flex-wr-sb-s m-b-30">
                                                    <a href="{{ route('frontend.articles.detail', ['id' => $article->id]) }}"
                                                        class="size-w-1 wrap-pic-w hov1 trans-03">
                                                        <img src="{{ $article->getFeaturedImageAttribute()->url }}"
                                                            alt="IMG">
                                                    </a>

                                                    <div class="size-w-2">
                                                        <h5 class="p-b-5">
                                                            <a href="{{ route('frontend.articles.detail', ['id' => $article->id]) }}"
                                                                class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                {{ $article->excerpt }} <br>
                                                                <span class="badge badge-info text-uppercase">
                                                                    {{ $article->slug }}
                                                                </span>
                                                            </a>
                                                        </h5>

                                                        <span class="cl8">
                                                            <span class="f1-s-3">
                                                                {{ $article->created_at }}
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endforeach
                                
                                            <div class="page_navigation">
                                                {{ $articles->links() }}
                                            </div>

                                        </div>
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
