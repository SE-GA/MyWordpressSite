<?php
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
		<div class="footer-info">
			<?php dynamic_sidebar( 'footer-sidebar' ); ?>
		</div><!-- .widget-area -->
<?php endif; ?>