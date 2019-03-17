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
		<main id="main" class="site-main content with-fixed-catalog">

			<?php

/* Start the Loop */
while (have_posts()):
    the_post();

    get_template_part('template-parts/content/content', 'single');

    if (is_singular('attachment')) {
        // Parent post navigation.
        the_post_navigation(
            array(
                /* translators: %s: parent post link */
                'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentynineteen'), '%title'),
            )
        );
    } elseif (is_singular('post')) {
    // Previous/next post navigation.
    the_post_navigation(
        array(
            'next_text' => '<span class="meta-nav" aria-hidden="true">' . __('Next Post', 'twentynineteen') . '</span> ' .
            '<span class="screen-reader-text">' . __('Next post:', 'twentynineteen') . '</span> <br/>' .
            '<span class="post-title">%title</span>',
            'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __('Previous Post', 'twentynineteen') . '</span> ' .
            '<span class="screen-reader-text">' . __('Previous post:', 'twentynineteen') . '</span> <br/>' .
            '<span class="post-title">%title</span>',
        )
    );
}

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
<div class="catalog__info catalog__info--reverse"  role="button" tabindex="0"><span>Table of Contents</span></div>
	<div class="catalog__card">
		<div class="catalog__logoContainer">
		<img class="catalog__logo white" alt="Reality Logo" src="https://itp.nyu.edu/adjacent/issue-5/wp-content/uploads/sites/10/2019/03/reality.svg">
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
	<button class="catalog__closeButton">
		<svg viewbox="0 0 40 40">
    <path class="catalog__path catalog__path--reverse" d="M 10,10 L 30,30 M 30,10 L 10,30" />
  </svg>
	</button>
	</div>
</div>
<?php
get_footer();
