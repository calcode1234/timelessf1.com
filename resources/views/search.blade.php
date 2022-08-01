@extends('layouts.app')

@section('content')
  <section id="search" class="bg-light">
    <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
        <div class="row">
            <div class="col-12 heading pb-2 mb-5">
                <div class="row">
                    <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                        <h1 class="h2"><strong class="bg-primary text-secondary">Search Results</strong></h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                @include('partials.searchform')
            </div>
        </div>
        <div class="row">
            @while (have_posts()) @php the_post() @endphp
                @include('partials.content-search')
            @endwhile
        </div>
    </div>
  </section>
@endsection
