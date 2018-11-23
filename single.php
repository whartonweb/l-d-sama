<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

	<section id="primary" class="content-area col-sm-12 ">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post();

    the_title( '<h2 class="page-title">', '</h2>' );
			get_template_part( 'template-parts/content', get_post_format() );
			// If comments are open or we have at least one comment, load up the comment template.
            echo '</div>';
		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php

get_footer();
