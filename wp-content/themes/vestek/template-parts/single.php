<section class="single-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-12">
				<?php if (have_posts()) : ?>

					<?php while (have_posts()) : ?>

						<?php the_post(); ?>

						<div class="entry-content">

							<?php the_content(); ?>

						</div>

					<?php endwhile; ?>

				<?php else : ?>

				<?php endif; ?>

			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">

				<?php get_template_part('template-parts/sidebar'); ?>

			</div>
		</div>
	</div>
</section>
