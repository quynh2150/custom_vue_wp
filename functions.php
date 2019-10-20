<?php

// function enqueue_scripts()
// {
//   wp_enqueue_script('vue', 'https://cdn.jsdelivr.net/npm/vue@2.5.17/dist/vue.js', [], '2.5.17');
//   wp_enqueue_script(
//     'earthy_theme',
//     // get_stylesheet_directory_uri() . '/dist/build.js',
//     'http://localhost:8080/dist/build.js',
//     array(),
//     false,
//     true
//   );
// }
// add_action('wp_enqueue_scripts', 'enqueue_scripts');

// includes for the callbacks.
include_once(get_stylesheet_directory() . '/includes/enqueue-scripts.php');
include_once(get_stylesheet_directory() . '/includes/extend-api.php');

/* hooks and filters */
// enqueue-scripts.php.
add_action('wp_enqueue_scripts', 'enqueue_scripts');

// extend-api.php.
add_action('rest_api_init', 'extend_api_response');
