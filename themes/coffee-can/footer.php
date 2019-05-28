<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CoffeeCan
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php

		if (has_nav_menu('social')) { ?>

			<nav class="social-menu">
				<p> <?php echo get_theme_mod('footer_text', 'Check out our Social Media') ?></p>
				<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . coffee_can_get_svg( array( 'icon' => 'chain' ) ),
						) );
					?>
			</nav><!-- social-menu -->

	<?php } ?>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'coffee-can' ) ); ?>">
				<?php echo get_option( 'blogname' ); ?>
			</a>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( 'Team 04 2019' );
				?>
		</div><!-- .site-info -->

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
