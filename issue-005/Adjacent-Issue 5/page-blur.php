<!-- /*
 * Template Name: Test Template
 */ -->

<?php get_header();?>




	<section>
		<div class="container with-fixed-catalog">
		<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=20' . '&paged=' . $paged);

while ($wp_query->have_posts()): $wp_query->the_post();?>

										<div class="c-ArticleCard">
											<div class="c-ArticleCard__card">
												<a href="<?php the_permalink();?>" title="Read more">
												<h3 class="c-ArticleCard__title">
													<?php the_title();?>
												</h3>

													<?php if (get_field('author')): ?>
												<p class="c-ArticleCard__author">By <?php the_field('author');?></p>
													<?php endif;?>
								</div>
								<!-- <?php the_excerpt();?> -->
								<?php if (has_post_thumbnail()) {the_post_thumbnail('post-thumbnail', ['class' => 'c-ArticleCard__thumbnail', 'title' => 'Feature image']);}?>
								</a>
							</div>

				<?php endwhile;?>




		<?php if ($paged > 1) {?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts');?></div>
			<div class="next"><?php previous_posts_link('Newer Posts &raquo;');?></div>
		</nav>

		<?php } else {?>

		<nav id="nav-posts">
			<div class="prev"><?php next_posts_link('&laquo; Previous Posts');?></div>
		</nav>

		<?php }?>

		<?php wp_reset_postdata();?>
		</div>
	</section>

<!-- catalog -->
<div class="catalog">
	<p class="catalog__info">Table of Content</p>

	<div class="catalog__card">
		<div class="catalog__logoContainer">
			<img class="catalog__logo" alt="Reality Logo" src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/reality.svg">
		</div>
		<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=20' . '&paged=' . $paged);

while ($wp_query->have_posts()): $wp_query->the_post();?>

					<div class="catalog__item"><h3 class="catalog__title">
						<a href="<?php the_permalink();?>" title="Read more"><?php the_title();?></a>
								</h3><?php if (get_field('author')): ?>
								<h4 class="c-ArticleCard__author">By <?php the_field('author');?></h4>
								<?php endif;?>
</div>

			<?php endwhile;?>

	</div>
</div>

<?php get_footer();?>