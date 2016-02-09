<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	  $content = get_the_content();
	  $post_id = get_the_ID();
	  $thumbnail = get_the_post_thumbnail($post_id);
	  $pos = strpos($thumbnail, 'src="');
	  $img = substr($thumbnail, $pos+5);
	  $pos = strpos($img, '"');
	  $length= strlen($img);
	  $img = substr($img, 0, $pos-$length);
	  
?>
			<div class="slider-content post-image" style="background-image: url(<?php echo $img; ?>);">
	        	<div style="margin: 0 0; display: inline-block; height:100%; width:100px; vertical-align:middle; content: ' ';height:450px;"></div>
        		<div class="slider-text orange-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        		<div style="display: inline-block; height:100%; width:100px; vertical-align:middle; content: ' ';height:450px;"></div>
        	</div>

			<div class='post-content'><?php echo $content;?></div>
			
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
		?>

	<footer class="entry-meta">


		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->
