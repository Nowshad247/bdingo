<?php

function rpl_web_assets(){
    wp_enqueue_style("base-css",get_theme_file_uri()."/assets/css/base.css", null, "1.0.0", null );
    wp_enqueue_style("style-css",get_theme_file_uri()."/assets/css/style.css", null, "1.0.0", null );
    wp_enqueue_style("meganizr",get_theme_file_uri()."/assets/css/meganizr.css", null, "1.0.0", null );
    wp_enqueue_style("style_2-css",get_theme_file_uri()."/assets/css/style_2.css", null, "1.0.0", null );
    wp_enqueue_style("custom-style",get_theme_file_uri()."/assets/css/custom-style.css", null, time(), null );
    wp_enqueue_style("reponsiveSlides",get_theme_file_uri()."/assets/css/responsiveslides.css", null, "1.0.0", null );
    wp_enqueue_style("theme_style",get_stylesheet_uri(), null,time(), null );

    wp_enqueue_script("any-slider",get_theme_file_uri()."/assets/js/jquery.anyslider.js", array('jquery'), false , true);
    wp_enqueue_script("responsive-slides",get_theme_file_uri()."/assets/js/responsiveslides.min.js", array('jquery'), false , true);
    wp_enqueue_script("vtivker",get_theme_file_uri()."/assets/js/jquery.vticker.js", array('jquery'), false , true);
    wp_enqueue_script("domain_selector",get_theme_file_uri()."/assets/js/domain_selector.js", array('jquery'), false , true);
    wp_enqueue_script("utils",get_theme_file_uri()."/assets/js/utils.js", array('jquery'), false , true);
    wp_enqueue_script("yoxview",get_theme_file_uri()."/assets/js/yoxview/yoxview-init.js", array('jquery'), false , true);
    wp_enqueue_script("custom-js",get_theme_file_uri()."/assets/js/main.js", array('jquery'), time() , true);
}
add_action("wp_enqueue_scripts","rpl_web_assets");


function rpl_web_theme_setup(){
    load_theme_textdomain("rpl_web");
    add_theme_support( 'custom-logo');
    add_theme_support("title-tag");


    add_theme_support("post-thumbnails");
    add_theme_support('post-formats', array('aside', 'image', 'gallery'));
}
add_action("after_setup_theme","rpl_web_theme_setup");

function register_my_menu() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_my_menu' );

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

// ---------rpl_widgets-----------
function rpl_widgets()
{
    register_sidebar(array(
        'name'          => __('sidebar-1', 'rpl_web'),
        'id'            => 'sidebar-1',
        'description'   => __('right side bar', 'rpl_web'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action("widgets_init", "rpl_widgets");




// register custom post type 'my_custom_post_type'
add_action('init', 'create_my_post_type');
function create_my_post_type()
{
    register_post_type(
        'top_banner_slider',
        array(
            'labels' => array(
                'name' => __('Top banners'),
                'singular_name' => __('Top banner')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'post-formats', 'thumbnail')
        )
    );
}