<?php
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

add_theme_support('post-thumbnails');



/**
 * Logging console
 */
function console(){
  $args = json_encode(func_get_args());
  $log = func_num_args() > 1 ? 'log' : 'dir';
  echo "
  <script>console.$log($args)</script>";
}