<?php get_header(); ?>

<section class="c-about-page container-margins">
  <div class="c-about-page__main-content">
    <figure class="c-about-page__img">
      <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    </figure>
    <div class="c-about-page__content">
      <h2 class="c-about-page__title"><?php the_title(); ?></h2>
      <div class="c-about-page__text"><?php echo get_the_content();?></div>
    </div>
  </div>
</section>


<?php get_footer(); ?>