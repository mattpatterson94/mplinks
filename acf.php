<?php

add_filter('acf/settings/path', 'my_acf_settings_path');

function my_acf_settings_path( $path ) {
    $path = plugin_dir_path( __FILE__ ) . '/acf/';
    return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');

function my_acf_settings_dir( $dir ) {
  $dir = plugin_dir_url( __FILE__ ) . 'acf/';
  return $dir;
}

// 3. Hide ACF field group menu item
// add_filter('acf/settings/show_admin', '__return_false');

// 4. Include ACF
include_once( plugin_dir_path( __FILE__ ) . '/acf/acf.php' );
