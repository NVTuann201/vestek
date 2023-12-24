<?php
/**
 * The landing page for our theme
 *
 * Template Name: Landing
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php

		get_template_part('template-parts/landing-title');
		get_template_part('template-parts/summary');
		get_template_part('template-parts/about');
		get_template_part('template-parts/project');
		get_template_part('template-parts/featured-product');
		get_template_part('template-parts/contact-form');
		get_template_part('template-parts/team');
		get_template_part('template-parts/news');
		get_template_part('template-parts/partner');

		?>

	</main><!-- #main -->

<?php
get_footer();
