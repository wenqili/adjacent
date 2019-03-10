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





<header role="banner" class=<?php if (is_front_page()) {echo "'header-front-page header with-fixed-catalog'";} else {echo "'header-normal header with-fixed-catalog'";}?> >
  <div class="c-metaBar">
    <div class="c-metaBar__brand">
      <div class="c-metaBar__logoContainer">
        <a href="<?php echo esc_url(home_url('/index.php')); ?>" title="<?php echo esc_html(get_bloginfo('name')); ?>" rel="home">
          <?php if (is_front_page()) {?>
          <img class="c-metaBar__brandLogo" alt="Adjacent Logo" src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/ADJECT_RED.png">
          <?php } else {?>
          <img class="c-metaBar__brandLogo--Small" alt="Adjacent Logo" src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/ADJECT_RED.png">
    			<?php }?>
        </a>
			</div> <!--End of logoContainer -->

<?php if (is_front_page()) {
    $description_class = "c-metaBar__issueLogo loader c-metaBar__issueLogo--big";
} else {
    $description_class = "c-metaBar__issueLogo c-metaBar__issueLogo--small";
}?>

			<div class="<?php echo $description_class; ?>" >
      	<a href="https://itp.nyu.edu/adjacent/issue-4/index.php">
        	<img class="c-metaBar__issueLogoImage" src="http://localhost:8888/wordpress/wp-content/uploads/2019/03/sub.png"><?php echo $site_description; ?>
      	</a>
			</div> <!--End of issueLogo -->

		</div> <!--End of brand -->

		<div class="c-navBar">
			<div class="c-dropdown">
					<a class="c-dropdown__info" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							previous issues
					</a>

					<div class="c-dropdown__list" aria-labelledby="dropdownMenuLink">
							<a class="c-dropdown__item" href="https://itp.nyu.edu/adjacent/issue-1/">issue 1</a>
							<a class="c-dropdown__item" href="https://itp.nyu.edu/adjacent/issue-2/">issue 2</a>
							<a class="c-dropdown__item" href="https://itp.nyu.edu/adjacent/issue-3/">issue 3</a>
					</div>
			</div>

			<div class="c-dropdown">
					<a class="c-dropdown__info" href="#" role="button" aria-haspopup="true" aria-expanded="false">
							menu
					</a>

					<div class="c-dropdown__list" aria-labelledby="dropdownMenuLink">
							<a class="c-dropdown__item" href="https://itp.nyu.edu/adjacent/issue-4/submit/">submit</a>
							<a class="c-dropdown__item" href="https://itp.nyu.edu/adjacent/issue-4/about/">about</a>
					</div>
			</div>
		</div> <!-- End of navBar -->
	</div> <!-- End of metaBar -->
</header>



	<div id="content" class="site-content">
