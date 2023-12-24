<?php
/**
 * The landing page for our theme
 *
 * Template Name: Danh mục thành phẩm
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php

		get_template_part('template-parts/page-title');
		get_template_part('template-parts/catalog');

		?>

	</main><!-- #main -->

<?php
get_footer();
