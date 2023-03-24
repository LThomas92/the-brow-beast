<?php get_header(); ?>

<section class="c-gallery">
    <div class="c-gallery__container">
    <?php $images = get_field('gallery_images'); 

        if( $images ): ?>
        <ul class="c-gallery__images grid">
            <?php foreach ($images as $image ): ?>
                <li class="c-gallery__image grid-item">
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                </li>
            <?php endforeach; ?>    
        </ul>
        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>