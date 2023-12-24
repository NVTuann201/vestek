<?php

$landing_settings = get_field('_landing_page_settings', get_the_ID());
$news_statistic   = $landing_settings['_statistic'];
$desc             = $news_statistic['_desc'];
$title            = $news_statistic['_title'];
$statistics       = $news_statistic['_statistics'];
$background       = wp_get_attachment_image_url($news_statistic['_background'], 'full');

$service_settings = $landing_settings['_service'];

?>

<section class="statistic-wrapper" style="background-image: url(<?= $background ?>)">
	<div class="container">
		<div class="section-heading">
			<p class="section-desc"><?= $desc ?></p>
			<h2 class="section-title"><?= $title ?></h2>
		</div>
		<?php if ($statistics): ?>
			<div class="statistic-slick-slider">
				<?php foreach ($statistics as $statistic): ?>
					<div class="statistic-item">
						<h4 class="text"><?= $statistic['_text'] ?></h4>
						<h5 class="number">
							<?= number_format($statistic['_number'], 0, '.', '.') ?>
						</h5>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
</section>

