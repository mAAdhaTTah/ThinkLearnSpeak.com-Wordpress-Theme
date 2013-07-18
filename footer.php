<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentythirteen' ), 'WordPress' ); ?>,</a> 
				<a href="http://www.jamesdigioia.com/" target="_blank">Site design by James DiGioia,</a> 
				<a href="http://www.lisamahapatra.com/" target="_blank">Header design by Lisa Mahapatra,</a> 
				<a href="http://thenounproject.com/" target="_blank">Book icon by The Noun Project,</a> 
				<a href="http://www.iconshock.com/" target="_blank">Social media icons by iconShock</a> via <a href="http://www.hongkiat.com/blog/social-network-icon-set/" target="_blank">Hongkiat.com</a>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>