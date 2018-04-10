<?php
function wpb_customizer_register($wp_customize)
{
    $wp_customize->add_section('showcase', array(
        'title'         => __('showcase','wpbootstrap'),
        'description'   => sprintf(__('Options for showcase','wpbootstrap')),
        'priority'      => 130
    ));

    //Image
    $wp_customize->add_setting('showcase_image', array(
        'default'   => get_template_directory_uri(  ).'/img/Beautiful-autumn-road-scenery.jpg',
        'type'      => 'theme_mod',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
        'label'     =>__('Showcase Image','wpbootstrap'),
        'section'   => 'showcase',
        'settings'  => 'showcase_image',
        'priority'  => 1,
    )));

    //Heading
    $wp_customize->add_setting('showcase_heading', array(
        'default'   => _x('Custom Wordpress Bootstrap Theme','wpbootstrap'),
        'type'      => 'theme_mod',
    ));

    $wp_customize->add_control('showcase_heading',array(
        'label'     =>__('Heading','wpbootstrap'),
        'section'   => 'showcase',
        'priority'  => 2,
    ));

    //Text
    $wp_customize->add_setting('showcase_text', array(
        'default'   => _x('This is my first Wordpress blog site.','wpbootstrap'),
        'type'      => 'theme_mod',
    ));

    $wp_customize->add_control('showcase_text',array(
        'label'     =>__('Text','wpbootstrap'),
        'section'   => 'showcase',
        'priority'  => 3,
    ));

    //Button URL
    $wp_customize->add_setting('btn_url', array(
        'default'   => _x('http://test.com','wpbootstrap'),
        'type'      => 'theme_mod',
    ));

    $wp_customize->add_control('btn_url',array(
        'label'     =>__('Button URL','wpbootstrap'),
        'section'   => 'showcase',
        'priority'  => 4,
    ));

    //Button Text
    $wp_customize->add_setting('btn_text', array(
        'default'   => _x('Read More','wpbootstrap'),
        'type'      => 'theme_mod',
    ));

    $wp_customize->add_control('btn_text',array(
        'label'     =>__('Button Text','wpbootstrap'),
        'section'   => 'showcase',
        'priority'  => 5,
    ));
}
add_action( 'customize_register', 'wpb_customizer_register');