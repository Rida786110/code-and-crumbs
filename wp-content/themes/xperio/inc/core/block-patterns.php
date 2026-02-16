<?php

/**
 * xperio: Block Patterns
 *
 * @since xperio 1.0.0
 */

/**
 * Registers pattern categories for xperio
 *
 * @since xperio 1.0.0
 *
 * @return void
 */
function xperio_register_pattern_category() {
	$block_pattern_categories = array(
		'xperio'                => array( 'label' => __( 'Xperio Extra', 'xperio' ) ),
		'xperio-header'         => array( 'label' => __( 'Header Layout', 'xperio' ) ),
		'xperio-footer'         => array( 'label' => __( 'Footer Layout', 'xperio' ) ),
		'xperio-about-us'       => array( 'label' => __( 'About Us', 'xperio' ) ),
		'xperio-hero'           => array( 'label' => __( 'Hero Section', 'xperio' ) ),
		'xperio-how-we-work'    => array( 'label' => __( 'How We Work', 'xperio' ) ),
		'xperio-services'       => array( 'label' => __( 'Services', 'xperio' ) ),
		'xperio-testimonial'    => array( 'label' => __( 'Testimonials & Reviews', 'xperio' ) ),
		'xperio-faqs'           => array( 'label' => __( 'FAQS', 'xperio' ) ),
		'xperio-post'           => array( 'label' => __( 'Posts / Blog', 'xperio' ) ),
		'xperio-cta'            => array( 'label' => __( 'CTA: Call To Action', 'xperio' ) ),
		'xperio-brand-showcase' => array( 'label' => __( 'Logo Showcase', 'xperio' ) ),
	);

	$block_pattern_categories = apply_filters( 'xperio_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action( 'init', 'xperio_register_pattern_category', 9 );
