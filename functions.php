<?php

function add_styles() {
  wp_enqueue_style('main', get_theme_file_uri('/assets/css/style.min.css'));
}

function add_scripts() {
  // Убираем jquery не в админке
  if (!is_admin()) {
    wp_dequeue_script('jquery');
    wp_deregister_script('jquery');
  }

  wp_enqueue_script('main', get_theme_file_uri('/assets/js/main.min.js'), array(), null, true);
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
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}

// Настройки contact-form-7
add_filter('wpcf7_autop_or_not', '__return_false');
add_filter( 'wpcf7_form_elements', 'imp_wpcf7_form_elements' );
function imp_wpcf7_form_elements( $content ) {
	$str_pos = strpos( $content, 'type="submit"' );
	if ( $str_pos !== false ) {
		$content = substr_replace( $content, 'data-popup-selector=".popup-accept"', $str_pos, 0 );
	}
	return $content;
}
