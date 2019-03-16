<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head();?>
</head>

<body <?php body_class();?>>
<div id="page" class="site">





<header role="banner" class=
<?php if (is_front_page()) {
echo "'header-front-page header with-fixed-catalog'";
} else {
echo "'header-normal header with-fixed-catalog'";}?> >
  <div class="c-NavBar">
    <div class="c-NavBar__brand">
      <div class="c-NavBar__logoContainer">

		
		<a href="<?php echo esc_url(home_url('/index.php')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">

          <?php if (is_front_page()) {?>
          <img class="c-NavBar__brandLogo" alt="Adjacent Logo" src="https://itp.nyu.edu/adjacent/issue-5/wp-content/uploads/sites/10/2019/03/Adjacent_logo_red.png">
          <?php } else {?>
          <img class="c-NavBar__brandLogo--small" alt="Adjacent Logo" src="https://itp.nyu.edu/adjacent/issue-5/wp-content/uploads/sites/10/2019/03/Adjacent_logo_red.png">
    			<?php }?>
        </a>
			</div> <!--End of logoContainer -->

<?php if (is_front_page()) {
    $description_class = "c-NavBar__issueLogo loader c-NavBar__issueLogo--big";
} else {
    $description_class = "c-NavBar__issueLogo c-NavBar__issueLogo--small";
}?>

			<div class="<?php echo $description_class; ?>" >
      	<a href="https://itp.nyu.edu/adjacent/issue-4/index.php">
        	<img class="c-NavBar__issueLogoImage" alt="Reality Issue Logo" src="https://itp.nyu.edu/adjacent/issue-5/wp-content/uploads/sites/10/2019/03/reality.svg">
      	</a>
			</div> <!--End of issueLogo -->

		</div> <!--End of brand -->

		<div class="c-NavBar__toggle">
				<label class="c-ToggleMenu" for="c-ToggleMenu__toggle"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img" focusable="false"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
				</label>
				<input type="checkbox" class="c-ToggleMenu__toggle" id="c-ToggleMenu__toggle" />

			<div class="c-ToggleMenu__overlay">
				<div class="c-ToggleMenu__logoContainer">
					<img class="catalog__logo catalog__logo--small" alt="Reality Logo" src="https://itp.nyu.edu/adjacent/issue-5/wp-content/uploads/sites/10/2019/03/reality.svg">
				</div>
				<div class="c-ToggleMenu__dropDown">
					<div class="c-DropDownToggle">
						<label class="c-DropDownToggle__info"
						for="previous-issue" role="button" aria-haspopup="true" aria-expanded="false">
							previous issues
						</label>
						<input type="checkbox" id="previous-issue" />

						<div class="c-DropDownToggle__list" id="previous-issue-list" role="button">
							<a class="c-DropDownToggle__item" href="https://itp.nyu.edu/adjacent/issue-1/">issue 1</a>
							<a class="c-DropDownToggle__item" href="https://itp.nyu.edu/adjacent/issue-2/">issue 2</a>
							<a class="c-DropDownToggle__item" href="https://itp.nyu.edu/adjacent/issue-3/">issue 3</a>
							<a class="c-DropDownToggle__item" href="https://itp.nyu.edu/adjacent/issue-4/">issue 4</a>
						</div>
					</div>

					<div class="c-DropDownToggle">
						<label class="c-DropDownToggle__info"
						for="menu" role="button" aria-haspopup="true" aria-expanded="false">
							menu
						</label>
						<input type="checkbox" id="menu"/>

						<div class="c-DropDownToggle__list" id="menu-list" role="button">
							<a class="c-DropDownToggle__item" href="./submit/">submit</a>
							<a class="c-DropDownToggle__item" href="./about/">about</a>
						</div>
					</div>
				</div> <!-- End of ToggleMenu__dropDown -->





				<!-- catalog -->
<div class="c-ToggleMenu__catalog">
	<p class="catalog__info catalog__info--horizontal">Table of Contents</p>

	<div class="catalog__card catalog__card--show">
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
<?php wp_reset_query();?>
	</div>
</div><!--end of catalog-->





			</div><!--End of Overlay-->
		</div>

		<div class="c-NavBar__dropDown">
			<div class="c-DropDown">
					<a class="c-DropDown__info" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="previous-issues">
							previous issues
					</a>

					<div class="c-DropDown__list" aria-labelledby="previous-issues">
							<a class="c-DropDown__item" href="https://itp.nyu.edu/adjacent/issue-1/">issue 1</a>
							<a class="c-DropDown__item" href="https://itp.nyu.edu/adjacent/issue-2/">issue 2</a>
							<a class="c-DropDown__item" href="https://itp.nyu.edu/adjacent/issue-3/">issue 3</a>
							<a class="c-DropDown__item" href="https://itp.nyu.edu/adjacent/issue-4/">issue 4</a>
					</div>
			</div>

			<div class="c-DropDown">
					<a class="c-DropDown__info" href="#" role="button" aria-haspopup="true" aria-expanded="false" id="menu-dropdown">
							menu
					</a>

					<div class="c-DropDown__list" aria-labelledby="menu-dropdown">
							<a class="c-DropDown__item" href="./submit/">submit</a>
							<a class="c-DropDown__item" href="./about/">about</a>
					</div>
			</div>
		</div> <!-- End of navBar -->
	</div> <!-- End of NavBar -->
</header>



	<div id="content" class="site-content">
