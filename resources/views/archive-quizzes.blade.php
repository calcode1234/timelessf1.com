@extends('layouts.app')

@section('content')
    <section id="quizzes">
        <div class="bg-light-green">
            <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
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
@endsection
