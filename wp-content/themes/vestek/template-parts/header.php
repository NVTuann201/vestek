<?php
?>

<div class="header-wrapper">
	<div class="header-top-bar">
		<div class="left">
			<div class="item">
				Công ty TNHH Thương Mại và Sản Xuất Thái Tuấn
			</div>
			<div class="item">
				Email: cskh@vestek.vn
			</div>
			<div class="item">
				Hotline: 0914 900 922
			</div>
		</div>
		<div class="right">
			<div class="item">
				Chính sách & Điều khoản
			</div>
			<div class="item">
				Hỗ trợ kĩ thuật
			</div>
			<div class="item">
				Hotline: 0914 900 922
			</div>
		</div>
	</div>

	<div class="header-main-wrapper">
		<div class="logo-wrapper">
			<?php tns_logo() ?>
		</div>
		<nav class="nav-wrapper">
			<?php if (has_nav_menu('primary-menu')) :
				wp_nav_menu([
					'theme_location'  => 'primary-menu',
					'container_class' => 'primary-menu',
					'container_id'    => 'primary-menu',
				]);
			endif; ?>
		</nav>
	</div>
</div>