<?php

$template_settings = get_field('_contact_template_settings', get_the_ID());
$form              = $template_settings['_form'];
$fanpage           = $template_settings['_fanpage'];
$map               = $template_settings['_map'];

?>

<section class="contact-wrapper">
	<div class="container">
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : ?>

				<?php the_post(); ?>

				<div class="entry-content">

					<?php the_content(); ?>

				</div>

			<?php endwhile; ?>

		<?php endif; ?>

		<div class="row">
			<div class="col-lg-6">
				<div class="form-wrapper">
					<h2 class="widget-title"><?= $form['_title'] ?></h2>
					<?= do_shortcode($form['_shortcode']) ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="fanpage-wrapper">
					<h2 class="widget-title"><?= $fanpage['_title'] ?></h2>
					<div class="fb-page" data-href="<?= $fanpage['_fanpage_url'] ?>" data-tabs="timeline" data-width="500" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
						<blockquote cite="<?= $fanpage['_fanpage_url'] ?>" class="fb-xfbml-parse-ignore">
							<a href="<?= $fanpage['_fanpage_url'] ?>">Facebook</a></blockquote>
					</div>
				</div>
			</div>
		</div>

		<div class="map-wrapper">
			<h2 class="widget-title"><?= $map['_title'] ?></h2>
			<div class="iframe-wrapper">
				<?= $map['_iframe'] ?>
			</div>
		</div>
	</div>
</section>
