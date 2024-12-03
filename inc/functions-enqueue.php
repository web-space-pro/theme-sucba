<?php
add_action('wp_enqueue_scripts', 'theme_scripts');
add_action('wp_enqueue_scripts', 'theme_styles');
add_filter('script_loader_tag', 'scripts_add_defer_or_async', 10, 2);


add_filter( 'style_loader_src',  'sdt_remove_ver_css_js', 9999, 2 );
add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999, 2 );


function theme_scripts()
{
	$ver = wp_get_theme()->get( 'Version' );

	//wp_enqueue_script( 'lazysizes', get_template_directory_uri() . '/assets/dist/lazysizes.js', array(), $ver, true );
	wp_enqueue_script( 'api-yandex', 'https://api-maps.yandex.ru/2.1/?load=package.standard,package.geoObjects&lang=ru-RU', array(), $ver, true);
	wp_enqueue_script( 'map-yandex', get_template_directory_uri() . '/map/yos.js', array(), $ver, true);
	wp_enqueue_script( 'app', get_template_directory_uri() . '/assets/dist/js/app.js', array(), $ver, true);

    wp_localize_script( 'app', 'app_vars', array(
		'ajaxUrl' => admin_url("admin-ajax.php")
	) );
}

function theme_styles()
{
	$ver = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('app', get_template_directory_uri() . '/assets/dist/css/app.css', array(), $ver, 'all');
	//wp_enqueue_style('fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', array(), $ver, 'all');

}

function sdt_remove_ver_css_js( $src, $handle )
{
	$handles_with_version = [ 'style' ]; // <-- Adjust to your needs!
	if ( strpos( $src, 'ver=' ) && ! in_array( $handle, $handles_with_version, true ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

/*
 * Defer or Async - Unload Files
*/
function scripts_add_defer_or_async($tag, $handle)
{
	if ( is_admin() ){
		return $tag;
	}

	$handles = [
		'app'
	];
	$handles_aysnc = [
//		'jquery',
		'lazysizes',
		'jquery-migrate',
	];

	foreach ($handles as $defer_script) {
		if ($defer_script === $handle) {
			return str_replace(' src', ' defer="defer" src', $tag);
		}
	}

	foreach ($handles_aysnc as $async_script) {
		if ($async_script === $handle) {
			return str_replace(' src', ' async src', $tag);
		}
	}

	return $tag;
}
