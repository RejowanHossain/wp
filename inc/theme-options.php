<?php

// Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

  //
  // Set a unique slug-like ID
  $prefix = 'halim_options';

  //
  // Create options
  CSF::createOptions( $prefix, array(
    'menu_title'      => __('Halim Options' , 'halim'),
    'menu_slug'       => 'halim-options',
    'framework_title' => 'Halim Options Panel'
  ) );

  //
  // Create header section
  CSF::createSection( $prefix, array(
    'id'     => 'header_options',
    'title'  => 'Header Options',
  ) );

    // Create header left options
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Left' , 'halim'),
    'fields' => array(
      array(
        'id'      => 'header_email',
        'type'    => 'text',
        'title'   => __('Email Address', 'halim'),
      ),
      array(
        'id'      => 'header_phone',
        'type'    => 'text',
        'title'   => __('Phone' , 'halim'),
      ),
    ),

  ) );

  //header right

    CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Icon' , 'halim'),
    'fields' => array(
      array(
        'id'      => 'header_icons',
        'title'   => 'Header Icons',
        'type'    => 'group',
        'button_title' => 'Add New Icons',
        'fields'  => array(
          array(
            'id'    => 'social-link',
            'type'  => 'text',
            'title' => __('Social Links', 'halim'),
          ),
          array(
            'id'    => 'social-icon',
            'type'  => 'icon',
            'title' => __('Social Icons', 'halim'),
          ),
        ),
      ),
    ),

  ) );

   // logo
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Logo' , 'halim'),
    'fields' => array(
      array(
        'id'      => 'header_logo',
        'title'   => __('Upload Logo', 'halim'),
        'type'    => 'media',
      ),
    ),

  ) );

 


  

}