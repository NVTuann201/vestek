<?php

$landing_settings = get_field('_landing_page_settings', get_the_ID());
$about_settings   = $landing_settings['_about'];


?>

<section class="about-wrapper">
	<div class="container">
		<div class="row" style=" margin-bottom: 160px;">
			<div class="img-wrapper">
				<div class="img" style="background-image: url(<?= get_theme_file_uri('assets/images/about1.png') ?>)">
					<div class="year" style="background-image: url(<?= get_theme_file_uri('assets/images/svg1.svg') ?>); background-repeat: no-repeat">
						<div class="number">20</div>
						<div class="text">Năm kinh nghiệm</div>
					</div>
				</div>
			</div>
			<div class="content-wrapper">
				<div class="content">
					<div class="sub-title" style="background-image: url(<?= get_theme_file_uri('assets/images/about.png') ?>)">
						<div>Chúng tôi là ai</div>
					</div>
					<div class="title">Điện NLMT Vestek - Chúng tôi </br> Xây dựng một tương lai bền vững</div>
					<div class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem.</div>
					<div class="view">
						<a href="/san-pham">
							<div class="circle">
								<div class="btn">
									<svg width="32px" height="32px" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
										<path fill="#FFF" d="M17.707 9.293l-5-5a.999.999 0 10-1.414 1.414L14.586 9H3a1 1 0 100 2h11.586l-3.293 3.293a.999.999 0 101.414 1.414l5-5a.999.999 0 000-1.414z" fill="#5C5F62" />
									</svg>
								</div>
							</div>
						</a>
						<div class="px-2" style="place-self:center">Xem sản phẩm</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="content-wrapper">
				<div class="sub-title" style="background-image: url(<?= get_theme_file_uri('assets/images/service.png') ?>)">
					<div>Dịch vụ chúng tôi cung cấp</div>
				</div>
				<div class="title">Chúng tôi cung cấp những </br> Giải pháp hàng đầu.</div>
				<div class="about-service-wrapper">
					<div class="about-service-item">
						<div class="about-service-icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="55px" viewBox="0 0 2.2 2.2" enable-background="new 0 0 32 32" xml:space="preserve">
								<g>
									<path d="m1.556 0.699 -0.588 0.633a0.035 0.035 0 0 1 -0.05 0l-0.274 -0.296a0.034 0.034 0 1 0 -0.05 0.047l0.274 0.296a0.103 0.103 0 0 0 0.151 0l0.587 -0.633a0.034 0.034 0 1 0 -0.05 -0.047z" />
								</g>
							</svg>
						</div>
						<div class="about-service-content">
							<div class="about-service-title">Tư vấn lắp đặt hệ thống điện mặt trời áp mái</div>
							<div class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</div>
						</div>
					</div>
					<div class="about-service-item">
						<div class="about-service-icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="55px" viewBox="0 0 2.2 2.2" enable-background="new 0 0 32 32" xml:space="preserve">
								<g>
									<path d="m1.556 0.699 -0.588 0.633a0.035 0.035 0 0 1 -0.05 0l-0.274 -0.296a0.034 0.034 0 1 0 -0.05 0.047l0.274 0.296a0.103 0.103 0 0 0 0.151 0l0.587 -0.633a0.034 0.034 0 1 0 -0.05 -0.047z" />
								</g>
							</svg>
						</div>
						<div class="about-service-content">
							<div class="about-service-title">Tư vấn lắp đặt hệ thống điện mặt trời áp mái</div>
							<div class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</div>
						</div>
					</div>
					<div class="about-service-item">
						<div class="about-service-icon">
							<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="55px" height="55px" viewBox="0 0 2.2 2.2" enable-background="new 0 0 32 32" xml:space="preserve">
								<g>
									<path d="m1.556 0.699 -0.588 0.633a0.035 0.035 0 0 1 -0.05 0l-0.274 -0.296a0.034 0.034 0 1 0 -0.05 0.047l0.274 0.296a0.103 0.103 0 0 0 0.151 0l0.587 -0.633a0.034 0.034 0 1 0 -0.05 -0.047z" />
								</g>
							</svg>
						</div>
						<div class="about-service-content">
							<div class="about-service-title">Tư vấn lắp đặt hệ thống điện mặt trời áp mái</div>
							<div class="desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</div>
						</div>
					</div>
				</div>
			</div>
			<div class="img-wrapper">
				<div class="about-gallery" style="background-image: url(<?= get_theme_file_uri('assets/images/about-watermark.png') ?>)">
					<div class="about-gallery-wrapper row">
						<div class="left">
							<div style="background-color: #57B33E; padding: 25px" class="about-gallery-item content-item">
								<div style="text-align: end">
									<img width="100" height="100" src="<?= get_theme_file_uri('assets/images/solar-icon.svg') ?>" alt="">
								</div>
								<div>An toàn </br> tuyệt đối</div>
							</div>
							<div style="background-image: url(<?= get_theme_file_uri('assets/images/Rectangle3783.png') ?>)" class="about-gallery-item image-item"></div>
						</div>
						<div class="right">
							<div style="background-image: url(<?= get_theme_file_uri('assets/images/Rectangle3784.png') ?>)" class="about-gallery-item image-item"></div>
							<div style="background-color: #DF4828; padding: 25px" class="about-gallery-item content-item">
								<div style="text-align: end">
									<img width="100" height="100" src="<?= get_theme_file_uri('assets/images/earch-icon.svg') ?>" alt="">
								</div>
								<div>Bảo hành</br>dài lâu</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>