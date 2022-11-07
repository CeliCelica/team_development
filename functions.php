<?php

// JS・CSSファイルを読み込む
function add_files() {
	if (!is_admin()) {
		// WordPress提供のjquery.jsを読み込まない
		wp_deregister_script('jquery');
		// slickの読み込み
		wp_enqueue_script('slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), false);
		// jQueryの読み込み
		wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), false);
		// サイト共通JS
		wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true);
		// サイト共通のCSSの読み込み
		wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
	}
	}
add_action('wp_enqueue_scripts', 'add_files');