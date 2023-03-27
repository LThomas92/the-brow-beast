<?php get_header(); 
  $video = get_field('video');
?>

<section class="c-page-course">
  <div class="container-margins">
    <div class="c-page-course__bg-container">
    <h2 class="c-page-course__title"><?php the_title(); ?></h2>
    <div class="c-page-course__desc"><?php the_content(); ?></div>
    <?php if($video) { ?>
    <div class="c-page-course__video">
      <video controls src="<?php echo $video; ?>"></video>
    </div>
    <?php } else { ?>
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <?php } ?>
    </div>
  </div>
</section>

<?php get_footer(); ?>