<?php

// Theme Options
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(
            array(
                'page_title' => 'Options Page',
                'menu_title' => 'Options Page',
                'menu_slug' => 'options',
                'capability' => 'edit_posts',
                'redirect' => false
            )
    );
}
// Require file custom post type
require get_template_directory() . '/register/support-feature.php';
require get_template_directory() . '/register/support-news.php';
require get_template_directory() . '/register/support-tip.php';

// Enable something
function enable_something() {
    add_theme_support('post-thumbnails');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));
}

add_action('after_setup_theme', 'enable_something');
/*
 * Count View
 */

function getPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');

        return "0";
    }

    return $count;
}

function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if ($count == '') {
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    } else {
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}

?>