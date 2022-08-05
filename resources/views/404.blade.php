@extends('layouts.app')

@section('content')
  <section id="error" class="bg-light">
    <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                @include('partials.searchform')
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-11 mx-auto heading mt-3">
                <div class="row">
                    <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                        <h1 class="h2"><strong class="bg-primary text-secondary">Not Found</strong></h1>
                    </div>
                    <div class="col-lg-3 col-12">
                        <a href="@php echo esc_url( home_url( '/' ) ) @endphp" class="btn mb-3" role="button">{{__('Back to homepage') }}</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <p class="text-center my-4">Sorry, but the article, video, quiz or page you were looking for doesn't exist.</p>
            </div>
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