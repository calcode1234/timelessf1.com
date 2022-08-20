<article class="page article bg-primary">
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
                        <h1 class="h2"><strong class="bg-danger text-white">Article</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-sm-5 col-10 pl-0 mb-5">
                @if(has_post_thumbnail())
                    @php $attachment_id = get_post_thumbnail_id() @endphp
                    @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                    <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                @endif
            </div>
            <div class="col-sm-5 col-10 pl-0 mb-5">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white"><strong>@php the_title() @endphp</strong></h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="contents bg-white py-4 px-2 mt-3">
                            <div class="row">
                                <div class="col-10 mx-auto heading pb-2 mb-4">
                                    <div class="row">
                                        <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                            <h2 class="h3"><strong class="bg-danger text-white">Contents</strong></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @if(have_rows('content_post_single'))
                                @while(have_rows('content_post_single'))
                                    @php the_row() @endphp
                                    @if(have_rows('contents'))
                                        <div class="col-12">
                                        <div class="row">
                                            <div class="col-9 mb-lg-0 pl-lg-0 mx-auto mb-3">
                                                <ol>
                                                    @while(have_rows('contents'))
                                                        @php the_row() @endphp

                                                        @php $link = get_sub_field('link') @endphp

                                                        <li class="mb-3"><a class="text-primary" href="@php echo esc_url( $link['url'] ) @endphp" target="@php echo esc_attr( $link['target'] ) @endphp"><strong>@php echo esc_html( $link['title'] ) @endphp</strong></a></li>
                                                    @endwhile
                                                </ol>
                                            </div>
                                        </div>
                                        </div>
                                    @endif
                                @endwhile
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto pl-0 mb-5">
                @php the_content() @endphp
            </div>
        </div>

        @if(have_rows('content_post_single')) 
            @while(have_rows('content_post_single'))
                @php the_row() @endphp
                @if(have_rows('related_posts'))
                    <div class="row">
                        <div class="col-lg-10 col-11 mx-auto heading pb-2">
                            <div class="row">
                                <div class="col-lg-9 col-12 mb-lg-0 mb-3 pl-lg-0">
                                    <h2 class="h3"><strong class="bg-danger text-white">Related articles</strong></h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-10 mx-auto pl-0">
                            <div class="row">
                                @while(have_rows('related_posts'))
                                    @php the_row() @endphp
                                    @php $article = get_sub_field('article') @endphp
                                    @if( $article )
                                        @php $featured_image = get_the_post_thumbnail_url($article->ID) @endphp

                                        <div class="col-lg-4 col-sm-6 col-12 d-sm-flex flex-sm-column">
                                            <article class="grid bg-white my-lg-5 my-3 py-3 flex-sm-grow-1">
                                                <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-danger text-white">{{__('Article') }}</strong></h2>
                                                <h2 class="h4 text-primary py-3 px-lg-4 px-3"><strong class="pl-0">@php echo esc_html( $article->post_title ) @endphp</strong></h2>
                                                @if(has_post_thumbnail())
                                                    @php $featured_image = get_the_post_thumbnail_url($article->ID) @endphp
                                                    <img src="@php echo $featured_image @endphp" alt="@php echo get_post_meta( get_post_thumbnail_id($article->ID), '_wp_attachment_image_alt', true ) @endphp" width="100%" height="auto">
                                                @endif
                                                <div class="my-3 mx-3"><a href="@php the_permalink($article->ID) @endphp" class="btn" role="button" aria-label="Read more about the @php the_title() @endphp post">{{__('Read more') }}</a></div>
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
</article>

<div class="col-lg-10 col-12 mx-auto">
    <div class="row">
        <div class="col-12 py-5">
            @include('partials.adsense')
        </div>
    </div> 
</div>