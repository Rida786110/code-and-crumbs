<?php
if ( ! defined( 'XPERIO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'XPERIO_VERSION', wp_get_theme()->get( 'Version' ) );
}
define( 'XPERIO_DEBUG', defined( 'WP_DEBUG' ) && WP_DEBUG === true );
define( 'XPERIO_DIR', trailingslashit( get_template_directory() ) );
define( 'XPERIO_URL', trailingslashit( get_template_directory_uri() ) );

if ( ! function_exists( 'xperio_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since walker_fse 1.0.0
	 *
	 * @return void
	 */
	function xperio_support() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'post-thumbnails' );
		// Enqueue editor styles.
		add_editor_style( 'style.css' );
		// Removing default patterns.
		remove_theme_support( 'core-block-patterns' );
	}

endif;
add_action( 'after_setup_theme', 'xperio_support' );

/*
----------------------------------------------------------------------------------
Enqueue Styles
-----------------------------------------------------------------------------------*/
if ( ! function_exists( 'xperio_styles' ) ) :
	function xperio_styles() {
		// registering style for theme
		wp_enqueue_style( 'xperio-style', get_stylesheet_uri(), array(), XPERIO_VERSION );
		wp_enqueue_style( 'xperio-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), XPERIO_VERSION );
		if ( is_rtl() ) {
			wp_enqueue_style( 'xperio-rtl-css', get_template_directory_uri() . '/assets/css/rtl.css', 'rtl_css', XPERIO_VERSION );
		}
	}
endif;

add_action( 'wp_enqueue_scripts', 'xperio_styles' );

/**
 * Enqueue scripts for admin area
 */
function xperio_admin_style() {
	$hello_notice_current_screen = get_current_screen();
	if ( ! empty( $_GET['page'] ) && 'about-xperio' === $_GET['page'] || $hello_notice_current_screen->id === 'themes' || $hello_notice_current_screen->id === 'dashboard' || $hello_notice_current_screen->id === 'plugins' ) {
		wp_enqueue_style( 'xperio-admin-style', get_template_directory_uri() . '/inc/admin/css/admin-style.css', array(), XPERIO_VERSION, 'all' );
		wp_enqueue_script( 'xperio-admin-scripts', get_template_directory_uri() . '/inc/admin/js/xperio-admin-scripts.js', array( 'jquery' ), XPERIO_VERSION, true );

		wp_localize_script(
			'xperio-admin-scripts',
			'xperio_admin_localize',
			array(
				'ajax_url'     => admin_url( 'admin-ajax.php' ),
				'nonce'        => wp_create_nonce( 'xperio_admin_nonce' ),
				'welcomeNonce' => wp_create_nonce( 'xperio_welcome_nonce' ),
				'redirect_url' => admin_url( 'themes.php?page=about-xperio' ),
				'scrollURL'    => admin_url( 'plugins.php?cozy-addons-scroll=true' ),
				'demoURL'      => admin_url( 'themes.php?page=advanced-import' ),
			)
		);
	}
}
add_action( 'admin_enqueue_scripts', 'xperio_admin_style' );

/**
 * Enqueue assets scripts for both backend and frontend
 */
function xperio_block_assets() {
	wp_enqueue_style( 'xperio-swiper-bundle-editor-style', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), XPERIO_VERSION );
	wp_enqueue_style( 'xperio-blocks-style', get_template_directory_uri() . '/assets/css/blocks.css', array(), XPERIO_VERSION );
	wp_enqueue_script( 'xperio-swiper-bundle-editor-scripts', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array(), XPERIO_VERSION, true );
}
add_action( 'enqueue_block_assets', 'xperio_block_assets' );

/**
 * Load core file.
 */
require_once get_template_directory() . '/inc/core/init.php';

/**
 * Load welcome page file.
 */
require_once get_template_directory() . '/inc/admin/welcome-notice.php';

if ( ! function_exists( 'xperio_excerpt_more_postfix' ) ) {
	function xperio_excerpt_more_postfix( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '...';
	}
	add_filter( 'excerpt_more', 'xperio_excerpt_more_postfix' );
}
function xperio_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'xperio_add_woocommerce_support' );
