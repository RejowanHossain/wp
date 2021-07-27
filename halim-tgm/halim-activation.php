<?php

// halim activation with tgm
require_once get_template_directory().'/halim-tgm/class-tgm-plugin-activation.php';

function halim_activation(){
    $plugins = array(
        array(
            'name' => __( 'Advanced Custom Fields', 'halim' ),
            'slug' => 'advanced-custom-fields',
            'required' => true
        ),
        array(
            'name' => __( 'Codestar Framework', 'halim' ),
            'slug' => 'codestar-framework',
            'source'    => '/Codestar/codestar-framework/archive/refs/heads/master.zip',
            'required' => true
        ),
        array(
            'name' => __( 'Contact Form 7', 'halim' ),
            'slug' => 'contact-form-7',
            'required' => true
        ),
    );

    $config = array(
        'id' => 'halim_plugins_activation',
        'menu' => 'halim_plugins_activation',
        'parent_slug' => 'themes.php',
        'has_notices' => true,
    );

    tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'halim_activation' );