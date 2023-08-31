<?php
function remove_admin_login_header()
{
    remove_action('wp_head', '_admin_bar_bump_cb');
}

add_action('get_header', 'remove_admin_login_header');

function script_enqueue()
{
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    wp_enqueue_style('customstyle', get_template_directory_uri() . '/style.css', false, NULL, 'all' );
    wp_enqueue_style('twstyle', get_template_directory_uri() . '/css/tw.css', false, NULL, 'all' );
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v6.4.0/css/all.css", false, NULL, 'all' );
    wp_enqueue_script("jcal-bio-expand", get_template_directory_uri() . "/js/bio-expand.js");
}

add_action('wp_enqueue_scripts', 'script_enqueue');

add_theme_support( 'post-thumbnails' );

add_post_type_support( 'page', 'excerpt' );

function add_jcal_blocks() {
    wp_enqueue_script( "jcal-testimonial-js", get_template_directory_uri() . "/build/blocks/jcal-testimonial/index.js", array("wp-blocks", "wp-element", "wp-block-editor", "wp-components"));
    wp_enqueue_script( "jcal-profile-js", get_template_directory_uri() . "/build/blocks/jcal-profile/index.js", array("wp-blocks", "wp-element", "wp-block-editor", "wp-components"));
    wp_enqueue_script( "jcal-header-js", get_template_directory_uri() . "/build/blocks/jcal-header/index.js", array("wp-blocks", "wp-element", "wp-block-editor", "wp-components"));
    wp_enqueue_script( "jcal-content-js", get_template_directory_uri() . "/build/blocks/jcal-content/index.js", array("wp-blocks", "wp-element", "wp-block-editor"));
    wp_enqueue_script( "jcal-audio-js", get_template_directory_uri() . "/build/blocks/jcal-audio/index.js", array("wp-blocks", "wp-element", "wp-block-editor"));
    // register_block_type(get_template_directory_uri() . "build/blocks/jcal-testimonial");

    // wp_register_script( 'jcal-testimonial-js', get_template_directory_uri() . '/build/blocks/jcal-testimonial/index.js', array( 'wp-blocks' ));

    // register_block_type( __DIR__ . "/build/blocks/jcal-testimonial", array(
    //     'editor_script' => 'jcal-testimonial-js'
    // ) );
}

add_action("init", "add_jcal_blocks");

add_action("enqueue_block_editor_assets", function() {
    wp_enqueue_style('twstyle', get_template_directory_uri() . '/css/tw.css', false, NULL, 'all' );
});

add_filter("excerpt_length", function() {return 20;}, 999);