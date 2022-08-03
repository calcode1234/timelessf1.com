<section class="page quiz bg-light-green">
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
    </div>
</section>

<div class="col-lg-10 col-12 mx-auto">
    <div class="row">
        <div class="col-12 py-5">
            @include('partials.adsense')
        </div>
    </div> 
</div>