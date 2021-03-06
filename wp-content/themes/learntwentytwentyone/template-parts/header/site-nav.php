<?php
/**
 * Displays the site navigation.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

	<nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'learntwentytwentyone' ); ?>">
		<div class="primary-menu-container">
			<?php if ( has_nav_menu( 'primary' ) ) : ?>
					<div class="menu-button-container">
						<button id="primary-mobile-menu" class="button" aria-controls="primary-menu-list" aria-expanded="false">
							<span class="dropdown-icon open"><?php esc_html_e( 'Menu', 'learntwentytwentyone' ); ?>
								<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'menu' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
							</span>
							<span class="dropdown-icon close"><?php esc_html_e( 'Close', 'learntwentytwentyone' ); ?>
								<?php echo twenty_twenty_one_get_icon_svg( 'ui', 'close' ); // phpcs:ignore WordPress.Security.EscapeOutput ?>
							</span>
						</button><!-- #primary-mobile-menu -->
					</div><!-- .menu-button-container -->
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'menu_class'      => 'menu-wrapper',
							'container' => false,
							'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
							'fallback_cb'     => false,
						)
					);
					?>
			<?php endif; ?>
		</div>

	</nav><!-- #site-navigation -->
