<?php

if (!defined('_VERSION')):
	// Replace the version number of the theme on each release.
	define('_VERSION', '1.0.0');
endif;

if (!defined('_ASSETS')):
	// Replace the version number of the theme on each release.
	define('_ASSETS', get_theme_file_uri('assets') . '/');
endif;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function theme_setup(){

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/**
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support('title-tag');

	/**
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		[
			'primary-menu'   => esc_html__('Header', 'nhuaphuvinh'),
			'secondary-menu' => esc_html__('Footer', 'nhuaphuvinh'),
			'sidebar-menu'   => esc_html__('Sidebar', 'nhuaphuvinh'),
		]
	);

	/**
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		[
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		]
	);

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		[
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => TRUE,
			'flex-height' => TRUE,
		]
	);
}

add_action('after_setup_theme', 'theme_setup');

/**
 * Enqueue scripts and styles.
 */
function theme_scripts(){

	if (is_singular() && comments_open() && get_option('thread_comments')):
		wp_enqueue_script('comment-reply');
	endif;

	wp_enqueue_style('bootstrap', _ASSETS . 'lib/bootstrap/css/bootstrap.min.css', [], _VERSION);
	wp_enqueue_style('fontawesome', _ASSETS . 'lib/fontawesome/css/all.min.css', [], _VERSION);
	wp_enqueue_style('mmenu', _ASSETS . 'lib/mmenu/mmenu.css', [], _VERSION);
	wp_enqueue_style('slick', _ASSETS . 'lib/slick/slick.css', [], _VERSION);
	wp_enqueue_style('fancybox', _ASSETS . 'lib/fancybox/jquery.fancybox.css', [], _VERSION);
	wp_enqueue_style('theme-style', _ASSETS . 'css/style.css', [], _VERSION);

	wp_enqueue_script('bootstrap', _ASSETS . 'lib/bootstrap/js/bootstrap.bundle.min.js', ['jquery'],
		_VERSION, TRUE);
	wp_enqueue_script('mmenu', _ASSETS . 'lib/mmenu/mmenu.js', ['jquery'], _VERSION, TRUE);
	wp_enqueue_script('slick', _ASSETS . 'lib/slick/slick.js', ['jquery'], _VERSION, TRUE);
	wp_enqueue_script('fancybox', _ASSETS . 'lib/fancybox/jquery.fancybox.js', ['jquery'], _VERSION,
		TRUE);
	wp_enqueue_script('theme-script', _ASSETS . 'js/script.js', ['jquery'], _VERSION, TRUE);

}

add_action('wp_enqueue_scripts', 'theme_scripts');

/**
 * Register ACF option page
 */
function acf_option_page(){
	if (function_exists('acf_add_options_page')):

		$parent = acf_add_options_page([
			'page_title' => 'Cài đặt website',
			'menu_title' => 'Cài đặt website',
			'menu_slug'  => 'theme-general-settings',
			'capability' => 'edit_posts',
			'redirect'   => TRUE
		]);

		acf_add_options_page([
			'page_title'      => __('Cài đặt đầu trang', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt đầu trang', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-header-settings',
			'parent_slug'     => $parent['menu_slug'],
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);

		acf_add_options_sub_page([
			'page_title'      => __('Cài đặt cuối trang', 'tay-nam-solutions'),
			'menu_title'      => __('Cài đặt cuối trang', 'tay-nam-solutions'),
			'menu_slug'       => 'theme-footer-settings',
			'parent_slug'     => $parent['menu_slug'],
			'update_button'   => __('Cập nhật', 'tay-nam-solutions'),
			'updated_message' => __("Cập nhật thành công", 'tay-nam-solutions')
		]);

	endif;
}

add_action('acf/init', 'acf_option_page');

/**
 * Display custom logo
 */
function tns_logo(){ ?>

	<div class="title-area">
		<?php $wrap = is_front_page() ? 'h1' : 'p';

		if (has_custom_logo()):
			$custom_logo_id = get_theme_mod('custom_logo'); ?>

			<a href="<?= esc_url(home_url('/')); ?>" class="custom-logo-link" rel="home">
				<?= wp_get_attachment_image($custom_logo_id, 'full'); ?>
			</a>

			<?= sprintf("<{$wrap} %s>%s</{$wrap}>", 'class="site-title"',
			esc_attr(get_bloginfo('name'))) ?>

		<?php else: ?>

			<?= sprintf("<{$wrap} %s>", 'class="site-title"') ?>
			<a href="<?= esc_url(home_url('/')); ?>" title="<?= esc_attr(get_bloginfo('name')); ?>" rel="home"><?= esc_attr(get_bloginfo('name')); ?></a>
			<?= "</{$wrap}>" ?>

		<?php endif; ?>
		<p class="site-description"><?= esc_attr(get_bloginfo('description')); ?></p>
	</div>

<?php }

/**
 * pagination
 */
function tns_pagination($args = []){

	$defaults = [
		'items_wrap_class'  => '',
		'items_class'       => '',
		'item_active_class' => 'active',
		'links_class'       => '',
		'prev'              => 'Prev',
		'next'              => 'Next',
		'prev_label'        => 'Previous',
		'next_label'        => 'Next',
		'echo'              => TRUE
	];

	$args        = wp_parse_args($args, $defaults);
	$args        = (object) $args;
	$query       = $GLOBALS['wp_query'];
	$paged       = max(1, absint($query->get('paged')));
	$total_pages = max(1, absint($query->max_num_pages));

	if (1 == $total_pages):
		return;
	endif;

	$pages_to_show         = absint(5);
	$pages_to_show_minus_1 = $pages_to_show - 1;
	$half_page_start       = floor($pages_to_show_minus_1 / 2);
	$half_page_end         = ceil($pages_to_show_minus_1 / 2);
	$start_page            = $paged - $half_page_start;
	$pagination            = '';

	if ($start_page <= 0):
		$start_page = 1;
	endif;

	$end_page = $paged + $half_page_end;

	if (($end_page - $start_page) != $pages_to_show_minus_1):
		$end_page = $start_page + $pages_to_show_minus_1;
	endif;

	if ($end_page > $total_pages):
		$start_page = $total_pages - $pages_to_show_minus_1;
		$end_page   = $total_pages;
	endif;

	if ($start_page < 1):
		$start_page = 1;
	endif;

	$pagination .= '<ul class="' . $args->items_wrap_class . '">';

	// First
	if ($start_page >= 2 && $pages_to_show < $total_pages){
		//$pagination .= get_pagenum_link( 1 );
	}

	// Previous
	if ($paged > 1){
		$pagination .= '<li class="' . $args->items_class . '"><a class="' . $args->links_class . '" href="' . get_pagenum_link($paged - 1) . '" aria-label="' . $args->prev_label . '">' . $args->prev . '</a></li>';
	}

	foreach (range($start_page, $end_page) as $i){
		if ($i == $paged):
			$pagination .= '<li class="' . $args->items_class . ' ' . $args->item_active_class . '"><a class="' . $args->links_class . '" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
		else:
			$pagination .= '<li class="' . $args->items_class . '"><a class="' . $args->links_class . '" href="' . get_pagenum_link($i) . '">' . $i . '</a></li>';
		endif;
	}

	// Next
	if ($paged < $total_pages){
		$pagination .= '<li class="' . $args->items_class . '"><a class="' . $args->links_class . '" href="' . get_pagenum_link($paged + 1) . '" aria-label="' . $args->next_label . '">' . $args->next . '</a></li>';
	}

	// Last
	if ($end_page < $total_pages){
		//$pagination .= get_pagenum_link( $total_pages );
	}

	$pagination .= '</ul>';

	if ($args->echo){
		echo $pagination;

		return;
	}

	return $pagination;
}

add_action('wp_body_open', function (){ ?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0&appId=280957452882882&autoLogAppEvents=1" nonce="rcrEybgQ"></script>
<?php });
