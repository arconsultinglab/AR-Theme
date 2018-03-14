
<?php get_header(); ?>
<!-- Hero -->

<main id="content" role="main">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<div id="post">
<?php the_content(); ?>
</div> <!-- .post -->




<?php get_footer(); ?>
