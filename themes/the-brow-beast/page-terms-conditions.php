<?php get_header(); ?>

<section class="c-terms-and-conditions">
        <h2 class="c-terms-and-conditions__title"><?php the_title(); ?></h2>
        <p class="c-terms-and-conditions__disclaimer"><?php echo get_field('header_text'); ?></p>

        <div class="c-terms-and-conditions__content">
        <?php if( have_rows('terms_&_conditions_list') ): ?>
        <ul class="c-terms-and-conditions__list-items">
        <?php while( have_rows('terms_&_conditions_list') ) : the_row(); ?>
        <?php $title = get_sub_field('title'); 
              $content = get_sub_field('content');
        ?>
        <li class="c-terms-and-conditions__list-item">
            <h2 key="<?php echo $title; ?>" class="c-terms-and-conditions__list-title"><?php echo $title; ?></h2>
            <div key="<?php echo $title;?>" class="c-terms-and-conditions__list-item-content"><?php echo $content; ?></div>
        </li>

    <?php // End loop.
    endwhile; ?>
    </ul>

<?php // No value.
else :
    // Do something...
endif; ?>
        </div>
</section>

<?php get_footer(); ?>