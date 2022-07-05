<div id="site-header" class="section" role="header">
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
</div>
