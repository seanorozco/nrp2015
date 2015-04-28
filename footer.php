<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>
          <div><a href="#">Back to Top</a></div>
			<div><a href="<?php echo esc_url( __( 'http://www.nikirossphotography.com', 'twentyfifteen' ) ); ?>"><?php printf( esc_html__( '&copy; 2014 %s', 'twentyfifteen' ), 'Niki Ross Photography' ); ?></a></div>
          
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>
