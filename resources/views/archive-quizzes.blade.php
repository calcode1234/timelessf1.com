@extends('layouts.app')

@section('content')
    <section id="quizzes">
        <div class="bg-light-green">
            <div class="col-lg-10 col-12 mx-auto pt-lg-5 pb-lg-3 py-3">
                <div class="row">
                    <div class="col-lg-10 col-12 mx-auto">
                        @include('partials.searchform')
                    </div>
                </div>
            </div>

            <div class="col-lg-10 col-12 mx-auto pb-lg-5 pt-0 pb-3">
                @if(have_posts())
                    <div class="row">
                        <div class="col-12 heading pb-2">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h1 class="h2"><strong class="bg-success text-white">Quizzes</strong></h1>
                                </div> 
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @while (have_posts()) @php the_post() @endphp
                            @include('partials.content-'.get_post_type())
                        @endwhile
                    </div>
                @endif
            </div>
        </div>
    </section>

    <div class="col-lg-10 col-12 mx-auto">
        <div class="row">
            <div class="col-12 py-5">
                @include('partials.adsense')
            </div>
        </div> 
    </div>

    @include('partials.mailchimp')
@endsection
