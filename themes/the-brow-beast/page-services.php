<?php get_header(); ?>

<section class="c-page-services container-margins">
  <h2 class="c-page-services__title"><?php the_title(); ?></h2>
  <?php $args = array(
    'post_type' => 'services',
    'posts_per_page' => -1
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
  <ul class="c-page-services__all-services">
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); 
      $cat = get_the_category();
      $catName = $cat[0]->cat_name;
      // $catLink = get_category_link($cat[0]->cat_ID);
      $thumbnail_id = get_post_thumbnail_id( $post->ID );
      $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
      $serviceDuration = get_field('service_duration_&_price', $post->ID);
      $serivceDesc = get_field('service_description', $post->ID);
      $serviceMoreInfo = get_field('service_more_info', $post->ID);
    ?>
        <li class="c-page-services__service">
          <div class="c-page-services__brown-top">
            <figure class="c-page-services__featured-img">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo $alt; ?>"/>
            </figure>
          </div>
          <div class="c-page-services__white-bottom">
            <div class="c-page-services__service-meta">
            <p class="c-page-services__service-cat" class="c-page-services__cat"><?php echo $catName; ?></p>
            <?php if($serviceMoreInfo) { ?>
            <a class="c-page-services__more-info">More Info</a>
            <?php } ?>
            <?php if($serviceMoreInfo) { ?>
            <div class="c-page-services__more-info-text hide-popup">
              <?php echo $serviceMoreInfo; ?>
              <img class="c-page-services__more-info-close" src="<?php echo get_template_directory_uri(); ?>/img/close.svg" alt="Close Icon">
            </div>
            <?php } ?>
            </div>
          <h2 class="c-page-services__service-title"><?php the_title(); ?></h2>
          <p class="c-page-services__service-duration"><?php echo $serviceDuration; ?></p>
          <p class="c-page-services__service-desc"><?php echo $serivceDesc; ?></p>
          <div class="c-page-services__book-now-container">
          <a class="c-page-services__book-now" href="<?php echo site_url() . '/book-now'; ?>">Book</a>
          </div>
          </div>
        </li>

    <?php endwhile; ?>

    <?php wp_reset_postdata(); ?>

<?php endif; ?>
  </ul>
</section>

<?php get_footer(); ?>