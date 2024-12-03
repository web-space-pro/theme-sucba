<?php
# Option Page in Admin Panel

# Add autosave path for acf-json fields
add_filter( 'acf/settings/save_json', 'theme_acf_json_save_point' );
function theme_acf_json_save_point( $path ) {
	$path = get_template_directory() . '/acf_sync';
	return $path;
}

# Add autoload path for acf-json fields
add_filter( 'acf/settings/load_json', 'theme_acf_json_load_point' );
function theme_acf_json_load_point( $paths ) {
	unset( $paths[0] );
	$paths[] = get_template_directory() . '/acf_sync';
	return $paths;
}
