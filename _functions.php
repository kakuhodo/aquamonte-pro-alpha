<?php
/**
 *	The Functions
 *
 *	@brand AquaMonte
 *	@edition AquqMonte Pro Alpha
 *	@author	JeanPierre
 */

/**
 * ============================
 *  CHECK THE REQUIREMENTS >>>
 * ============================
 */

/**
 *
 */
if (!class_exists('Pearlpuppy\CoCore\Awp\Abs_Theme')) {
    add_action('admin_notices', 'amRequirements');
}

/**
 *
 */
function amRequirements()
{
    echo '<div class="notice notice-error"><p>';
    _e('This theme requires <i>CoCore AWP</i>.');
    echo '</code></p></div>';
}

/**
 * ============================
 *  <<< END CHECK
 * ============================
 */

/**
 *
 */

/**
 * -----------------------------
 *	Constants
 * -----------------------------
 */

define('BRAND_NICE', 'aquamonte');

/**
 * -----------------------------
 *	Arguments
 * -----------------------------
 */

/**
 *
 */
$post_formats = array(
	'status',
	'quote',
	'gallery',
	'image',
	'video',
	'audio',
	'link',
	'aside',
	'chat',
);

/**
 *
 */
$logo_defaults = array(
	'height'               => 56,
	'width'                => 192,
	'flex-height'          => true,
	'flex-width'           => true,
	'header-text'          => array( 'site-title', 'site-description' ),
	'unlink-homepage-logo' => true, 
);

/**
 *
 */
$background_defaults = array(
	'default-color' => '696969',
	'default-image' => '',
	'default-repeat' => '',
	'default-position-x' => '',
//	'wp-head-callback'	   => 'aquamonte_custom_background_cb',
//	'admin-head-callback'	=> 'aquamonte_admin_head_cb',
//	'admin-preview-callback' => 'aquamonte_admin_preview_cb',
);

/**
 *
 */
$header_defaults = array(
	'default-image'				=> get_stylesheet_directory_uri() . '/assets/images/keyvis.jpg',
	'random-default'			=> false,
	'width'						=> 1440,
	'height'					=> 360,
	'flex-height'				=> true,
	'flex-width'				=> true,
	'default-text-color'		=> '',
	'header-text'				=> true,
	'uploads'					=> true,
	'wp-head-callback'			=> '',
	'admin-head-callback'		=> '',
	'admin-preview-callback'	=> '',
	'video'						=> true,
	'video-active-callback'		=> '',
);

/**
 *	This is the list of all items.
 */
$html5_args = array(
	'comment-list',
	'comment-form',
	'search-form',
	'gallery',
	'caption',
	'style',
	'script',
);

/**
 *
 */
$menu_positions = array(
	'header' => __('Header'),
	'footer' => __('Footer'),
);

/**
 * -----------------------------
 *	Supporting features
 *  https://developer.wordpress.org/reference/functions/add_theme_support/
 * -----------------------------
 */

#add_theme_support('admin-bar');
add_theme_support('automatic-feed-links');
add_theme_support('custom-background');
add_theme_support('custom-header', $header_defaults);
add_theme_support('custom-logo', $logo_defaults);
add_theme_support('customize-selective-refresh-widgets');
#add_theme_support('dark-editor-style');
add_theme_support('featured-content');
add_theme_support('html5', $html5_args);
add_theme_support('menus');
add_theme_support('post-formats', $post_formats);
add_theme_support('post-thumbnails');
add_theme_support('starter-content');
add_theme_support('title-tag');
add_theme_support('widgets');
add_theme_support('widgets-block-editor');

add_theme_support('align-wide');
add_theme_support('core-block-patterns');
add_theme_support('custom-line-height');
add_theme_support('custom-units');
add_theme_support('editor-styles');
add_theme_support('responsive-embeds');
add_theme_support('wp-block-styles');
#add_theme_support('custom-spacing');

/**
 *	Do not activate belows !!!
 *		These are causing /wp-includes/class-wp-theme-json.php error.
 */
#add_theme_support('disable-custom-colors');
#add_theme_support('disable-custom-font-sizes');
#add_theme_support('disable-custom-gradients');
#add_theme_support('editor-color-palette');
#add_theme_support('editor-gradient-presets');
#add_theme_support('editor-font-sizes');

#remove_theme_support('core-block-patterns');


/**
 * -----------------------------
 *	Hooks
 * -----------------------------
 */

/**
 *
 */
add_action('init', 'aquamonte_hook_init');
add_action('admin_head', 'aquamonte_hook_admin_head');
add_action('after_setup_theme', 'aquamonte_hook_aftersetup');
add_action('wp_enqueue_scripts', 'aquamonte_hook_queue');

/**
 * -----------------------------
 *	Hook Callbacks
 * -----------------------------
 */

/**
 *
 */
function aquamonte_hook_init() {
#	wp_register_style('linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
}

/**
 *
 */
function aquamonte_hook_admin_head() {
	echo '<script src="https://kit.fontawesome.com/158897db51.js" crossorigin="anonymous"></script>';
}

/**
 *
 */
function aquamonte_hook_aftersetup() {
    global $menu_positions;
    register_nav_menus($menu_positions);
	if (is_child_theme()) {
		add_editor_style(get_template_directory_uri() . '/editor-style.css');
	}
	add_editor_style('editor-style.css');
}

/**
 *
 */
function aquamonte_hook_queue() {
	wp_enqueue_style('dashicons');
	wp_enqueue_script('jquery');
	aquamonte_queue_assets();
	if (is_child_theme()) {
		aquamonte_queue_assets(get_stylesheet());
	}
#	wp_register_style('linearicons', 'https://cdn.linearicons.com/free/1.0.0/icon-font.min.css');
}

/**
 * -----------------------------
 *	Original Functions
 * -----------------------------
 */

/**
 *
 *
function brand_nice() {
	return strtolower($names[1]);
}

/**
 *
 *
function aquamonte_logo() {
	if (has_custom_logo()) {
		the_custom_logo();
	} else {
		$logo = aquamonte_image_file('logo', 2);
		if (!$logo) {
			return;
		}
		$file = aquamonte_image_file('logo', 1);
		$sizeinfo = getimagesize($logo);
		$format = '<img src="%s" %s alt="%s">';
		$vals = array(
			$logo,
			$sizeinfo[3],
			get_bloginfo('name') . ':ロゴ',
		);
		vprintf($format, $vals);
	}
}

/**
 *
 */
function aquamonte_nav_menu($slug) {
	$args = array(
		'menu' => $slug,
		'container' => 'nav',
		'container_id' => $slug,
	);
	wp_nav_menu($args);
}

/**
 *
 */
function aquamonte_image_file($file_nice, $mode) {
	return aquamonte_asset_file($file_nice, 'image', $mode);
}

/**
 *	@param	$mode	(int) 0: relative path, 1: full path, 2: uri
 */
function aquamonte_asset_file($file_nice, $type, $mode = 0, $gen = 1) {
	$exists = false;
	$gens = array(
		'template',
		'stylesheet',
	);
	$g = $gens[$gen];
	$func = "get_{$g}_directory";
	$types = array(
		'image' => array(
			'png',
			'gif',
			'jpg',
		),
		'style' => 'css',
		'script' => 'js',
	);
	$x10n = $types[$type];
	$path = "/assets/{$type}s/$file_nice.";
	$dir = get_stylesheet_directory();
	if (is_array($x10n)) {
		foreach ($x10n as $x) {
			$exists = file_exists($dir . $path . $x);
			if ($exists) {
				$path .= $x;
				break;
			}
		}
	} else {
		$exists = file_exists($dir . $path . $x10n);
		if ($exists) {
			$path .= $x10n;
		}
	}
	if (!$exists) {
		return false;
	}
	switch ($mode) {
		case 1: 
			$file = $func() . $path;
			break;
		case 2:
			$func .= '_uri';
			$file = $func() . $path;
			break;
		default:
			$file = $path;
	}
	return $file;
}

/**
 *
 */
function aquamonte_queue_assets($handle = null) {
	$origin = BRAND_NICE;
	$is_origin = true;
	$arg_keys = array(
		'handle',
		'src',
		'deps',
		'ver',
		'_plus',
	);
	$assets = array(
		'style' => array(
			'css',
			'all',
		),
		'script' => array(
			'js',
			true,
		),
	);
	$gens = array(
		'template',
		'stylesheet',
	);
	$deps = array();
	$func_pre = 'wp_enqueue_';
	$path_format = '/assets/%1$ss/%2$s.%3$s';
	$dir_func_format = 'get_%s_directory';
	if (!$handle) {
		$handle = $origin;
	} else {
		$deps[] = $origin;
        $is_origin = false;
	}
	if (strpos($handle, $origin . '-') === 0) {
		$handle = str_replace($origin . '-', '', $handle);
	}
	if ($is_origin && is_child_theme()) {
		$ver = wp_get_theme(get_template())->Version;
	} else {
		$ver = wp_get_theme()->Version;
	}
	$dir_func = sprintf($dir_func_format, $gens[(int) !$is_origin]);
	$uri_func = $dir_func . '_uri';
	foreach ($assets as $type => $props) {
		$qc_func = "wp_{$type}_is";
		foreach ($deps as $index => $dep) {
			if (!$qc_func($dep)) {
				unset($deps[$index]);
			}
		}
		$vals = array(
			$type,
			$handle,
			$props[0],
		);
		$_plus = $props[1];
		$path = vsprintf($path_format, $vals);
		$file = $dir_func() . $path;
		if (!file_exists($file)) {
			continue;
		}
		$src = $uri_func() . $path;
		$args = compact($arg_keys);
		$func = $func_pre . $type;
		call_user_func_array($func, array_values($args));
	}
}

/**
 * =============================================================================
 *
 * =============================================================================
 */

/*
Plugin Name: Quote Pattern Example Plugin
*/

/**
 *	Custom block-pattern sample
 *
register_block_pattern(
	'my-plugin/my-quote-pattern',
	array(
		'title'       => __( 'Quote with Avatar', 'my-plugin' ),
		'categories'  => array( 'text' ),
		'description' => _x( 'A big quote with an avatar".', 'Block pattern description', 'my-plugin' ),
		'content'     => '<!-- wp:group --><div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:separator {"className":"is-style-default"} --><hr class="wp-block-separator is-style-default"/><!-- /wp:separator --><!-- wp:image {"align":"center","id":553,"width":150,"height":150,"sizeSlug":"large","linkDestination":"none","className":"is-style-rounded"} --><div class="wp-block-image is-style-rounded"><figure class="aligncenter size-large is-resized"><img src="https://blockpatterndesigns.mystagingwebsite.com/wp-content/uploads/2021/02/StockSnap_HQR8BJFZID-1.jpg" alt="" class="wp-image-553" width="150" height="150"/></figure></div><!-- /wp:image --><!-- wp:quote {"align":"center","className":"is-style-large"} --><blockquote class="wp-block-quote has-text-align-center is-style-large"><p>"色は匂へど散りぬるを我が世誰ぞ常ならむ有為の奥山今日越えて浅き夢見し酔ひもせず"</p><cite>— Anna Wong, <em>Volunteer</em></cite></blockquote><!-- /wp:quote --><!-- wp:separator {"className":"is-style-default"} --><hr class="wp-block-separator is-style-default"/><!-- /wp:separator --></div></div><!-- /wp:group -->',
	)
);

/**
 * -----------------------------
 *
 * -----------------------------
 */

/**
 *
 */

//[EOF]*/
