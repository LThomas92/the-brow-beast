<?php get_header(); ?>

<section class="c-gallery">
    <div class="c-gallery__container">
    <?php $monImages = get_field('gallery_images');
    ?>
		<div style="margin-top: 60px; margin-bottom: 100px; "class="grid">
      <div class='gutter'></div>

<?php
//create sizes for images
$sizes = ['smallPercentage', 'mediumPercentage', 'largePercentage'];
foreach($monImages as $id ) {
$image = wp_get_attachment_image_src($id, 'large')[0];?>
<!-- randomly pick a size -->
	<div style="" class="grid-item <?php echo $sizes[rand(0, 2)];?>">
	 <img src="<?php echo $image; ?>" alt=""/>
</div> <!-- grid item -->

<?php } ?>

</div> <!-- masonry grid -->

    </div>
</section>

<?php get_footer(); ?>