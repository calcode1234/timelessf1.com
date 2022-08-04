<section class="page video bg-light-red">
    <div class="col-lg-10 col-12 mx-auto pt-lg-5 pb-lg-3 py-3">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                @include('partials.searchform')
            </div>
        </div>
    </div>

    <div class="col-lg-10 col-12 mx-auto">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto heading pb-2 mb-5">
                <div class="row">
                    <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                        <h1 class="h2"><strong class="bg-secondary text-white">Video</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto pl-0 mb-5">
                <h2 class="text-dark"><strong>@php the_title() @endphp</strong></h2>
            </div>
        </div>

        @if(have_rows('content_video_single')) 
            @while(have_rows('content_video_single'))
                @php the_row() @endphp
                <div class="row">
                    <div class="col-10 mx-auto pl-0 mb-5">
                        <div class="embed-container">
                            @php the_sub_field('video_url') @endphp
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-10 mx-auto pl-0 mb-5 text-dark">
                        @php the_sub_field('excerpt') @endphp
                    </div>
                </div>

                @if(have_rows('related_videos'))
                    <div class="row">
                        <div class="col-lg-10 col-12 mx-auto heading pb-2">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h2 class="h3"><strong class="bg-secondary text-white">Related videos</strong></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 mx-auto pl-0">
                            <div class="row">
                                @while(have_rows('related_videos'))
                                    @php the_row() @endphp
                                    @php $video = get_sub_field('video') @endphp
                                    @if( $video )
                                        @php $featured_image = get_the_post_thumbnail_url($video->ID) @endphp

                                        <div class="col-lg-4 col-12">
                                            <article class="grid bg-white my-lg-5 my-3 py-3">
                                                <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-secondary text-white">{{__('Video') }}</strong></h2>
                                                <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php echo esc_html( $video->post_title ) @endphp</strong></h2>
                                                @if(has_post_thumbnail())
                                                    @php $featured_image = get_the_post_thumbnail_url($video->ID) @endphp
                                                    <img src="@php echo $featured_image @endphp" alt="@php echo get_post_meta( get_post_thumbnail_id($video->ID), '_wp_attachment_image_alt', true ) @endphp" width="100%" height="auto">
                                                @endif
                                                <div class="my-3 mx-3"><a href="@php the_permalink($video->ID) @endphp" class="btn" role="button" aria-label="Watch the @php echo esc_html( $video->post_title ) @endphp @endphp video">{{__('Watch video') }}</a></div>
                                            </article>
                                        </div>
                                    @endif
                                @endwhile
                            </div>
                        </div>
                    </div>
                @endif
            @endwhile
        @endif
    </div>
</section>

<div class="col-lg-10 col-12 mx-auto">
    <div class="row">
        <div class="col-12 py-5">
            @include('partials.adsense')
        </div>
    </div> 
</div>