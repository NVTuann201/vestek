<?php

$categories = get_categories();

?>

<section class="loop-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-xl-8 col-lg-8 col-md-12">
				<?php if (have_posts()) : ?>

					<div class="row">

						<?php while (have_posts()) : ?>

							<?php the_post(); ?>

							<div class="col-xl-4 col-lg-6 col-md-6">

								<?php get_template_part('template-parts/content/content'); ?>

							</div>

						<?php endwhile; ?>

					</div>

				<?php else : ?>

				<?php endif; ?>

				<div class="pagination">
					<?php tns_pagination([
						'items_wrap_class'  => 'page-wrap',
						'items_class'       => 'page-item',
						'item_active_class' => 'active',
						'links_class'       => '',
						'prev'              => 'Trước',
						'next'              => 'Sau',
						'prev_label'        => 'Previous',
						'next_label'        => 'Next',
						'echo'              => TRUE,
					])
					?>
				</div>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-12">

				<?php get_template_part('template-parts/sidebar'); ?>

			</div>
		</div>
	</div>
</section>
