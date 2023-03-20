<?php get_header(); ?>

<<<<<<< HEAD
<!-- <iframe src="https://app.acuityscheduling.com/schedule.php?owner=19201786&appointmentType=category:HENNA" title="Schedule Appointment" width="100%" height="800" frameBorder="0"></iframe><script src="https://embed.acuityscheduling.com/js/embed.js" type="text/javascript"></script> -->

<section class="c-homepage-slider">
<?php if( have_rows('homepage_slider') ): ?>

    <ul class="c-homepage-slider__slides">
    <?php while( have_rows('homepage_slider') ) : the_row();

        $image = get_sub_field('image');
        $title = get_sub_field('title');
        $link  = get_sub_field('link'); 
    ?>
       
        <li class="c-homepage-slider__slide">
            <figure class="c-homepage-slider__image">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
            </figure>
            <div class="c-homepage-slider__text">
            <h1 class="c-homepage-slider__title"><?php echo $title; ?></h1>
            <a class="c-homepage-slider__link" href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a>
            </div>
        </li>    

    <?php // End loop.
    endwhile; ?>
    </ul>
<?php // No value.
else :
    // Do something...
endif; ?>
</section>

<section class="c-homepage-featured-services gutenberg-styles">
    <div class="c-homepage-featured-services__inner-content container-margins">
        <div class="c-homepage-featured-services__description">
            <?php $featServicesTitle = get_field('featured_services_title');
                $featServicesDesc = get_field('featured_services_description');
                $servicesCTA = get_field('services_link');  
            ?>

            <h2 class="c-homepage-featured-services__title"><?php echo $featServicesTitle; ?></h2>
            <p class="c-homepage-featured-services__desc"><?php echo $featServicesDesc; ?></p>
            <a class="c-homepage-featured-services__link" href="<?php echo $servicesCTA['url']; ?>"><?php echo $servicesCTA['title']; ?></a>

        </div> <!-- description -->

        <div class="c-homepage-featured-services__block-section">
        <?php $featured_services = get_field('featured_services');
            if( $featured_services ): ?>
        <ul class="c-homepage-featured-services__services">
        <?php foreach( $featured_services as $service ): 
            $title = get_the_title($service->ID);
            $link = get_permalink( $service->ID );
            $image = get_the_post_thumbnail_url( $service->ID );
            $desc = get_field('service_description', $service->ID)
            ?>
            <li class="c-homepage-featured-services__service">
                <a href="<?php echo $link; ?>">
                <figure class="c-homepage-featured-services__service-img">
                    <img src="<?php echo $image; ?>" alt="The Brow Beast Service">
                </figure>
                <a class="c-homepage-featured-services__service-cta" href="<?php echo $link; ?>"><?php echo $title; ?></a>
                <p class="c-homepage-featured-services__service-desc"><?php echo $desc; ?></p>
                </a>
            </li>
        <?php endforeach; ?>
        </ul>
        <?php 
        wp_reset_postdata(); ?>
    <?php endif; ?>
        </div> <!-- Block Section -->

    </div> <!-- Inner Content -->
</section>

<section class="c-homepage-testimonials">
    <div class="c-homepage-testimonials-content container-margins">
        <h2 class="c-homepage-testimonials__title">Testimonials</h2>
    </div>
</section>



=======
>>>>>>> dc6dea2c9f01025355a14ae096c92c56b27c0123
<?php get_footer(); ?>