<?php
namespace App;

/**
 * Enable plugins to manage the document title
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
 */
add_theme_support('title-tag');

/**
 * Enable post thumbnails
 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
 */
add_theme_support('post-thumbnails');

/**
 * Enable HTML5 markup support
 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
 */
add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

/**
 * Enable selective refresh for widgets in customizer
 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
 */
add_theme_support('customize-selective-refresh-widgets');

/**
 * Use main stylesheet for visual editor
 * @see resources/assets/styles/layouts/_tinymce.scss
 */
add_editor_style(asset_path('styles/main.css'));


/**
 * Register navigation menus
 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
register_nav_menus([
	PRIMARY_NAV_SLUG => 'Primary Navigation',
	FOOTER_NAV_SLUG => 'Footer Navigation',
]);
