<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('7.1', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7.1 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);

    add_filter('use_block_editor_for_post', '__return_false', 10);

    if( function_exists('acf_add_options_page') ) {
	
        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Settings',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        )); 
    }

function videos_posttype() {
    register_post_type( 'videos',
        array(
            'labels' => array(
                'name' => __( 'Videos' ),
                'singular_name' => __( 'Video' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'videos'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-format-video',
            'menu_position' => 5
 
        )
    );
}

add_action( 'init', 'videos_posttype' );
 
function videos_post_type() {
    $labels = array(
        'name'                => _x('Videos', 'Post Type General Name'),
        'singular_name'       => _x('Video', 'Post Type Singular Name'),
        'menu_name'           => __('Videos'),
        'parent_item_colon'   => __('Parent Video'),
        'all_items'           => __('All Videos'),
        'view_item'           => __('View Video'),
        'add_new_item'        => __('Add New Video'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Video'),
        'update_item'         => __('Update Video'),
        'search_items'        => __('Search Video'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );
     
    $args = array(
        'label'               => __('videos'),
        'description'         => __('Videos archive'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
        'taxonomies'          => array( 'video_type' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'rewrite' => array( 'slug' => 'videos/' ),
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true
 
    );

    register_post_type( 'videos', $args );
 
}
 
add_action( 'init', 'videos_post_type', 0 );

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    if ($post_type === 'post' || $post_type === 'videos') return false;
    return $current_status;
}

function quizzes_posttype() {
    register_post_type( 'quizzes',
        array(
            'labels' => array(
                'name' => __( 'Quizzes' ),
                'singular_name' => __( 'Quizzes' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'quizzes'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-yes',
            'menu_position' => 5
 
        )
    );
}

add_action( 'init', 'quizzes_posttype' );
 
function quizzes_post_type() {
    $labels = array(
        'name'                => _x('Quizzes', 'Post Type General Name'),
        'singular_name'       => _x('Quiz', 'Post Type Singular Name'),
        'menu_name'           => __('Quizzes'),
        'parent_item_colon'   => __('Parent Quiz'),
        'all_items'           => __('All Quizzes'),
        'view_item'           => __('View Quiz'),
        'add_new_item'        => __('Add New Quiz'),
        'add_new'             => __('Add New'),
        'edit_item'           => __('Edit Quiz'),
        'update_item'         => __('Update Quiz'),
        'search_items'        => __('Search Quiz'),
        'not_found'           => __('Not Found'),
        'not_found_in_trash'  => __('Not found in Trash'),
    );
     
    $args = array(
        'label'               => __('quizzes'),
        'description'         => __('Quizzes archive'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'excerpt', 'author', 'thumbnail', 'custom-fields' ),
        'taxonomies'          => array( 'quiz_type' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'rewrite' => array( 'slug' => 'quizzes/' ),
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true
 
    );

    register_post_type( 'quizzes', $args );
 
}
 
add_action( 'init', 'quizzes_post_type', 0 );

add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
    if ($post_type === 'post' || $post_type === 'quizzes') return false;
    return $current_status;
}