<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public function logo()
    {
        return get_field('logo', 'options');
    }

    public function tiktok()
    {
        return get_field('tiktok_link', 'options');
    }
    
    public function youtube()
    {
        return get_field('youtube_link', 'options');
    }

    public function instagram()
    {
        return get_field('instagram_link', 'options');
    }

    public function twitter()
    {
        return get_field('twitter_link', 'options');
    }
}
