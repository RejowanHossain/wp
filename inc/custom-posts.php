<?php
function halim_custom_posts(){

    // Slider Custom Post
    register_post_type('sliders', array(
        'labels' => array(
            'name'              => __('Sliders', 'halim'),
            'singular_name'     => __('Slider', 'halim'),
            'add_new'           => __( 'Add New Slider', 'halim' ),
            'add_new_item'      => __( 'Add New Slider', 'halim' ),
            'featured_image'    => _x( 'Slider Image', 'halim' ),
            'edit_item'         => __( 'Edit Slider', 'halim' ),
            'search_items'      => __( 'Search Slider', 'halim' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
        'menu_icon' => 'dashicons-images-alt',
    ));

    // Services Custom Post
    register_post_type('services', array(
        'labels' => array(
            'name'              => __('Services', 'halim'),
            'singular_name'     => __('Service', 'halim'),
            'add_new'           => __( 'Add New Service', 'halim' ),
            'add_new_item'      => __( 'Add New Service', 'halim' ),
            'featured_image'    => _x( 'Service Image', 'halim' ),
            'edit_item'         => __( 'Edit Service', 'halim' ),
            'search_items'      => __( 'Search Service', 'halim' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'custom-fields'),
         'menu_icon' => 'dashicons-store',
    ));

   // Team Custom Post
    register_post_type('teams', array(
        'labels' => array(
            'name' => __('Teams', 'halim'),
            'singular_name' => __('Team', 'halim'),
            'add_new'           => __( 'Add New Team', 'halim' ),
            'add_new_item'      => __( 'Add New Team', 'halim' ),
            'featured_image'    => _x( 'Team Image', 'halim' ),
            'edit_item'         => __( 'Edit Team', 'halim' ),
            'search_items'      => __( 'Search Team', 'halim' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons- networking',
    ));

    // Testimonials Custom Post
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'halim'),
            'singular_name' => __('Testimonial', 'halim'),
            'add_new'           => __( 'Add New Testimonial', 'halim' ),
            'add_new_item'      => __( 'Add New Testimonial', 'halim' ),
            'featured_image'    => _x( 'Testimonial Image', 'halim' ),
            'edit_item'         => __( 'Edit Testimonial', 'halim' ),
            'search_items'      => __( 'Search Testimonial', 'halim' ),
        ),
        'public' => true,
        'supports' => array( 'title',  'thumbnail', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons-format-quote',
    ));

    // Gallery Custom Post
    register_post_type('gallery', array(
        'labels' => array(
            'name' => __('Galleries', 'halim'),
            'singular_name' => __('Gallery', 'halim'),
            'add_new'           => __( 'Add New Gallery', 'halim' ),
            'add_new_item'      => __( 'Add New Gallery', 'halim' ),
            'featured_image'    => _x( 'Gallery Image', 'halim' ),
            'edit_item'         => __( 'Edit Gallery', 'halim' ),
            'search_items'      => __( 'Search Gallery', 'halim' ),
        ),
        'public' => true,
        'supports' => array('title', 'custom-field', 'page-attributes'),
        'menu_icon' => 'dashicons-camera-alt',
    ));

    // Portfolio Custom Post
    register_post_type('portfolio', array(
        'labels' => array(
            'name' => __('Portfolios', 'halim'),
            'singular_name' => __('Portfolio', 'halim'),
            'add_new'           => __( 'Add New Portfolio', 'halim' ),
            'add_new_item'      => __( 'Add New Portfolio', 'halim' ),
            'featured_image'    => _x( 'Portfolio Image', 'halim' ),
            'edit_item'         => __( 'Edit Portfolio', 'halim' ),
            'search_items'      => __( 'Search Portfolio', 'halim' ),
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'custom-field', 'page-attributes'),
         'menu_icon' => 'dashicons-portfolio',
    ));

    // Portfolio Taxonomy

    register_taxonomy('portfolio-cat', 'portfolio',array(
        'labels' => array(
            'name' => __('Categories', 'halim'),
            'singular_name' => __('Category', 'halim'),
        ),
        'hierarchical' => true,
        'show_admin_column' => true
    ));

}
add_action('init', 'halim_custom_posts');