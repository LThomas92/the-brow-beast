<?php get_header(); ?>

<section class="c-page-hours-oo container-margins">
    <div class="c-page-hours-oo__main-content">
        <figure class="c-page-hours-oo__main-img">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </figure>

        <div class="c-page-hours-oo__hours-side">
            <h2 class="c-page-hours-oo__title"><?php echo the_title(); ?></h2>
<?php if( have_rows('hours_of_operations') ): ?>
    <ul class="c-page-hours-oo__hours-list">
    <?php while( have_rows('hours_of_operations') ) : the_row();
        $hours = get_sub_field('hours'); 
        $days  = get_sub_field('days');
    ?>
        <li class="c-page-hours-oo__times">
            <div class="c-page-hours-oo__days">
                <p><?php echo $days; ?></p>
            </div>
            <div class="c-page-hours-oo__hours">
                <p><?php echo $hours; ?></p>
            </div>
        </li>

    <?php // End loop.
    endwhile; ?>
    </ul>

<?php // No value.
else :
    // Do something...
endif; ?>
</div>

</div>
</section>

<?php get_footer(); ?>