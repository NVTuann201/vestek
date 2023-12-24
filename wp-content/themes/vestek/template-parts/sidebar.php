<aside class="primary-sidebar">
	<div class="sidebar-widget search-widget card">
		<div class="card-body">
			<form action="/" method="get" class="dcg-search-form">
				<input type="text" name="s" aria-label="Tìm kiếm" placeholder="<?php _e('Tìm kiếm', 'nhuaphuvinh') ?>" value="<?php the_search_query(); ?>"/>
				<button type="submit"><?php _e('Tìm kiếm', 'nhuaphuvinh') ?></button>
			</form>
		</div>
	</div>
	<?php if (has_nav_menu('sidebar-menu')):
		$theme_locations = get_nav_menu_locations();
		$menu_obj = get_term($theme_locations['sidebar-menu'], 'nav_menu'); ?>
		<div class="sidebar-widget categories-widget card">
			<div class="card-header">
				<h3 class="card-title"><?= $menu_obj->name ?></h3>
			</div>
			<div class="card-body">
				<?php wp_nav_menu([
					'theme_location' => 'sidebar-menu',
				]); ?>
			</div>
		</div>
	<?php endif; ?>
</aside>
