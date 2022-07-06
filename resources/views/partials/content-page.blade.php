@if(is_front_page())
    @php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4
    ) @endphp

    @php $query = new WP_Query( $args ) @endphp
    @php $query_title = get_the_title( get_option('page_for_posts', true) ) @endphp

    <section id="articles" class="section">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h2 class="mb-0"><strong>@php echo $query_title @endphp</strong></h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'" class="btn" role="button">'.esc_html__( 'Browse all articles' ) .'</a>' @endphp
                </div>
            </div>

            <div class="row">
                @if($query->have_posts())

                @else
                    <div class="col-12">
                        <p class="section">@php echo esc_html('There are currently no posts to show.') @endphp</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @php $video_args = array(
        'post_type' => 'videos',
        'posts_per_page' => 4
    ) @endphp

    @php $videos_query = new WP_Query( $video_args ) @endphp

    <section id="videos" class="section">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h2 class="mb-0"><strong>Videos</strong></h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'" class="btn" role="button">'.esc_html__( 'Browse all videos' ) .'</a>' @endphp
                </div>
            </div>

            <div class="row">
                @if($videos_query->have_posts())

                @else
                    <div class="col-12">
                        <p class="section">@php echo esc_html('There are currently no videos to show.') @endphp</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    @php $quiz_args = array(
        'post_type' => 'quizzes',
        'posts_per_page' => 4
    ) @endphp

    @php $quizzes_query = new WP_Query( $quiz_args ) @endphp

    <section id="quizzes" class="section">
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex align-items-center">
                    <h2><strong>Quizzes</strong></h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'" class="btn" role="button">'.esc_html__( 'Browse all quizzes' ) .'</a>' @endphp
                </div>
            </div>

            <div class="row">
                @if($quizzes_query->have_posts())

                @else
                    <div class="col-12">
                        <p class="section">@php echo esc_html('There are currently no quizzes to show.') @endphp</p>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <section id="newsletter" class="section bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="mb-0 text-white"><strong>@php echo esc_html('Subscribe to the newsletter') @endphp</strong></h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <p class="mb-0 text-white section">@php echo esc_html('Mailchimp form here.') @endphp</p>
                </div>
            </div>
        </div>
    </section>
@endif