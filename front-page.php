<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADHD_at_Uni
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section id="home-hero">
			<h1>Flux</h1>
			<p class="lead_large">Find your wavelength</p>
			<p class="lead_medium">Info about ADHD for students</p>
		</section>

		<section class="page-intro">
			<?php the_field('home_intro')?>
			<div class="cta_lg">
				<p>Scroll down to learn more about ADHD</p>
			</div>
		</section>

		<section>
			<?php the_field('what_is_adhd')?>
		</section>

		<!-- Show GSAP tests if checked in WP Page editor -->
		<?php $gsap_tests = get_field('gsap_tests'); ?>
		<?php if ($gsap_tests['show_gsap_tests']): ?>
				<h2 class="my-element"><?php echo esc_html($gsap_tests['gsap-test'])?></h2>
				<h2 class="my-element-2"><?php echo esc_html($gsap_tests['gsap_scrolltrigger_test'])?></h2>
		<?php endif?>

	</main><!-- #main -->

<?php
get_footer();
