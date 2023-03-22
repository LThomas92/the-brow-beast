<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package The_Brow_Beast
 */

get_header();
?>

	<main id="primary" class="site-main c-search-results">
		<div class="container-margins">

		<?php if ( have_posts() ) : ?>

			<header class="c-search-results__header">
			<div class="c-search-results__header-search-form">
				<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
				<label>
					<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search for something...', 'placeholder' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
				</label>
				<button type="submit" name="submit" value="submit">
					<img src="<?php echo get_template_directory_uri(); ?>/img/search.svg" alt="Search Icon">
				</button>
				</form>
			</div>
				<h1 class="c-search-results__title">
					<?php
					printf( esc_html__( 'Search Results for: %s', 'the-brow-beast' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->
			<ul class="c-search-results__list">
			<?php while ( have_posts() ) : the_post(); 
				$desc = get_field('service_description', get_the_ID());
				$cat = get_the_category();
			?>
				<li class="c-search-results__result">
					<figure class="c-search-results__image">
					<?php if(has_post_thumbnail()) { ?>
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
					<?php } else { ?>
						<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="The Brow Beast Placeholder Image">
					<?php } ?>
					</figure>
					<div class="c-search-results__main-content">
					<div class="c-search-results__content">
						<h3 class="c-search-results__content-title"><?php echo get_the_title(); ?></h3>
						<?php if( get_post_type() == 'services' ) { ?>
						<p class="c-search-results__desc"><?php echo $desc; ?></p>
						<?php } else { ?>
						<p class="c-search-results__desc"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
						<?php } ?>
					</div>
					<div class="c-search-results__cta-container">
						<?php if( get_post_type() == 'services' ) { ?>
						<a class="c-search-results__cta" href="<?php echo site_url() . '/book-now'; ?>">Book</a>
						<p class="c-search-results__cat"><?php echo $cat[0]->name;?></p>
						<?php } else { ?>
						<a href="<?php echo get_the_permalink(); ?>" class="c-search-results__cta">View</a>
						<?php } ?>
					</div>
					</div>
				</li>
			

				
				

			<?php endwhile; ?>
			</ul>
		<?php else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
	</main><!-- #main -->

<?php
get_footer();
