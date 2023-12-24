<?php

$landing_settings = get_field('_landing_page_settings', get_the_ID());
$slider_settings  = $landing_settings['_slider'];
$title            = $slider_settings['_title'];
$subtitle         = $slider_settings['_subtitle'];
$desc             = $slider_settings['_desc'];
$button           = $slider_settings['_button'];
$slides           = $slider_settings['_slides'];

?>

<section class="hero-wrapper">
	<span class="scroll-btn">
			<span class="mouse"><span></span></span>
	</span>
	<div class="hero-content-wrapper">
		<div class="container">
			<div class="hero-content">
				<h3 class="hero-title"><?= $title ?></h3>
				<h2 class="hero-subtitle"><?= $subtitle ?></h2>
				<h2 class="hero-desc"><?= $desc ?></h2>
				<?php if ($button['_label'] != ''): ?>
					<a href="<?= $button['_url'] ?>" class="hero-button"><?= $button['_label'] ?></a>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<?php if ($slides): ?>
		<div class="primary-slider-wrapper">
			<?php foreach ($slides as $slide):
				$img = wp_get_attachment_image($slide['_img'], 'full'); ?>
				<div class="primary-slide-item">
					<div class="primary-slide-img-wrapper">
						<?= $img ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	<?php endif; ?>
</section>
