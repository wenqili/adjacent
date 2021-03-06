<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main wrapper with-fixed-catalog">

			<?php

/* Start the Loop */
while (have_posts()):
    the_post();

    get_template_part('template-parts/content/content', 'page');

    // If comments are open or we have at least one comment, load up the comment template.
    if (comments_open() || get_comments_number()) {
        comments_template();
    }

endwhile; // End of the loop.
?>

		</main><!-- #main -->
	</section><!-- #primary -->

<!-- catalog -->
<div class="catalog catalog--reverse">
	<p class="catalog__info catalog__info--reverse">Table of Content</p>

	<div class="catalog__card">
		<div class="catalog__logoContainer">
		<img class="catalog__logo white" alt="Reality Logo" src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/reality.svg">
	</div>
		<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=20' . '&paged=' . $paged);

while ($wp_query->have_posts()): $wp_query->the_post();?>

						<div class="catalog__item catalog__item--reverse"><h3 class="catalog__title">
						<a href="<?php the_permalink();?>" title="Read more"><?php the_title();?></a>
						</h3><?php if (get_field('author')): ?>
						<h4 class="catalog__author">By <?php the_field('author');?></h4>
																<?php endif;?>
</div>

			<?php endwhile;?>

	</div>
</div>
<!-- end of catalog -->
<?php
get_footer();
