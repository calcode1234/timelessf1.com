<article class="page quiz bg-light-green">
    <div class="col-lg-10 col-12 mx-auto pt-lg-5 pb-lg-3 py-3">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                @include('partials.searchform')
            </div>
        </div>
    </div>

    <div class="col-lg-10 col-12 mx-auto">
        <div class="row">
            <div class="col-lg-10 col-11 mx-auto heading pb-2 mb-5">
                <div class="row">
                    <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                        <h1 class="h2"><strong class="bg-success text-white">Quiz</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto pl-0 mb-5">
                <h2 class="text-dark"><strong>@php the_title() @endphp</strong></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-10 col-11 mx-auto mb-5 pl-lg-0 text-dark">
                @php the_content() @endphp
            </div>
        </div>

        @if(have_rows('related_quizzes'))
            <div class="row">
                <div class="col-lg-10 col-11 mx-auto heading pb-2">
                    <div class="row">
                        <div class="col-lg-9 col-11 mb-lg-0 mb-3 pl-lg-0">
                            <h2 class="h3"><strong class="bg-success text-white">Related videos</strong></h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-10 mx-auto pl-0">
                    <div class="row">
                        @while(have_rows('related_quizzes'))
                            @php the_row() @endphp
                            @php $quiz = get_sub_field('quiz') @endphp
                            @if( $quiz )
                                @php $featured_image = get_the_post_thumbnail_url($quiz->ID) @endphp

                                <div class="col-lg-4 col-sm-6 col-12">
                                    <article class="grid bg-white my-lg-5 my-3 py-3">
                                        <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-success text-white">{{__('Quiz') }}</strong></h2>
                                        <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php echo esc_html( $quiz->post_title ) @endphp</strong></h2>
                                        @if(has_post_thumbnail())
                                            @php $featured_image = get_the_post_thumbnail_url($quiz->ID) @endphp
                                            <img src="@php echo $featured_image @endphp" alt="@php echo get_post_meta( get_post_thumbnail_id($quiz->ID), '_wp_attachment_image_alt', true ) @endphp" width="100%" height="auto">
                                        @endif
                                        <div class="my-3 mx-3"><a href="@php the_permalink($quiz->ID) @endphp" class="btn" role="button" aria-label="Start the @php echo esc_html( $quiz->post_title ) @endphp quiz">{{__('Start quiz') }}</a></div>
                                    </article>
                                </div>
                            @endif
                        @endwhile
                            </div>
                        </div>
                    </div>
        @endif
    </div>
</article>

<div class="col-lg-10 col-12 mx-auto">
    <div class="row">
        <div class="col-12 py-5">
            @include('partials.adsense')
        </div>
    </div> 
</div>