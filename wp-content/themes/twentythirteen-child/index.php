<?php

get_header(); ?>

<!-- <div class="owl-carousel">
  <div class="item">
    <img src="<?php get_stylesheet_directory_uri();?>" alt="" />
  </div>
  <div class="item">
    <img src="style/img/reper.png" alt="" />
  </div>
  <div class="item">
    <img src="style/img/reper.png" alt="" />
  </div>
</div> -->
<div class="flexslider">
<?php if( have_rows('slider') ): ?>

  <ul class="slides">

  <?php while( have_rows('slider') ): the_row(); 

    $image = get_sub_field('image');
    $text = get_sub_field('text');

    ?>
    <li class="slide">
        <div class="slider-content" style="background-image: url(<?php echo $image['url']; ?>);">
        <div class="slider-text orange-text"><?php echo $text; ?></div>
        </div>

    </li>

  <?php endwhile; ?>

  </ul>

<?php endif; ?>
 
</div>


<?php if( have_rows('principles') ): 
  $i=0;
?>

<div class="basic-principles ">
  <?php while( have_rows('principles') ): the_row(); 
    $i+=1;
    $icon = get_sub_field('icon');
    $title = get_sub_field('title');
    $content = get_sub_field('content');

  ?>
        <?php if( $i==2 ):?>
          <div class="principle second">
        <?php elseif ($i==4): ?>
          <div class="principle last">
        <?php else: ?>
          <div class="principle">
        <?php endif; ?>
           <div class="principle-icon" style="background-image: url(<?php echo $icon['url'] ?>);"></div>
           <h1><?php echo $title ?></h1>
           <h2><?php echo $content ?></h2>
           </div>
  <?php endwhile; ?>
</div>
<?php endif; ?>


<div class="content-block our-works">
  <h2 class="grey-text">SOME OF OUR WORKS</h2>
  <h3 class="white-text">We are passionate about the web bunch of fellas that take pride in their work</h3>
  <input name="our_works" value="read more"type="button" class="button"/>
</div>

<div class="content-block portfolio">
<h3 class="grey-text">PORTFOLIO</h3>
<div id='owl' class="owl-carousel">
<?php 
  $args = array( 'post_type' => 'work');
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

  $post_id = get_the_ID();
  $link = get_permalink();

  $thumbnail = get_post_field('post_content', $post_id);
  $pos = strpos($thumbnail, 'src="');
  $thumbnail = substr($thumbnail, $pos+5);
  $pos = strpos($thumbnail, '"');
  $length= strlen($thumbnail);
  $thumbnail = substr($thumbnail, 0, $pos-$length);
?>
  <div class="portfolio-element" style="background-image: url(<?php echo $thumbnail; ?>);">

  <a class="carousel-link" href="<?php echo $link ?>"></a>
</div>

<?php endwhile; ?>

</div>
</div>

<div class="content-block latest-news">
<h3 class="grey-text">LATEST NEWS</h3>
<div class="news">

</div>
</div>

<div class="content-block partners-and-clients">
</div>

<?php get_footer(); ?>
