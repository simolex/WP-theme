<?php
add_action('wp_enqueue_scripts', 'sparrow_styles');
add_action('wp_footer', 'sparrow_scripts');
add_action( 'after_setup_theme', 'sparrow_register_nav_menu' );



function sparrow_styles()
{
   //wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/modernizr.js', [], false, false);

   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style('style-default', get_template_directory_uri() . "/assets/css/default.css");
   wp_enqueue_style('style-layout', get_template_directory_uri() . "/assets/css/layout.css");
   wp_enqueue_style('style-media', get_template_directory_uri() . "/assets/css/media-queries.css");
   //header
}

function sparrow_scripts()
{
   wp_deregister_script('jquery');
   wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
   wp_enqueue_script('jquery');

   wp_enqueue_script('migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.min.js', ['jquery'], '1.2.1', true);
   wp_enqueue_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider.js', ['jquery'], '1.0.0', true);
   wp_enqueue_script('doubletaptogo', get_template_directory_uri() . '/assets/js/doubletaptogo.js', [], '1.0.0', true);
   wp_enqueue_script('init', get_template_directory_uri() . '/assets/js/init.js', [], '1.0.0', true);
}

function sparrow_register_nav_menu() {
	register_nav_menu( 'top', 'Главное меню' );
	register_nav_menu( 'bottom', 'Нижнееее меню' );
}