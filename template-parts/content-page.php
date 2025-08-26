<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADHD_at_Uni
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<section class="page-intro lead-text">
			<?php the_field('page_intro') ?>
		</section>
		<?php the_content();?>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
