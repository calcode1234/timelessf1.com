{{--
  Template Name: About Page Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <section id="about" class="bg-light">
        <div class="col-lg-10 col-12 mx-auto pt-lg-5 pb-lg-3 py-3">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto">
                    @include('partials.searchform')
                </div>
            </div>
        </div>

        <div class="col-lg-8 col-12 mx-auto">
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto heading pb-2 mb-5">
                    <div class="row">
                        <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                            <h2><strong class="bg-primary text-secondary">About</strong></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-12 mx-auto mb-lg-0 mb-3 pl-lg-0 text-dark">
                    @php the_content() @endphp
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-12 mx-auto mb-lg-0 mb-3 pl-lg-0">
                    <ul class="social mb-0">
                        @if($tiktok)
                            <li>
                                @php $tiktok_url  = $tiktok['url'] @endphp
                                @php $tiktok_title  = $tiktok['title'] @endphp
                                @php $tiktok_target = $tiktok['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $tiktok_url ) @endphp" target="@php echo esc_attr( $tiktok_target ) @endphp"><i class="fab fa-tiktok"></i> <span class="sr-only">@php echo esc_html( $tiktok_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($youtube)
                            <li>
                                @php $youtube_url  = $youtube['url'] @endphp
                                @php $youtube_title  = $youtube['title'] @endphp
                                @php $youtube_target = $youtube['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $youtube_url ) @endphp" target="@php echo esc_attr( $youtube_target ) @endphp"><i class="fab fa-youtube"></i> <span class="sr-only">@php echo esc_html( $youtube_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($instagram)
                            <li>
                                @php $instagram_url  = $instagram['url'] @endphp
                                @php $instagram_title  = $instagram['title'] @endphp
                                @php $instagram_target = $instagram['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $instagram_url ) @endphp" target="@php echo esc_attr( $instagram_target ) @endphp"><i class="fab fa-instagram"></i> <span class="sr-only">@php echo esc_html( $instagram_title ) @endphp</span></a>
                            </li>
                        @endif

                        @if($twitter)
                            <li>
                                @php $twitter_url  = $twitter['url'] @endphp
                                @php $twitter_title  = $twitter['title'] @endphp
                                @php $twitter_target = $twitter['target'] @endphp @php '_self' @endphp

                                <a href="@php echo esc_url( $twitter_url ) @endphp" target="@php echo esc_attr( $twitter_target ) @endphp"><i class="fab fa-twitter"></i> <span class="sr-only">@php echo esc_html( $twitter_title ) @endphp</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>

            @if(has_post_thumbnail())
            <div class="row">
                <div class="col-lg-10 col-12 mx-auto my-3 pl-lg-0 text-center">
                    @php $attachment_id = get_post_thumbnail_id() @endphp
                    @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp

                    <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="300px" height="300px">
                </div>
            </div>
            @endif
        </div>
    </section>
  @endwhile
@endsection
