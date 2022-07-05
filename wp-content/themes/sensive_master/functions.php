<?php

require dirname(__FILE__) . '/inc/template-tags.php';

add_action('after_setup_theme', function(){
	//Aggiunge il titolo alla tab del browser
	add_theme_support('title-tag');
	// Aggiunge immagini post
	add_theme_support('post-thumbnails');
	// Supporto Menu Dinamici
	add_theme_support('menus');
	// Registra i menu Dinamici
	register_nav_menus(array("header_menu" => __("HeaderMenu"),));
	// Regola le immagini
	add_image_size("post-thumbnail-home",width: 730, crop:true);
});

function sensive_master_theme_init(){

	add_action("wp_enqueue_scripts", function(){
			// Carico stili

			wp_enqueue_style(
				"style", get_template_directory_uri() . "/style.css", array(), wp_get_theme()->get("Version"),
			);
			wp_enqueue_style(
				"bootstrap", get_template_directory_uri() . "/vendors/bootstrap/bootstrap.min.css", array(), wp_get_theme()->get("Version"),
			);
			wp_enqueue_style(
				"fontawesome", get_template_directory_uri() . "/vendors/fontawesome/css/all.min.css", array(), wp_get_theme()->get("Version"),
			);
			wp_enqueue_style(
				"themify", get_template_directory_uri() . "/vendors/themify-icons/themify-icons.css", array(), wp_get_theme()->get("Version"),
			);
			wp_enqueue_style(
				"linericon", get_template_directory_uri() . "/vendors/linericon/style.css", array(), wp_get_theme()->get("Version"),
			);

			wp_enqueue_style(
				"carousel1", get_template_directory_uri() . "/vendors/owl-carousel/owl.theme.default.min.css", array(), wp_get_theme()->get("Version"),
			);
			wp_enqueue_style(
				"carousel2", get_template_directory_uri() . "/vendors/owl-carousel/owl.carousel.min.css", array(), wp_get_theme()->get("Version"),
			);

			// Carico script

			wp_enqueue_script(
				"jquery", get_template_directory_uri() . "vendors/jquery/jquery-3.2.1.min.js", array(), wp_get_theme()->get("Version"), true
			);

			wp_enqueue_script(
				"bundle", get_template_directory_uri() . "/vendors/bootstrap/bootstrap.bundle.min.js", array(), wp_get_theme()->get("Version"),
			);

			wp_enqueue_script(
				"owl", get_template_directory_uri() . "/vendors/owl-carousel/owl.carousel.min.js", array(), wp_get_theme()->get("Version"),
			);

			wp_enqueue_script(
				"ajaxchimp", get_template_directory_uri() . "/js/jquery.ajaxchimp.min.js", array(), wp_get_theme()->get("Version"),
			);

			wp_enqueue_script(
				"mail", get_template_directory_uri() . "/js/mail-script.js", array(), wp_get_theme()->get("Version"),
			);

			wp_enqueue_script(
				"main", get_template_directory_uri() . "/js/main.js", array(), wp_get_theme()->get("Version"),
			);

	});
};
add_action("init","sensive_master_theme_init");

