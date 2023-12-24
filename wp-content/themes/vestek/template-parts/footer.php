<?php

$footer_settings = get_field('_theme_footer_settings', 'option');
$widget_1        = $footer_settings['_widget_1'];
$widget_2        = $footer_settings['_widget_2'];
$logo            = wp_get_attachment_image($widget_1['_logo'], 'large');
$contact_info    = $widget_1['_contact_info'];
$social          = $widget_2['_social'];
$form_settings   = $footer_settings['_form'];
$title           = $form_settings['_title'];
$desc            = $form_settings['_desc'];
$form_shortcode  = $form_settings['_form_shortcode'];
$background      = wp_get_attachment_image_url($form_settings['_background'], 'full');

?>

<div class="footer-wrapper" style="background-image: url(<?= $background ?>)">
	<div class="subscribe-wrapper">
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
	</div>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="footer-widget footer-widget-1">
					<div class="logo-wrapper">
						<?= $logo ?>
					</div>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="footer-widget footer-widget-2">
					<?php if ($contact_info): ?>
						<ul class="contact-info">
							<?php foreach ($contact_info as $item): ?>
								<li>
									<span class="icon"><?= $item['_icon'] ?></span>
									<?= $item['_text'] ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>
			</div>
			<div class="col-lg-2">
				<div class="footer-widget footer-widget-3">
					<?php if (has_nav_menu('secondary-menu')):
						$theme_locations = get_nav_menu_locations();
						$menu_obj        = get_term($theme_locations['secondary-menu'], 'nav_menu');
						echo '<h6 class="widget-title">' . $menu_name = $menu_obj->name . '</h6>';
						wp_nav_menu([
							'theme_location' => 'secondary-menu',
							'menu_class'     => 'footer-links'
						]);
					endif; ?>
				</div>
			</div>
			<div class="col-lg-3">
				<div class="footer-widget footer-widget-4">
					<h6 class="widget-title"><?= $widget_2['_title'] ?></h6>
					<?php if ($social): ?>
						<ul class="social-list">
							<?php foreach ($social as $item):
								$icon = wp_get_attachment_image($item['_icon']); ?>
								<li>
									<a href="<?= $item['_url'] ?>" target="_blank"><?= $icon ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<p class="copyright"><?= $widget_2['_copyright'] ?></p>
				</div>
			</div>
		</div>
	</div>
</div>
