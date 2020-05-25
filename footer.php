<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ClubMe
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		<?php if (get_theme_mod( 'toggle_contact', false ) ): ?>
			<div class="site-contacts">
				<span><?php echo get_theme_mod( 'contact_name', '' ); ?></span>
				<span class="sep"> | </span>
				<span><?php echo get_theme_mod( 'contact_address', '' ); ?></span>
				<span class="sep"> | </span>
				<span><?php echo get_theme_mod( 'contact_email', '' ); ?></span>
				<span class="sep"> | </span>
				<span><?php echo get_theme_mod( 'contact_number', '' ); ?></span>
			</div>
		<?php endif; ?>
			<div class="site-credits">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'clubme' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'clubme' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'clubme' ), 'clubme', '<a href="http://underscores.me/">Underscores.me</a>' );
					?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
