<?php

function customThemeSupport()
{
    add_theme_support(
        'html5',
        array(
            'script', // Fix for: The "type" attribute is unnecessary for JavaScript resources.
            'style',  // Fix for: The "type" attribute for the "style" element is not needed and should be omitted.
        )
    );
}
add_action('after_setup_theme', 'customThemeSupport');


//DISABLE GUTENBERG
add_filter('use_block_editor_for_post_type', function ($enabled, $post_type) {
    return 'your_post_type' === $post_type ? false : $enabled;
}, 10, 2);
add_filter('use_block_editor_for_post', '__return_false');


//remove head
remove_action('wp_head', 'wp_resource_hints', 2, 99);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'robots');
remove_filter('wp_robots', 'wp_robots_max_image_preview_large');

/**
 * Fix self-closing link tags.
 */
function disable_self_closing_tags(): void
{
    ob_start(function ($input) {
        return str_replace('/>', '>', $input);
    });
}

add_action('wp_head', 'disable_self_closing_tags', 1);
