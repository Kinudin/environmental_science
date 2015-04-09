<?php 
/*
Template Name: Test
*/ ?>

<!-- Home -->
<?php get_header(); ?>
<div id="hero">
<iframe class="intro-video"width="560" height="315" src="https://www.youtube.com/embed/74meITy_MMc?modestbranding=1?loop=1&controls=0&autoplay=1" frameborder="0" allowfullscreen></iframe>		<section>
</div>
	<main role="main">
<!-- section -->

			

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
		</section>
		<!-- /section -->

		<?php endwhile; ?>

		<?php endif; ?>


	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
