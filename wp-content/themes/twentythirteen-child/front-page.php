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
<div id="about_us" class="flexslider">
<?php if( have_rows('slider') ): ?>

  <ul class="slides">

  <?php while( have_rows('slider') ): the_row(); 

    $image = get_sub_field('image');
    $text = get_sub_field('text');

    ?>
    <li class="slide">
        <div class="slider-content" style="background-image: url(<?php echo $image['url']; ?>);">
        <div style="margin: 0 0; display: inline-block; height:100%; width:100px; vertical-align:middle; content: ' ';height:450px;"></div>
        <div class="slider-text orange-text"><?php echo $text; ?></div>
        <div style="display: inline-block; height:100%; width:100px; vertical-align:middle; content: ' ';height:450px;"></div>
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

<div id="portfolio" class="content-block portfolio">
<h3 class="grey-text">PORTFOLIO</h3>
<div id='owl' class="owl-carousel">
<?php 
  $args = array( 'post_type' => 'work');
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post();

  $post_id = get_the_ID();
  $link = get_permalink();
  $thumbnail = get_the_post_thumbnail($post_id);

  $pos = strpos($thumbnail, 'src="');
  $thumbnail = substr($thumbnail, $pos+5);
  $pos = strpos($thumbnail, '"');
  $length= strlen($thumbnail);
  $thumbnail = substr($thumbnail, 0, $pos-$length);
?>
  <div class="carousel-element" style="background-image: url(<?php echo $thumbnail; ?>);">

  <a class="carousel-link" href="<?php echo $link ?>"></a>
</div>

<?php endwhile; wp_reset_postdata();?>

</div>
</div>

<div id="latest_news" class="content-block latest-news">
<h3 class="grey-text">LATEST NEWS</h3>
<div class="news">
<?php 
  $args = array( 'category_name'=>'news', 'posts_per_page'=>4);
  $loop = new WP_Query( $args );
  $iter = 0;
  while ( $loop->have_posts() ) : $loop->the_post(); 
        $iter +=1;
  if( $iter==2 || $iter==4): ?>
    <div class="news-content right-news">
  <?php else: ?>
    <div class="news-content">
  <?php endif; ?>
        <?php 

        $post_id = get_the_ID();
        $thumbnail = get_the_post_thumbnail($post_id);
        $link = get_permalink();
        $content = get_the_content();

        $pos = strpos($thumbnail, 'src="');
        $image = substr($thumbnail, $pos+5);
        $pos = strpos($image, '"');
        $length= strlen($image);
        $image = substr($image, 0, $pos-$length);

        $length = strlen($content);
        $text = substr($content, 0, 128-$length);
        $text .=" ...";
        ?> 
      <div id="news-<?php echo $iter ?>"class="news-image" style="background-image: url(<?php echo $image; ?>);"></div>
      <div class="news-text">
      <h4><?php the_title();?></h4>
      <h5><?php echo $text ?></h5>
      <a href="<?php echo $link ?>"><input type="button" class="button" value="READ MORE"/></a>
      </div>
  </div>

<?php endwhile; wp_reset_postdata();?>
</div>
</div>

<?php if( have_rows('partners') ): ?>
<div id="partners" class="content-block partners-and-clients">
<h3 class="grey-text">PARTNERS  CLIENTS</h3>
<div class="owl-carousel">
<?php while( have_rows('partners') ): the_row(); 
    $label = get_sub_field('img');
    $url = get_sub_field('link');
  ?>
      <div class="carousel-element" style="background-image: url(<?php echo $label['url'] ?>);">
      <a class="carousel-link" href="<?php echo $url ?>"></a>
      </div>
  <?php endwhile; ?>
</div>

</div>
<?php endif; ?>




<?php get_footer(); ?>
