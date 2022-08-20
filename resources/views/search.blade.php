@extends('layouts.app')

@section('content')
  <section id="search" class="bg-light">
    <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                @include('partials.searchform')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-11 mx-auto heading pb-2 my-3">
                <div class="row">
                    <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                        <h1 class="h2"><strong class="bg-danger text-white">Search Results</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @while (have_posts()) @php the_post() @endphp
                @include('partials.content-search')
            @endwhile
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
