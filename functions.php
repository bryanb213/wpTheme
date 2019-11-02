<!-- global functions -->
<?php
function uniFiles() {
    wp_enqueue_script('main-uni-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awseome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('uniMainStyles', get_stylesheet_uri(), NULL, microtime());
}
// before WP moves on run these functions
add_action('wp_enqueue_scripts', 'uniFiles');

function uniFeatures(){
    add_theme_support( 'title-tag' ); // So bookmark can have titles according to their pages
}

add_action('after_setup_theme', 'uniFeatures');
