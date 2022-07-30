<div class="col-lg-4 col-12">
    <article class="grid bg-white my-lg-5 my-3 py-3">
        <h2 class="h5 pt-3 px-lg-4 px-3 pb-0"><strong class="bg-secondary text-white">{{__('Video') }}</strong></h2>
        <h2 class="h4 text-secondary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
        @if(has_post_thumbnail())
            @php $attachment_id = get_post_thumbnail_id() @endphp
            @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
            <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
        @endif
        <div class="my-3 mx-3"><a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Watch the @php the_title() @endphp video">{{__('Watch video') }}</a></div>
    </article>
</div>