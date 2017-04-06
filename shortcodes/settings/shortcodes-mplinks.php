<?php
function mplinks_format_link($link) {
  $display = "<div>";
  $display .= "<a href='". $link['url'] ."'";

  if($link['class']) {
    $display .= " class='".$link['class']."'";
  }

  $display .= ">";
  $display .= $link['title'];
  $display .= "</a>";
  $display .= "</div>";

  return $display;
}

//[mplinks header="true|false" class='mplinks__links']
function shortcode_mplinks($atts) {
  $args = shortcode_atts(
    array('header' => 'false', 'class' => 'mplinks__links'),
    $atts
  );

  $display = "<div class='" . $args['class'] . "'>";

  if($args['header'] == 'true') {
    $display .= get_field('mplinks_header', 'option');
  }

  $links = get_field('mplinks_links', 'option');
  foreach($links as $link) {
    $display .= mplinks_format_link($link);
  }

  $display .= "</div>";

  return $display;
}

function initialise_mplinks_shortcodes() {
  add_shortcode('mplinks', 'shortcode_mplinks');
}

add_action('init', 'initialise_mplinks_shortcodes');


