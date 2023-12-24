<?php

$landing_settings = get_field('_landing_page_settings', get_the_ID());
$form_settings    = $landing_settings['_form'];
$title            = $form_settings['_title'];
$desc             = $form_settings['_desc'];
$form_shortcode   = $form_settings['_form_shortcode'];
$background       = wp_get_attachment_image_url($form_settings['_background'], 'full');

?>

<section class="subscribe-wrapper" style="background-image: url(<?= $background ?>)">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-5">
				<h2 class="section-title"><?= $title ?></h2>
				<p class="section-desc"><?= $desc ?></p>
			</div>
			<div class="col-lg-7">
				<div class="form-wrapper">
					<?= do_shortcode($form_shortcode) ?>
				</div>
			</div>
		</div>
	</div>
</section>
