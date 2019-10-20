<?php

/**
 * Function to conditionally enqueue the Vue Single Page App based on the WordPress Custom Page Template.
 */
function enqueue_scripts()
{
    wp_register_script(
        'earthy_theme',
        // get_stylesheet_directory_uri() . '/earthy/dist/build.js',
        'http://localhost:8080/dist/build.js',
        array(),
        false,
        true
    );

    global $post;
    wp_localize_script(
        'earthy_theme',
        'wpData',
        array(
            'template_directory_uri' => get_stylesheet_directory_uri(),
            'rest_url' => untrailingslashit(esc_url_raw(rest_url())), // URL to the REST endpoint.
            'app_path' => $post->post_name, // page where the custom page template is loaded.
            'post_categories' => get_terms(array( // default post categories.
                'taxonomy' => 'category',
                'hide_empty' => true,
                'fields' => 'names',
            )),
        )
    );

    // enqueue the Vue app script with localized data.
    wp_enqueue_script('earthy_theme');
}
