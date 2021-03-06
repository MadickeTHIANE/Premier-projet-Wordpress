<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'learntwentytwentyone-columns-overlap',
				'label' => esc_html__( 'Overlap', 'learntwentytwentyone' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'learntwentytwentyone-border',
				'label' => esc_html__( 'Borders', 'learntwentytwentyone' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'learntwentytwentyone-border',
				'label' => esc_html__( 'Borders', 'learntwentytwentyone' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'learntwentytwentyone-border',
				'label' => esc_html__( 'Borders', 'learntwentytwentyone' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'learntwentytwentyone-image-frame',
				'label' => esc_html__( 'Frame', 'learntwentytwentyone' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'learntwentytwentyone-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'learntwentytwentyone' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'learntwentytwentyone-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'learntwentytwentyone' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'learntwentytwentyone-border',
				'label' => esc_html__( 'Borders', 'learntwentytwentyone' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'learntwentytwentyone-separator-thick',
				'label' => esc_html__( 'Thick', 'learntwentytwentyone' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'learntwentytwentyone-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'learntwentytwentyone' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
