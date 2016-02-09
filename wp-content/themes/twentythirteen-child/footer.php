<?php 

?>

			</div><!-- #main -->
			<footer id="colophon" class="site-footer" role="contentinfo">
				<?php //Loading sidebar-main.php file
						get_sidebar( 'main' );
				?>
			</footer>
			<div class="site-info">
				<?php do_action( 'twentythirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentythirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentythirteen' ); ?>"><?php printf('&#0169 Copyright 2013 | Powered By WordPress' ); ?></a>
			</div><!-- .site-info -->
		</div>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>