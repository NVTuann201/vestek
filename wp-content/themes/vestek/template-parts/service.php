<?php
// echo get_the_ID();
$landing_settings = get_field('_landing_page_settings', 2);
$service_settings = $landing_settings['_service'];
$title            = $service_settings['_title'];
$desc             = $service_settings['_desc'];
$img              = wp_get_attachment_image($service_settings['_img'], 'large');
$services         = $service_settings['_services'];
$background       = wp_get_attachment_image_url($service_settings['_background'], 'full');

?>

<section class="service-wrapper" style="background-image: url(<?= $background ?>)">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="content-wrapper">
					<h2 class="section-title"><?= $title ?></h2>
					<div class="section-desc">
						<?= wpautop($desc) ?>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="img-wrapper">
					<?= $img ?>
				</div>
			</div>
		</div>

		<?php if ($services): ?>
			<div class="services-wrapper">
				<div class="row">
					<?php foreach ($services as $service):
						$img = wp_get_attachment_image($service['_img'], 'medium'); ?>
						<div class="col-lg-3 col-md-6">
							<div class="service-item">
								<div class="img">
									<?= $img ?>
								</div>
								<h3 class="title"><?= $service['_title'] ?></h3>
								<p class="desc"><?= $service['_desc'] ?></p>
								<?php if ($service['_url'] != ''): ?>
									<a href="<?= $service['_url'] ?>" class="more-button"><?php _e('Xem thêm', 'nhuaphuvinh') ?></a>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>
