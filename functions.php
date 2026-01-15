<?php
function kc_theme_assets() {
  wp_enqueue_style('kc-style', get_stylesheet_uri());

  wp_enqueue_script(
    'kc-script',
    get_template_directory_uri() . '/script.js',
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_scripts', 'kc_theme_assets');
