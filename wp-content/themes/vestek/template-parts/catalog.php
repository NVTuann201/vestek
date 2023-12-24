<?php
$product_settings = get_field('_product_page_settings', get_the_ID());
$services         = $product_settings['_services'];

?>

<section class="service-wrapper" >
	<div class="container">
		<?php if ($services): ?>
			<div class="services-wrapper mt-0">
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
