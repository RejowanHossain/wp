<?php

function halim_setup_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array( 'post', 'sliders' , 'teams', 'testimonials' , 'portfolio' ) );
    load_theme_textdomain('halim', get_template_directory_uri().'/languages');
    add_theme_support( 'custom-logo' );

    register_nav_menus(array(
        'main-menu' => __('Primary Menu', 'halim')
    ));
}
add_action('after_setup_theme', 'halim_setup_theme');