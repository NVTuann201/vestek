<section class="page-title-wrapper" style="background-image: url(<?= get_theme_file_uri('assets/images/page-title-bg.png') ?>)">
	<div class="container">
		<div class="page-title-content">
			<h1 class="page-title">
				<?php
				if (is_home()):
					echo 'Bài viết';
				elseif (is_archive()):
					the_archive_title();
				elseif (is_search()):
					echo _e('Kết quả cho từ khoá: ', 'nhuaphuvinh') . get_search_query();
				else:
					the_title();
				endif;
				?>
			</h1>
		</div>
	</div>
</section>
