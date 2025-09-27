<?php
// Load parent and child styles
function ds_style() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'ds_style');

// Debug: output something to confirm it's working
add_action('wp_head', function() {
    echo '<!-- Child theme functions.php is working -->';
});
