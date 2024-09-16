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
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
});

add_filter("excerpt_length", function() {return 20;}, 999);

function jcal_customizer_setup($wp_customize) {
    $wp_customize->add_section('jcal-home', array(
        'title' => 'JCAL HOME page settings'
    ));
    $wp_customize->add_setting('jcal-home-1-1', array(
        'default' => 'JCal empowers California students to tell the stories of their communities',
    ));
    $wp_customize->add_control('jcal-home-1-1-control', array(
        'label' => 'First paragraph bold text',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-1-1',
    ));
    $wp_customize->add_setting('jcal-home-1-2', array(
        'default' => 'by immersing them in the state’s news ecosystem through an all-inclusive, free summer program.',
    ));
    $wp_customize->add_control('jcal-home-1-2-control', array(
        'label' => 'First paragraph unbold text',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-1-2',
    ));
    $wp_customize->add_setting('jcal-home-1-3', array(
        'default' => 'Water and Drought',
    ));
    $wp_customize->add_control('jcal-home-1-3-control', array(
        'label' => 'Program theme',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-1-3',
    ));
    $wp_customize->add_setting('jcal-home-1-4', array(
        'default' => '2023',
    ));
    $wp_customize->add_control('jcal-home-1-4-control', array(
        'label' => 'Program year',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-1-4',
    ));
    $wp_customize->add_setting('jcal-home-2-1', array(
        'default' => 'Veteran journalists from the Los Angeles Times, Bloomberg and CalMatters',
    ));
    $wp_customize->add_control('jcal-home-2-1-control', array(
        'label' => 'Second paragraph bold text',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-2-1',
    ));
    $wp_customize->add_setting('jcal-home-2-2', array(
        'default' => 'directly mentored JCal reporters for a five day camp at CalMatters’ Sacramento newsroom.'
    ));
    $wp_customize->add_control('jcal-home-2-2-control', array(
        'label' => 'Second paragraph unbold text',
        'type' => 'string',
        'section' => 'jcal-home',
        'settings' => 'jcal-home-2-2',
    ));
    $wp_customize->add_section('jcal-people', array(
        'title' => 'JCAL PEOPLE page settings'
    ));
    $wp_customize->add_setting('jcal-people-1', array(
        'default' => 'I really enjoyed the networking event. It made me realize that they are not people we as youth should be intimidated by– professional journalists want to support other youth and they are open to telling their story. I appreciated their encouragement, guidance, and openness.'
    ));
    $wp_customize->add_control('jcal-people-1-control', array(
        'label' => 'Testimonial text',
        'description' => 'Changes may not reflect in the preview',
        'type' => 'string',
        'section' => 'jcal-people',
        'settings' => 'jcal-people-1',
    ));
    $wp_customize->add_setting('jcal-people-2', array(
        'default' => 'Clarissa Wing'
    ));
    $wp_customize->add_control('jcal-people-2-control', array(
        'label' => 'Testimonial name',
        'description' => 'Changes may not reflect in the preview',
        'type' => 'string',
        'section' => 'jcal-people',
        'settings' => 'jcal-people-2',
    ));
    $wp_customize->add_setting('jcal-people-3', array(
        'default' => 'San Mateo County'
    ));
    $wp_customize->add_control('jcal-people-3-control', array(
        'label' => 'Testimonial county',
        'description' => 'Changes may not reflect in the preview',
        'type' => 'string',
        'section' => 'jcal-people',
        'settings' => 'jcal-people-3',
    ));
}

add_action('customize_register', 'jcal_customizer_setup');

add_theme_support('editor-styles');
add_editor_style('./css/editor.css');

function jcal_modify_main_query($query) {
    if ($query -> is_home() && $query->is_main_query()) {
        $cats = get_categories();
        $this_cat = current(array_filter($cats, function($e) {
            $cat_year = get_theme_mod("jcal-home-1-4", "2023");
            return substr($e->name,0,4) === $cat_year;
        }));
        if (!$this_cat) return;
        $query -> set("category__in", array($this_cat->term_id));
    }
}

add_action("pre_get_posts", "jcal_modify_main_query");

function compare_cats($a, $b) {
    $a_year = intval(substr($a->name, 0, 4));
    $b_year = intval(substr($b->name, 0, 4));
    return $b_year - $a_year;
}

function get_sorted_categories() {
    $categories = get_categories();

    usort($categories, "compare_cats");

    return $categories;
}