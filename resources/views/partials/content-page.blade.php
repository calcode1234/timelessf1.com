@if(is_front_page())
    @php $args = array(
        'post_type' => 'post',
        'posts_per_page' => 4
    ) @endphp

    @php $query = new WP_Query( $args ) @endphp
    @php $query_title = get_the_title( get_option('page_for_posts', true) ) @endphp

    <section id="articles" class="section">
        <h2>@php echo $query_title @endphp</h2>
        @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'">'.esc_html__( 'Browse all articles' ) .'</a>' @endphp
        @if($query->have_posts())

        @else
            <p>@php echo esc_html('There are currently no posts to show.') @endphp</p>
        @endif
    </section>

    @php $video_args = array(
        'post_type' => 'videos',
        'posts_per_page' => 4
    ) @endphp

    @php $videos_query = new WP_Query( $video_args ) @endphp

    <section id="videos" class="section">
        <h2>Videos</h2>
        @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'">'.esc_html__( 'Browse all videos' ) .'</a>' @endphp
        @if($videos_query->have_posts())

        @else
            <p>@php echo esc_html('There are currently no videos to show.') @endphp</p>
        @endif
    </section>

    @php $quiz_args = array(
        'post_type' => 'quizzes',
        'posts_per_page' => 4
    ) @endphp

    @php $quizzes_query = new WP_Query( $quiz_args ) @endphp

    <section id="quizzes" class="section">
        <h2>Quizzes</h2>
        @php echo '<a href="'.esc_url(get_permalink( get_option( 'page_for_posts' ) )).'">'.esc_html__( 'Browse all quizzes' ) .'</a>' @endphp
        @if($quizzes_query->have_posts())

        @else
            <p>@php echo esc_html('There are currently no quizzes to show.') @endphp</p>
        @endif
    </section>

    <section id="newsletter" class="section bg-secondary">
        <h2>@php echo esc_html('Subscribe to the newsletter') @endphp</h2>
        <p>@php echo esc_html('Mailchimp form here.') @endphp</p>
    </section>
@endif