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
                    <ul class="c-page-contact-us__social-media">
                        <li class="c-page-contact-us__sm-item">
                            <a href="">
                                <img src="" alt="">
                            </a>
                        </li>
                    </ul>
            </div>
            <div class="c-page-contact-us__right-side-content">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>