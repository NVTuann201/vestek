<?php

$landing_settings = get_field('_landing_page_settings', get_the_ID());
$message_settings = $landing_settings['_message'];
$img              = wp_get_attachment_image($message_settings['_img'], 'lager');
$title            = $message_settings['_title'];
$content          = $message_settings['_content'];
$button           = $message_settings['_button'];

?>

<section class="message-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="img-wrapper">
					<?= $img ?>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="content-wrapper">
					<h2 class="section-title"><?= $title ?></h2>
					<div class="section-content">
						<?= wpautop($content) ?>
					</div>
					<?php if ($button['_label'] != ''): ?>
						<a href="<?= $button['_url'] ?>" class="more-button"><?= $button['_label'] ?></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
