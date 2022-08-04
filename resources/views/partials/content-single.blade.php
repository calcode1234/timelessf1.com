<section class="page article bg-light-blue">
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
                        <h1 class="h2"><strong class="bg-info text-white">Article</strong></h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-5 col-10 pl-0 mb-5">
                @if(has_post_thumbnail())
                    @php $attachment_id = get_post_thumbnail_id() @endphp
                    @php $alt = get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) @endphp
                    <img src="@php the_post_thumbnail_url() @endphp" alt="@php echo $alt @endphp" width="100%" height="auto">
                @endif
            </div>
            <div class="col-lg-5 col-10 pl-0 mb-5">
                <h2 class="text-dark"><strong>@php the_title() @endphp</strong></h2>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto pl-0 mb-5">
                @php the_content() @endphp
            </div>
        </div>
    </div>
</section>