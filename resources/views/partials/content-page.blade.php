@if(is_front_page())
    <section id="latest" class="bg-light">
        <div class="col-lg-10 col-11 mx-auto py-lg-5 py-3">
            <div class="row">
                <div class="col-lg-10 col-11 mx-auto">
                    @include('partials.searchform')
                </div>
            </div>
            <div class="row">
                @php $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 1
                ) @endphp
                    
                @php $query = new WP_Query( $args ) @endphp

                @if($query->have_posts())
                    @while($query->have_posts())
                        @php $query->the_post() @endphp

                        <div class="col-lg-8 col-12 py-3">
                            <article class="grid bg-white py-3 mx-lg-3 mx-0">
                                <h1 class="h5 pt-3 px-lg-5 px-3 pb-0"><strong class="bg-info text-white">{{__('Article') }}</strong></h1>
                                <h2 class="h3 text-secondary py-3 px-lg-5 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                @if(has_post_thumbnail())
                                    @php $attachment_id = get_post_thumbnail_id() @endphp
                                    @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                    <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                @endif
                                <div class="my-3 mx-lg-5 mx-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Read more about the @php the_title() @endphp post">{{__('Read more') }}</a></div>
                            </article>
                        </div>
                    @endwhile
                @endif

                @php wp_reset_postdata() @endphp
                
                <div class="col-lg-4 col-12">
                    @php $video_args = array(
                        'post_type' => 'videos',
                        'posts_per_page' => 1
                    ) @endphp

                    @php $video_query = new WP_Query( $video_args ) @endphp

                    @if($video_query->have_posts())
                        @while($video_query->have_posts())
                            @php $video_query->the_post() @endphp

                            <div class="row">
                                <div class="col-12 py-3">
                                    <article class="grid bg-white py-3 mx-3">
                                        <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-secondary text-white">{{__('Video') }}</strong></h2>
                                        <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                        @if(has_post_thumbnail())
                                            @php $attachment_id = get_post_thumbnail_id() @endphp
                                            @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                            <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                        @endif
                                        <div class="m-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Watch the @php the_title() @endphp video">{{__('Watch video') }}</a></div>
                                    </article>
                                </div>
                            </div>
                        @endwhile
                    @endif

                    @php wp_reset_postdata() @endphp

                    @php $quiz_args = array(
                        'post_type' => 'quizzes',
                        'posts_per_page' => 1
                    ) @endphp

                    @php $quiz_query = new WP_Query( $quiz_args ) @endphp

                    @if($quiz_query->have_posts())
                        @while($quiz_query->have_posts())
                            @php $quiz_query->the_post() @endphp

                            <div class="row">
                                <div class="col-12 py-3">
                                    <article class="grid bg-white py-3 mx-3">
                                        <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-success text-white">{{__('Quiz') }}</strong></h2>
                                        <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                        @if(has_post_thumbnail())
                                            @php $attachment_id = get_post_thumbnail_id() @endphp
                                            @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                            <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                        @endif
                                        <div class="m-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Start the @php the_title() @endphp quiz">{{__('Test your knowledge') }}</a></div>
                                    </article>
                                </div>
                            </div>
                        @endwhile
                    @endif

                    @php wp_reset_postdata() @endphp
                </div>
            </div>
        </div>
    </section>

    <section id="articles">
        <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
            <div class="row">
                <div class="col-12">
                    @include('partials.adsense')
                </div>
            </div>
        </div>

        <div class="bg-light-blue">
            <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">

                @php $args_offset = array(
                    'post_type' => 'post',
                    'offset' => 1,
                    'posts_per_page' => 3
                ) @endphp
                    
                @php $query_offset = new WP_Query( $args_offset ) @endphp

                @if($query_offset->have_posts())
                    <div class="row">
                        <div class="col-lg-12 col-11 mx-auto heading">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h2><strong class="bg-info text-white">Articles</strong></h2>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <a href="@php echo get_permalink( get_option( 'page_for_posts' ) ) @endphp" class="btn mb-3" role="button">{{__('Browse all articles') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @while($query_offset->have_posts())
                            @php $query_offset->the_post() @endphp

                            <div class="col-lg-4 col-12">
                                <article class="grid bg-white my-lg-5 my-3 py-3">
                                    <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-info text-white">{{__('Article') }}</strong></h2>
                                    <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                    @if(has_post_thumbnail())
                                        @php $attachment_id = get_post_thumbnail_id() @endphp
                                        @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                        <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                    @endif
                                    <div class="my-3 mx-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Read more about the @php the_title() @endphp post">{{__('Read more') }}</a></div>
                                </article>
                            </div>
                        @endwhile
                    </div>
                @endif
            </div>
        </div>
    </section>

    
    <section id="videos">
        <div class="col-lg-10 col-12 mx-auto">
            <div class="row">
                <div class="col-12 py-5">
                    @include('partials.adsense')
                </div>
            </div> 
        </div>

        <div class="bg-light-red">
            @php $video_args_offset = array(
                'post_type' => 'videos',
                'offset' => 1,
                'posts_per_page' => 3
            ) @endphp
                    
            @php $video_query_offset = new WP_Query( $video_args_offset ) @endphp

            @if($video_query_offset->have_posts())
                <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
                    <div class="row">
                        <div class="col-lg-12 col-11 mx-auto heading">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h2><strong class="bg-secondary text-white">Videos</strong></h2>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <a href="@php echo get_post_type_archive_link( 'videos' ) @endphp" class="btn mb-3" role="button">{{__('Browse all videos') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @while($video_query_offset->have_posts())
                            @php $video_query_offset->the_post() @endphp

                            <div class="col-lg-4 col-12">
                                <article class="grid bg-white my-lg-5 my-3 py-3">
                                    <h2 class="h5 text-danger pt-3 px-lg-4 px-3 pb-0"><strong class="bg-secondary text-white">{{__('Video') }}</strong></h2>
                                    <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                    @if(has_post_thumbnail())
                                        @php $attachment_id = get_post_thumbnail_id() @endphp
                                        @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                        <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                    @endif
                                    <div class="my-3 mx-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Watch the @php the_title() @endphp video">{{__('Watch video') }}</a></div>
                                </article>
                            </div>
                        @endwhile
                    </div>
                </div>
            @endif
        </div>

        @php wp_reset_postdata() @endphp
    </section>

    <section id="quizzes">
        <div class="col-lg-10 col-12 mx-auto">
            <div class="row">
                <div class="col-12 py-5">
                    @include('partials.adsense')
                </div>
            </div> 
        </div>

        <div class="bg-light-green">
            @php $quiz_args_offset = array(
                'post_type' => 'quizzes',
                'offset' => 1,
                'posts_per_page' => 3
            ) @endphp
                    
            @php $quiz_query_offset = new WP_Query( $quiz_args_offset ) @endphp

            @if($quiz_query_offset->have_posts())
                <div class="col-lg-10 col-12 mx-auto py-lg-5 py-3">
                    <div class="row">
                        <div class="col-lg-12 col-11 mx-auto heading">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h2><strong class="bg-success text-white">Quizzes</strong></h2>
                                </div>
                                <div class="col-lg-3 col-12">
                                    <a href="@php echo get_post_type_archive_link( 'quizzes' ) @endphp" class="btn mb-3" role="button">{{__('Browse all quizzes') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        @while($quiz_query_offset->have_posts())
                            @php $quiz_query_offset->the_post() @endphp

                            <div class="col-lg-4 col-12">
                                <article class="grid bg-white my-lg-5 my-3 py-3">
                                    <h2 class="h5 text-danger pt-3 px-lg-4 px-3 pb-0"><strong class="bg-success text-white">{{__('Quiz') }}</strong></h2>
                                    <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
                                    @if(has_post_thumbnail())
                                        @php $attachment_id = get_post_thumbnail_id() @endphp
                                        @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                        <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                    @endif
                                    <div class="my-3 mx-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Start the @php the_title() @endphp quiz">{{__('Start quiz') }}</a></div>
                                </article>
                            </div>
                        @endwhile
                    </div>
                </div>
            @endif
        </div>

        @php wp_reset_postdata() @endphp
    </section>
    @include('partials.mailchimp')
@else
    <section class="page bg-light">
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
                            <h1 class="h2"><strong class="bg-primary text-secondary">@php the_title() @endphp</strong></h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-12 mx-auto mb-5 pl-lg-0 text-dark">
                    @php the_content() @endphp
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
@endif