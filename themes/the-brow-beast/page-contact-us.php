<?php get_header(); 
    $headerTitle = get_field('contact_us_header_title');
    $headerDesc = get_field('contact_us_description');
?>

<section class="c-page-contact-us">
    <div class="container-margins">
        <div class="c-page-contact-us__meta-box">
            <h2 class="c-page-contact-us__title"><?php the_title(); ?></h2>
        </div>

        <div class="c-page-contact-us__content">
            <div class="c-page-contact-us__left-side-content">
                <h4 class="c-page-contact-us__header-title"><?php echo $headerTitle; ?></h4>
                <p class="c-page-contact-us__header-desc"><?php echo $headerDesc; ?></p>

                    <?php if( have_rows('social_media_items') ): ?>
                        <ul class="c-page-contact-us__social-media">
                    <?php while( have_rows('social_media_items') ) : the_row(); ?>
                        <?php $icon = get_sub_field('social_media_icon');
                              $link = get_sub_field('social_media_link'); 
                        ?>
                        <li class="c-page-contact-us__social-media-item">
                            <a target="_blank" href="<?php echo $link; ?>">
                            <img src="<?php echo $icon['url']; ?>" alt="<?php echo $icon['alt']; ?>">
                            </a>
                        </li>

                    <?php
                    endwhile; ?>
                    </ul>

                <?php
                else :
                endif; ?>
            </div>
            <div class="c-page-contact-us__right-side-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>