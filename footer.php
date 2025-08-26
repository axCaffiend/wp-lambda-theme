<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADHD_at_Uni
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-divider">
			<?php echo load_inline_svg('\assets\brand\wave-divider-mobile.svg') ?>
		</div>
		<div class="site-info">
			<div class="footer-branding">
				<div class="footer-logo"><?php echo load_inline_svg('\assets\brand\flux-logo.svg') ?></div>
				<h1><?php bloginfo('name') ?></h1>
				<p class="lead-text"><?php bloginfo('description')?></p>
			</div>
			<div class="copyright">
				<p>&copy; 2025</p>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
