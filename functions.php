<?php

function add_styles() {
  wp_enqueue_style('main', get_theme_file_uri('/assets/css/style.min.css'));
}

function add_scripts() {
  if (!is_admin()) {
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
  }

  wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.min.js', array('gsap', 'gsap-scrollTrigger'), null, true));
}

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

// Дополнительные возможности
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

### Добавляет SVG в список разрешенных для загрузки файлов.
add_filter( 'upload_mimes', 'svg_upload_allow' );
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}