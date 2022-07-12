@if(is_front_page())
    <section id="latest" class="section light-bg">
        <div class="row">
            @php $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1
            ) @endphp
                
            @php $query = new WP_Query( $args ) @endphp

            @if($query->have_posts())
                @while($query->have_posts())
                    @php $query->the_post() @endphp

                    <div class="col-lg-8 col-12">
                        <div class="white-bg py-3 mx-3">
                            <h1 class="text-secondary p-3">{{__('Article') }}</h1>
                            <h2 class="p-3">@php the_title() @endphp</h2>
                            @if(has_post_thumbnail())
                                @php $attachment_id = get_post_thumbnail_id() @endphp
                                @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                            @endif
                            <div class="text-info p-3">@php the_excerpt() @endphp</div>
                            <a href="@php get_permalink(get_option( 'page_for_posts' )) @endphp" class="btn m-3" role="button" aria-label="Read more about the @php the_title() @endphp post">{{__('Read more') }}</a>
                        </div>
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
                            <div class="col-12">
                                <div class="white-bg py-3 mx-3">
                                    <h2 class="text-secondary p-3">{{__('Video') }}</h2>
                                    <h2 class="p-3">@php the_title() @endphp</h2>
                                    @if(has_post_thumbnail())
                                        @php $attachment_id = get_post_thumbnail_id() @endphp
                                        @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                        <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                    @endif
                                    <a href="@php echo get_post_type_archive_link( 'videos' ) @endphp" class="btn m-3" role="button" aria-label="Watch the @php the_title() @endphp video">{{__('Watch video') }}</a>
                                </div>
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
                            <div class="col-12">
                                <div class="white-bg py-3 mx-3">
                                    <h2 class="text-secondary p-3">{{__('Quiz') }}</h2>
                                    <h2 class="p-3">@php the_title() @endphp</h2>
                                    @if(has_post_thumbnail())
                                        @php $attachment_id = get_post_thumbnail_id() @endphp
                                        @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                                        <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                                    @endif
                                    <a href="@php echo get_post_type_archive_link( 'quizzes' ) @endphp" class="btn m-3" role="button" aria-label="Start the @php the_title() @endphp quiz">{{__('Test your knowledge') }}</a>
                                </div>
                            </div>
                        </div>
                    @endwhile
                @endif

                @php wp_reset_postdata() @endphp
            </div>
        </div>
    </section>
@endif