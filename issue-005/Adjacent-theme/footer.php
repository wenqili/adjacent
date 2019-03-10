<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer footer with-fixed-catalog">
		<?php get_template_part('template-parts/footer/footer', 'widgets');?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo('name');?>
			<?php if (!empty($blog_info)): ?>
				<!-- <a class="site-name" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name');?></a>, -->
			<?php endif;?>
			<?php
if (function_exists('the_privacy_policy_link')) {
    the_privacy_policy_link('', '<span role="separator" aria-hidden="true"></span>');
}
?>
			<?php if (has_nav_menu('footer')): ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e('Footer Menu', 'twentynineteen');?>">
					<?php
wp_nav_menu(
    array(
        'theme_location' => 'footer',
        'menu_class' => 'footer-menu',
        'depth' => 1,
    )
);
?>
				</nav><!-- .footer-navigation -->
			<?php endif;?>
		</div><!-- .site-info -->



		 <div class="footer__info">
        <p>
            <?php echo sprintf(__('%1$s, published by <a href=https://itp.nyu.edu target=_blank>ITP & IMA</a>, Tisch School of the Arts, New York University.'), esc_html(get_bloginfo('name'))); ?>
        </p>
        <p>
            This work is licensed under a
            <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/" target=_blank>
                Creative Commons Attribution-ShareAlike 4.0 International License
            </a>.
        </p>
    </div>

    <div>
        <div class="footer__siteMapList">
            <a class="footer__link" href="#">Aim and Scope</a>
            <a class="footer__link" href="#">Editorial Board</a>
            <a class="footer__link" href="#">Instructions For Authors</a>
            <a class="footer__link" href="#">QC System</a>
            <a class="footer__link" href="#">Open Access Statement</a>
            <a class="footer__link" href="#">Plagiarism Policy</a>
            <a class="footer__link" href="#">ISSN</a>
        </div>
		</div>

	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer();?>




</body>
</html>

