<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package strl
 * @since 1.0.0
 */

if ( ! function_exists( 'strl_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @return void
	 * @since 1.0.0
	 */
	function strl_setup() {
		// Make the theme translatable.
		load_theme_textdomain( 'strl', get_template_directory() . '/languages' );

		// Adds the <title> tag dynamically.
		add_theme_support( 'title-tag' );

		// Enables post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Adds theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Adds support for a custom logo.
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Enables HTML5 markup for various elements.
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

		// Registers the nav menus.
		register_nav_menus(
			array(
				'primary'   => esc_html__( 'Primary Menu', 'strl' ),
				'secondary' => esc_html__( 'Secondary Menu', 'strl' ),
			)
		);
	}
}
add_action( 'after_setup_theme', 'strl_setup' );

/**
 * Registers widget areas.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 1', 'strl' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'The most left footer widget area.', 'strl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 2', 'strl' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'The middle left footer widget area.', 'strl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 3', 'strl' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'The middle right footer widget area.', 'strl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer 4', 'strl' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'The most right footer widget area.', 'strl' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'strl_widgets_init' );

/**
 * Enqueues scripts and styles.
 *
 * @package strl
 * @since 1.0.0
 */
function strl_scripts() {
	wp_dequeue_script( 'jquery' );
	wp_deregister_script( 'jquery' );

	wp_enqueue_script( 'vendor', get_template_directory_uri() . '/assets/vendor.min.js', array(), time(), true );
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/assets/foundation.min.js', array( 'vendor' ), time(), true );
	wp_enqueue_script( 'strl-scripts', get_template_directory_uri() . '/assets/scripts.min.js', array( 'foundation' ), time(), true );

	wp_enqueue_style( 'google-font-ubuntu', 'https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap', array(), '1.0.0' );
	wp_enqueue_style( 'strl-styles', get_template_directory_uri() . '/assets/styles.min.css', array(), time() );
}
add_action( 'wp_enqueue_scripts', 'strl_scripts' );

/**
 * Implements the helper functions.
 */
require get_template_directory() . '/inc/helpers.php';
