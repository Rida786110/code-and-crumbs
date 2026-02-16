<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package xperio
 * @since 1.0.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since 0.1
	 *
	 * @return void
	 */
	function xperio_register_block_styles() {
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'xperio-navigation-primary',
				'label' => __( 'Hover: Primary', 'xperio' ),
			)
		);
		register_block_style(
			'core/navigation',
			array(
				'name'  => 'xperio-navigation-secondary',
				'label' => __( 'Hover: Secondary', 'xperio' ),
			)
		);
		register_block_style(
			'core/button',
			array(
				'name'  => 'xperio-button-arrow',
				'label' => __( 'Arrow ↗', 'xperio' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'xperio-hover-zoom-in',
				'label' => __( 'Hover: Zoom In', 'xperio' ),
			)
		);
		register_block_style(
			'core/image',
			array(
				'name'  => 'xperio-hover-zoom-out',
				'label' => __( 'Hover: Zoom Out', 'xperio' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'xperio-boxshadow',
				'label' => __( 'Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'xperio-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/group',
			array(
				'name'  => 'xperio-overflow-hidden',
				'label' => __( 'Overflow: Hidden', 'xperio' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'xperio-boxshadow',
				'label' => __( 'Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/column',
			array(
				'name'  => 'xperio-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'xperio-boxshadow',
				'label' => __( 'Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'xperio-boxshadow-hover',
				'label' => __( 'Hover: Box Shadow', 'xperio' ),
			)
		);
		register_block_style(
			'core/columns',
			array(
				'name'  => 'xperio-overflow-hidden',
				'label' => __( 'Overflow: Hidden', 'xperio' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'xperio-pagination-primary',
				'label' => __( 'Primary', 'xperio' ),
			)
		);
		register_block_style(
			'core/query-pagination',
			array(
				'name'  => 'xperio-pagination-secondary',
				'label' => __( 'Secondary', 'xperio' ),
			)
		);
		register_block_style(
			'core/categories',
			array(
				'name'  => 'xperio-categories-no-list',
				'label' => __( 'List Style : None', 'xperio' ),
			)
		);
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'xperio-no-radius',
				'label' => __( 'Border Radius: None', 'xperio' ),
			)
		);
	}
	add_action( 'init', 'xperio_register_block_styles' );
}
