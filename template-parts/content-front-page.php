<?php
/**
 * Template part for displaying Home page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADHD_at_Uni
 */

?>

<section class="home-hero">
	<h1 class="flux-name">Flux</h1>
	<p class="strapline">Find your wavelength</p>
	<p class="description">Info about ADHD for students</p>
</section>

<section class="page-intro text-center">
	<div class="lead_text"><?php the_field('home_intro')?></div>
	<div class="btn_base btn_lg">
		<span class="material-symbols-sharp">south</span>
		<span class="btn-label">Scroll down for an intro to ADHD</span>
		<span class="material-symbols-sharp">south</span>
	</div>
</section>

<blockquote class="adhd-intro-quote">
	<span>ADHD</span>
	<span>does not define you</span> 
	<span>it is a lens through which you experience the world we live in.</span>
	<cite>Dr Tony Lloyd, CEO of the ADHD Foundation Neurodiversity Charity.</cite>
</blockquote>

<!-- What is ADHD? -->
<section>
	<?php $adhd_intro = get_field('what_is_adhd')?>
	<?php echo $adhd_intro['intro'] ?>

	<section class="adhd-intro-inattention">
		<h3>Inattention</h3>
	</section>

	<section class="adhd-intro-hyperactivity-impulsivity">
		<h3>Hyperactivity & Impulsivity</h3>
	</section>

	<!-- What do these features actually mean? -->
	<section>
		<?php echo $adhd_intro['meaning'] ?>

		<div class="life-wave-animation">
			<?php echo $adhd_intro['meaning_wave_graphic'] ?>
		</div>
		
		<div class="challenges-strengths">
			<?php echo $adhd_intro['challenges_strengths'] ?>
		</div>
		<p>
			<?php echo $adhd_intro['outro'] ?>
		</p>

		<div>
			<p>It's all about finding your wavelength!</p>
		</div>
	</section>
</section>

<div class="cta-large">

</div>

<!-- Show GSAP tests if checked in WP Page editor -->
<?php $gsap_tests = get_field('gsap_tests'); ?>
<?php if ($gsap_tests['show_gsap_tests']): ?>
		<h2 class="my-element"><?php echo esc_html($gsap_tests['gsap-test'])?></h2>
		<h2 class="my-element-2"><?php echo esc_html($gsap_tests['gsap_scrolltrigger_test'])?></h2>
<?php endif?>
