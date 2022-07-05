<div id="site-header" class="section" role="header">
    <a class="screen-reader-text skip-link btn btn-primary" href="#content">Skip to content</a>

    @if(has_nav_menu('primary_navigation'))
        <nav class="navbar navbar-expand-md bg-faded">
            @php wp_nav_menu(array(
                  'menu'    => 'Primary Navigation', 
                  'theme_location'    => 'primary_navigation',
                  'depth'             => 2,
                  'container'         => false,
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'primary_navigation',
                  'container_aria_label' => 'primary_navigation',
                  'menu_class'        => 'navbar-nav',
                  'fallback_cb'       => 'bs4navwalker::fallback',
                  'walker'            => new \App\wp_bootstrap4_navwalker()
            ) ) @endphp
        </nav>
    @endif

    <a href="@php echo esc_url( home_url( '/' ) ) @endphp" tabindex="-1">
        @if($logo)
            <img src="@php echo esc_url($logo['url']) @endphp" alt="@php echo esc_attr($logo['alt']) @endphp" width="300px" height="auto">
        @else
            {{ get_bloginfo('name', 'display') }}
        @endif
    </a>

    @php wp_nav_menu(array( 'menu' => 'Header Menu 2' ) ) @endphp

    @if(has_nav_menu('primary_navigation'))
        <button class="navbar-toggler" id="navbarToggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="fas fa-bars"></i> <span>Menu</span></button>
    @endif

    <div class="collapse navbar-collapse bg-info" id="navbarNavDropdown">
        @if(has_nav_menu('primary_navigation'))
            @php wp_nav_menu(array(
                'menu'    => 'Primary Navigation', 
                'theme_location'    => 'primary_navigation',
                'depth'             => 2,
                'container'         => false,
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'primary_navigation',
                'container_aria_label' => 'primary_navigation',
                'menu_class'        => 'navbar-nav',
                'fallback_cb'       => 'bs4navwalker::fallback',
                'walker'            => new \App\wp_bootstrap4_navwalker()
            ) ) @endphp
        @endif

        @php wp_nav_menu(array( 'menu' => 'Header Menu 2' ) ) @endphp
    </div>

    <ul>
        @if($tiktok)
            <li>
                @php $tiktok_url  = $tiktok['url'] @endphp
                @php $tiktok_title  = $tiktok['title'] @endphp
                @php $tiktok_target = $tiktok['target'] @endphp @php '_self' @endphp

                <a href="@php echo esc_url( $tiktok_url ) @endphp" target="@php echo esc_attr( $tiktok_target ) @endphp"><i class="fab fa-tiktok"></i> <span class="sr-only">@php echo esc_html( $tiktok_title ) @endphp</span></a>
            </li>
        @endif

        @if($youtube)
            <li>
                @php $youtube_url  = $youtube['url'] @endphp
                @php $youtube_title  = $youtube['title'] @endphp
                @php $youtube_target = $youtube['target'] @endphp @php '_self' @endphp

                <a href="@php echo esc_url( $youtube_url ) @endphp" target="@php echo esc_attr( $youtube_target ) @endphp"><i class="fab fa-youtube"></i> <span class="sr-only">@php echo esc_html( $youtube_title ) @endphp</span></a>
            </li>
        @endif

        @if($instagram)
            <li>
                @php $instagram_url  = $instagram['url'] @endphp
                @php $instagram_title  = $instagram['title'] @endphp
                @php $instagram_target = $instagram['target'] @endphp @php '_self' @endphp

                <a href="@php echo esc_url( $instagram_url ) @endphp" target="@php echo esc_attr( $instagram_target ) @endphp"><i class="fab fa-instagram"></i> <span class="sr-only">@php echo esc_html( $instagram_title ) @endphp</span></a>
            </li>
        @endif

        @if($twitter)
            <li>
                @php $twitter_url  = $twitter['url'] @endphp
                @php $twitter_title  = $twitter['title'] @endphp
                @php $twitter_target = $twitter['target'] @endphp @php '_self' @endphp

                <a href="@php echo esc_url( $twitter_url ) @endphp" target="@php echo esc_attr( $twitter_target ) @endphp"><i class="fab fa-twitter"></i> <span class="sr-only">@php echo esc_html( $twitter_title ) @endphp</span></a>
            </li>
        @endif
    </ul>
</div>
