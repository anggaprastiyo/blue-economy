@extends('layouts.frontend')

@section('content')
    <section>
        <div class="container" style="margin-top: 70px">
            <div class="section-title">
                <h2>Regulasi</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
            </div>
            <div class="row" id="about">
                <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0 text_about" data-aos="fade-up" data-aos-delay="100">
                    @if (isset($regulation))
                        <div class="text-center">
                            {{ $regulation->getFeaturedImageAttribute() }}
                        </div>
                        <hr>
                        {!! $regulation->page_text !!}

                    @else
                        <p>No Regulation Article Selected!</p>    
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
