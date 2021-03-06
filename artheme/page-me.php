<?php
/**
 * Template Name: About Us Page
 *
 * @package WordPress
 * @subpackage artheme
 * @since ARTheme 1.0
 */?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header bright-header">
	<div class="small-container">
		<h1>
			<?php the_title(); ?>
		</h1>

	</div>
</header>

<section class="section-content">


			<?php the_content(); ?>


</section>

<?php endwhile; endif; ?>

<?php get_footer();
