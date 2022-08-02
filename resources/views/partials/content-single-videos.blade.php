<section class="page bg-light-red">
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

        @php $content = get_field('content_video_single') @endphp

        @if($content) 
            <div class="row">
                <div class="col-10 mx-auto pl-0 mb-5">
                    <div class="embed-container">
                        @php echo $content['video_url'] @endphp
                    </div>
                </div>
            </div>
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