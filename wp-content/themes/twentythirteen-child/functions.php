<?php

add_theme_support( 'post-thumbnails' );


function template_scripts_styles() {

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	// Adds Masonry to handle vertical alignment of footer widgets.
	if ( is_active_sidebar( 'sidebar-1' ) )
		wp_enqueue_script( 'jquery-masonry' );

	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'twentythirteen-script', get_template_directory_uri() . '/js/functions.js');

	// Add Source Sans Pro and Bitter fonts, used in the main stylesheet.
	wp_enqueue_style( 'twentythirteen-fonts', twentythirteen_fonts_url(), array(), null );

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.03' );

	// Loads the Internet Explorer specific stylesheet.
	wp_enqueue_style( 'twentythirteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentythirteen-style' ), '2013-07-18' );
	wp_style_add_data( 'twentythirteen-ie', 'conditional', 'lt IE 9' );

    
    wp_enqueue_script( 'flex-slider', get_stylesheet_directory_uri() . '/js/jquery.flexslider-min.js', array('jquery'), true);
	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'owl-script', get_stylesheet_directory_uri() . '/js/owl.carousel.js', array('jquery'), true);
	// Loads JavaScript file with functionality specific to Twenty Thirteen.
	wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/functions.js');

	// Шрифты
	wp_enqueue_style( 'child-fonts', get_stylesheet_directory_uri() . '/css/fonts.css' );

	wp_enqueue_style( 'flex-style', get_stylesheet_directory_uri() . '/css/flexslider.css' );
	wp_enqueue_style( 'owl-style', get_stylesheet_directory_uri() . '/css/owl.carousel.css' );

	// Основной стиль
	wp_enqueue_style( 'owl-theme-style', get_stylesheet_directory_uri() . '/css/owl.theme.css' );
	
	// Родительский стиль
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css');

	// Основной стиль
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css' );

	// Основной стиль


}
add_action( 'wp_enqueue_scripts', 'template_scripts_styles' );


/**
 * Register Sidebar
 */
function textdomain_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'footer-sidebar',
			'name' => __( 'Footer Widgets', 'textdomain' ),
			'description' => __( ' ', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-item-title">',
			'after_title' => '</h3>'
		)
	);
	register_sidebar(
		array(
			'id' => 'secondary-footer-sidebar',
			'name' => __( 'Footer Widgets', 'textdomain' ),
			'description' => __( ' ', 'textdomain' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="footer-item-title">',
			'after_title' => '</h3>'
		)
	);

	/* Repeat register_sidebar() code for additional sidebars. */
}
add_action( 'widgets_init', 'textdomain_register_sidebars' );

