<?php /* Template Name: Contact Page */ ?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<header class="page-header bright-header">
	<div class="small-container">
		<h1 class="entry-title" >
			<?php the_title(); ?>
		</h1>
		<p>Hey there! This is your direct line to me. I’d love to hear from you!</p>
	</div>
</header>

<section class="section-content">
		<?php the_content(); ?>

</section>

<?php endwhile; endif; ?>

<?php get_footer();
