<?php
//font-awesome 
if ( ! function_exists( 'font_awesome_css' ) ) {
    function font_awesome_css() {
        $_url = get_template_directory_uri() . '/css/fontawesome-all.min.css';
        $url = apply_filters( 'font_awesome_css_url', $_url );
        wp_enqueue_style( 'font-awesome', $url, false );
    }
    font_awesome_css();
}

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

//Theme Support
function wpb_theme_setup(){
    //post images
    add_theme_support( 'post-thumbnails' );

    //Nav Menus
    register_nav_menus( array(
        'primary' => __('Primary Menu'),
    ) );
    
    //Post formats
    add_theme_support( 'post-formats',array('aside','gallery') );
}
add_action('after_setup_theme', 'wpb_theme_setup');

function set_excerpt_length(){
    return 45;
}
 add_filter( 'excerpt_length', 'set_excerpt_length');

//widget locations
function wpb_init_widgets($id){
    register_sidebar(array(
        'name' =>'Sidebar' , 
        'id' =>'sidebar' , 
        'before_widget' =>'<div class="sidebar-module">', 
        'after_widget' =>'</div>' , 
        'before_title' =>'<h4>' ,
        'after_title' =>'</h4>',
    ));

    register_sidebar(array(
        'name' =>'Box1' , 
        'id' =>'box1' , 
        'before_widget' =>'<div class="box">', 
        'after_widget' =>'</div>' , 
        'before_title' =>'<h3>' ,
        'after_title' =>'</h3>',
    ));
    
    register_sidebar(array(
        'name' =>'Box2' , 
        'id' =>'box2' , 
        'before_widget' =>'<div class="box">', 
        'after_widget' =>'</div>' , 
        'before_title' =>'<h3>' ,
        'after_title' =>'</h3>',
    ));

    register_sidebar(array(
        'name' =>'Box3' , 
        'id' =>'box3' , 
        'before_widget' =>'<div class="box">', 
        'after_widget' =>'</div>' , 
        'before_title' =>'<h3>' ,
        'after_title' =>'</h3>',
    ));
}

add_action( 'widgets_init', 'wpb_init_widgets');

//Customizer File
require_once get_template_directory(  ).'/inc/customizer.php';