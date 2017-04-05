<?php /*

**************************************************************************

Plugin Name:  MPLinks
Description:  Allows user to add links and display them on a page. Mimics Linktree.
Version:      0.0.9
Author:       Matt Patterson
Author URI:   http://mattpatterson.xyz
Text Domain:  mp-links

**************************************************************************

Copyright (C) 2017 Matt Patterson

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

**************************************************************************/
require_once(plugin_dir_path( __FILE__ ) . 'acf.php');
require_once(plugin_dir_path( __FILE__ ) . 'acf/pro/acf-pro.php');
require_once(plugin_dir_path( __FILE__ ) . 'options/options.php');
require_once(plugin_dir_path( __FILE__ ) . 'shortcodes/shortcodes.php');

class MPLinks {
  public $menu_id;

  // Plugin initialization
  public function __construct() {
    add_action('wp_enqueue_scripts', 'register_mplinks_custom_css', 111);
  }
}

// Start up this plugin
add_action('init', 'MPLinks');

function MPLinks() {
  global $MPLinks;
  $MPLinks = new MPLinks();
}

function register_mplinks_custom_css() {
  wp_enqueue_style(
    'mplinks-custom-css',
    plugin_dir_path( __FILE__ ) . 'style.css'
  );

  $custom_css = get_field('mplinks_custom_css', 'option');

  if($custom_css) {
    wp_add_inline_style('mplinks-custom-css', $custom_css );
  }
}

?>
