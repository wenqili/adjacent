<!-- /*
 * Template Name: Issue 5 Landing Page
 */ -->

<?php get_header();?>




	<section>
		<div class="container">
		<?php
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=20' . '&paged=' . $paged);

while ($wp_query->have_posts()): $wp_query->the_post();?>
									
							<div class="c-article">
								<div class="c-article__card">
									<a href="<?php the_permalink();?>" title="Read more">
									<h3 class="c-article__title">
										<?php the_title();?>
									</h3>
			
										<?php if (get_field('author')): ?>
									<h4 class="c-article__author">By <?php the_field('author');?></h4>
										<?php endif;?>
								</div>
								<!-- <?php the_excerpt();?> -->
								<?php if (has_post_thumbnail()) {the_post_thumbnail('post-thumbnail', ['class' => 'c-article__thumbnail', 'title' => 'Feature image']);}?>
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

<?php get_footer();?>