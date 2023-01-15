@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8 p-b-30">
                <div class="p-r-10 p-r-0-sr991">
                    <!-- Blog Detail -->
                    <div class="p-b-70">
                        <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">
                            {{ $article->slug }}
                        </a>

                        <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">
                            {{ $article->title }}
                        </h3>

                        <div class="flex-wr-s-s p-b-40">
                            <span class="f1-s-3 cl8 m-r-15">
                                <span>
                                    {{ $article->created_at }}
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
                            <img src="{{ $article->getFeaturedImageAttribute()->url }}" alt="IMG">
                        </div>

                        {!! $article->page_text !!}

                        <!-- Tag -->
                        <div class="flex-s-s p-t-12">
                            <span class="f1-s-12 cl5 m-r-8">
                                Tags:
                            </span>

                            <div class="flex-wr-s-s size-w-0">
                                @foreach ($article->tags as $tag)
                                    <span class="badge badge-danger mr-1">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <!-- Leave a comment -->
                    <div>
                        <h4 class="f1-l-4 cl3 p-b-12">
                            Leave a Comment
                        </h4>

                        <p class="f1-s-13 cl8 p-b-40">
                            Your email address will not be published. Required fields are marked *
                        </p>

                        <form method="POST" action="{{ route('frontend.comments.store') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="content_page_id" value="{{ $article->id }}">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="comment"
                                placeholder="Comment..."></textarea>

                            <button type="submit"
                                class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">
                                Post Comment
                            </button>
                        </form>
                    </div>
                    
                    <!-- Tab panes -->
                    <div class="tab-content p-t-35">
                        <hr>
                        <div class="tab-pane fade show active" id="all" role="tabpanel">
                            <div class="row">
                                <div class="col-sm-12 p-r-5-sr991">
                                    <!-- Item post -->
                                    @foreach ($comments as $comment)
                                        <div class="flex-wr-sb-s m-b-30">
                                            <a class="size-w-1 wrap-pic-w hov1 trans-03">
                                                <img src="{{ asset('assets/img/user.png') }}" alt="IMG"
                                                    style="width:50px">
                                            </a>

                                            <div class="size-w-2">
                                                <h5 class="p-b-5">
                                                    <a class="f1-s-5 cl3 hov-cl10 trans-03">
                                                        {{ $comment->user->name }}
                                                    </a>
                                                    <p><small>{{ $comment->comment }}</small></p>
                                                </h5>

                                                <span class="cl8">
                                                    <span class="f1-s-3">
                                                        {{ $comment->created_at }}
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
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
                                Category
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
                <div class="p-l-10 p-rl-0-sr991 p-t-70">
                    <!-- Category -->
                    <div class="p-b-60">
                        <div class="how2 how2-cl4 flex-s-c">
                            <h3 class="f1-m-2 cl3 tab01-title">
                                Archive
                            </h3>
                        </div>

                        <ul class="p-t-35">
                            @foreach ($archives as $archive)
                                <li class="how-bor3 p-rl-4">
                                    <a href="{{ route('frontend.articles.all', ['slug' => $category->slug]) }}"
                                        class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">
                                        {{ App\Models\ContentPage::MONTH[$archive->month] ?? '' }} {{ $archive->year }} ({{ $archive->count }} ) 
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
