<div class="col-lg-4 col-sm-6 col-12 d-sm-flex flex-sm-column">
    <article class="grid bg-white my-3 py-3 flex-sm-grow-1">
        <h2 class="h5 pt-3 px-lg-4 px-3 pb-0">
            @if(get_post_type() == 'post')
                <strong class="bg-danger text-white">{{__('Article') }}</strong>
            @elseif(get_post_type() == 'videos')
                <strong class="bg-danger text-white">{{__('Video') }}</strong>
            @elseif(get_post_type() == 'quizzes')
                <strong class="bg-danger text-white">{{__('Quiz') }}</strong>
            @elseif(get_post_type() == 'page')
                <strong class="bg-danger text-white">{{__('Page') }}</strong>
            @endif
        </h2>
        <h2 class="h4 text-primary py-3 px-lg-4 px-3"><strong class="pl-0">@php the_title() @endphp</strong></h2>
        @if(has_post_thumbnail())
            @php $attachment_id = get_post_thumbnail_id() @endphp
            @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
            <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
        @endif
        <div class="my-3 mx-3">
            @if(get_post_type() == 'post')
                <a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Read more about the @php the_title() @endphp post">{{__('Read more') }}</a>
            @elseif(get_post_type() == 'videos')
                <a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Watch the @php the_title() @endphp video">{{__('Watch video') }}</a>
            @elseif(get_post_type() == 'quizzes')
                <a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Start the @php the_title() @endphp quiz">{{__('Start quiz') }}</a>
            @elseif(get_post_type() == 'page')
               <a href="@php the_permalink() @endphp" class="btn" role="button" aria-label="Find out more about @php the_title() @endphp on this page">{{__('Find out more') }}</a> 
            @endif
        </div>
    </article>
</div>

