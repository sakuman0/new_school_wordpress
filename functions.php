<?php

// 閉じタグ無し

function theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function is_even_post() {
    global $wp_query;
    return ( ( ( $wp_query->current_post + 1 ) % 2 ) === 0 );
  }

  add_theme_support('title-tag');