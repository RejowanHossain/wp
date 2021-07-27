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
    'icon'   => 'fas fa-address-card',
  ) );

    // Create header left options
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Topbar Left' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
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
    'title'  => __('Topbar Right' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
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
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_logo',
        'title'   => __('Upload Logo', 'halim'),
        'type'    => 'media',
      ),
      array(
        'id'      => 'favicon',
        'title'   => __('Upload Favicon', 'halim'),
        'type'    => 'media',
      ),
    ),

  ) );
  
    // header color
  CSF::createSection( $prefix, array(
    'parent' => 'header_options',
    'title'  => __('Header Style Options', 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'header_background',
        'title'   => __('Header Background', 'halim'),
        'type'    => 'background',
        'output'  => array( '.header-top' )
      ),
      array(
        'id'      => 'header_typography',
        'title'   => __('Header Typography', 'halim'),
        'type'    => 'typography',
        'output'  => array( '.header-top', '.slide-table h2' )
      ),
      
    )
  ) );



    // Create about section
  CSF::createSection( $prefix, array(
    'id'     => 'about_options',
    'title'  => __('About Options', 'halim'),
    'icon'   => 'fas fa-address-card',
  ) );

  // about section title
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Section Title' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_sec_subtitle',
        'title'   => __( 'Subtitle', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_title',
        'title'   => __( 'Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_sec_description',
        'title'   => __( 'Description', 'halim' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );

  // about left content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About left content' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_content_title',
        'title'   => __( 'Content Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'abt_content_desc',
        'title'   => __( 'Content Description', 'halim' ),
        'type'    => 'textarea',
      ),
      array(
        'id'      => 'abt_content_btn',
        'title'   => __( 'Content Button Link', 'halim' ),
        'type'    => 'text',
      ),
      
    ),

  ) );

  // about right content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Right content' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'abt_right_features',
        'title'   => __( 'Content Title', 'halim' ),
        'type'    => 'group',
        'button_title' => __( 'Add New Feature', 'Halim' ),
        'fields'  => array( 
          array(
            'id'      => 'features_title',
            'title'   => __('About Features Title', 'halim'),
            'type'    => 'text',
          ),
          array(
            'id'      => 'features_icon',
            'title'   => __('About Features Icon', 'halim'),
            'type'    => 'icon',
          ),
          array(
            'id'      => 'features_desc',
            'title'   => __('About Description Title', 'halim'),
            'type'    => 'textarea',
          ),
        ),
      ),
      
    ),

  ) );


    // about accordion content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About info' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'            => 'abt_faq_list',
        'title'         => __( 'About FAQ Title', 'halim' ),
        'type'          => 'group',
        'button_title'  => 'Add new FAQ',
        'fields'        => array(
          array(
            'id'      => 'faq_title',
            'title'   => __( 'FAQ Title', 'halim' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'faq_desc',
            'title'   => __( 'FAQ Description', 'halim' ),
            'type'    => 'textarea',
          ),
        ),
      ),

      
    ),

  ) );


   // about skills content
  CSF::createSection( $prefix, array(
    'parent' => 'about_options',
    'title'  => __('About Skills' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'            => 'abt_skill_list',
        'title'         => __( 'About Skill Title', 'halim' ),
        'type'          => 'group',
        'button_title'  => 'Add new Skill',
        'fields'        => array(
          array(
            'id'      => 'skill_title',
            'title'   => __( 'Skill Title', 'halim' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'skill_number',
            'title'   => __( 'Skill Number', 'halim' ),
            'type'    => 'text',
          ),
        ),
      ),

      
    ),

  ) );

  
    // Create Service title
  CSF::createSection( $prefix, array(
    'id'     => 'service_options',
    'title'  => __('Service Options', 'halim'),
    'icon'   => 'fas fa-address-card',
  ) );

    // service section title
  CSF::createSection( $prefix, array(
    'parent' => 'service_options',
    'title'  => __('Service Section Title' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'service_sec_subtitle',
        'title'   => __( 'Subtitle', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'service_sec_title',
        'title'   => __( 'Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'service_sec_description',
        'title'   => __( 'Description', 'halim' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );



  // Create team title
  CSF::createSection( $prefix, array(
    'id'     => 'team_options',
    'title'  => __('Team Options', 'halim'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team section title
  CSF::createSection( $prefix, array(
    'parent' => 'team_options',
    'title'  => __('Team Section Title' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'team_sec_subtitle',
        'title'   => __( 'Subtitle', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'team_sec_title',
        'title'   => __( 'Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'team_sec_description',
        'title'   => __( 'Description', 'halim' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );


    // Create testimonial title
  CSF::createSection( $prefix, array(
    'id'     => 'testimonial_options',
    'title'  => __('Testimonial Options', 'halim'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team testimonial title
  CSF::createSection( $prefix, array(
    'parent' => 'testimonial_options',
    'title'  => __('Testimonial Section Title' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'testimonial_sec_subtitle',
        'title'   => __( 'Subtitle', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'testimonial_sec_title',
        'title'   => __( 'Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'testimonial_sec_description',
        'title'   => __( 'Description', 'halim' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );


  // Create news title
  CSF::createSection( $prefix, array(
    'id'     => 'news_options',
    'title'  => __('News Options', 'halim'),
    'icon'   => 'fas fa-address-card',
  ) );

    // team news title
  CSF::createSection( $prefix, array(
    'parent' => 'news_options',
    'title'  => __('News Section Title' , 'halim'),
    'icon'   => 'fas fa-arrow-right',
    'fields' => array(
      array(
        'id'      => 'news_sec_subtitle',
        'title'   => __( 'Subtitle', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'news_sec_title',
        'title'   => __( 'Title', 'halim' ),
        'type'    => 'text',
      ),
      array(
        'id'      => 'news_sec_description',
        'title'   => __( 'Description', 'halim' ),
        'type'    => 'textarea',
      ),
      
    ),

  ) );


  // Create counter options
  CSF::createSection( $prefix, array(
    'id' => 'counter_options',
    'title'  => __('Counter Options' , 'halim'),
     'icon'   => 'fas fa-address-card',
    'fields' => array(
      array(
        'id'      => 'counter_lists',
        'title'   => __( 'Counter List', 'halim' ),
        'type'    => 'group',
        'button_title' => 'Add New Counter',
        'fields' => array(
          array(
            'id'      => 'counter_icon',
            'title'   => __( 'Counter Icon', 'halim' ),
            'type'    => 'icon',
          ),
          array(
            'id'      => 'counter_number',
            'title'   => __( 'Counter Number', 'halim' ),
            'type'    => 'number',
          ),
          array(
            'id'      => 'counter_title',
            'title'   => __( 'Counter Title', 'halim' ),
            'type'    => 'text',
          ),
        ),

      ),
      
    ),

  ) );


  
  // CTA options
  CSF::createSection( $prefix, array(
    'id' => 'cta_options',
    'title'  => __('CTA Options' , 'halim'),
    'icon'   => 'fas fa-address-card',
    'fields' => array(
        array(
          'id' => 'cta_switch',
          'type' => 'switcher',
          'title'   => __( 'Show CTA?', 'halim' ),
          'default' => true,
        ),
        array(
          'id'      => 'cta_title',
          'title'   => __( 'CTA Title', 'halim' ),
          'type'    => 'text',
          'default' => __( 'Best Solution For Your Business', 'halim' ),
          'dependency' => array( 'cta_switch', '==', 'true' ),
        ),
        array(
          'id'      => 'cta_subtitle',
          'title'   => __( 'CTA Subtitle', 'halim' ),
          'type'    => 'textarea',
          'default' => __( 'The Can Be Used On Larger Scale Projectss As Well As Small Scale Projectss', 'halim' ),
          'dependency' => array( 'cta_switch', '==', 'true' ),
        ),
        array(
          'id'      => 'cta_btn_text',
          'title'   => __( 'CTA Button Text', 'halim' ),
          'type'    => 'text',
          'default' => __( 'Contact', 'halim' ),
          'dependency' => array( 'cta_switch', '==', 'true' ),
        ),
        array(
          'id'      => 'cta_btn_url',
          'title'   => __( 'CTA Button URL', 'halim' ),
          'type'    => 'text',
          'default' => 'https://google.com',
          'dependency' => array( 'cta_switch', '==', 'true' ),
        ),
      ),

  ) );


  // contact options
  CSF::createSection( $prefix, array(
    'id' => 'contact_options',
    'title'  => __( 'Contact Options' , 'halim'),
    'icon'   => 'fas fa-address-card',
    'fields' => array(
      array(
        'id'      => 'contact_info',
        'title'   => __( 'Contact Info', 'halim' ),
        'type'    => 'group',
        'fields'  => array(
          array(
            'id'      => 'contact_info_title',
            'title'   => __( 'Contact Info Title', 'halim' ),
            'type'    => 'text',
          ),
          array(
            'id'      => 'contact_info_icon',
            'title'   => __( 'Contact Info Icon', 'halim' ),
            'type'    => 'icon',
          ),
          array(
            'id'      => 'contact_info_description',
            'title'   => __( 'Contact Info Description', 'halim' ),
            'type'    => 'text',
          ),
        ),
      ),

      array(
          'id'      => 'contact_map',
          'title'   => __( 'Contact Map', 'halim' ),
          'type'    => 'map',
      ),
    ),

  ) );
  

  // footer options
  // CSF::createSection( $prefix, array(
  //   'id' => 'footer_options',
  //   'title'  => __('Footer Options' , 'halim'),
  //   'icon'   => 'fas fa-rocket',
  //   'fields' => array(
  //     array(
  //       'id'      => 'footer_text',
  //       'title'   => __( 'Copyright Text', 'halim' ),
  //       'type'    => 'text',
  //       'default' => __( '©All Rights Reserved 2020', 'halim' ),
  //     ),
  //     array(
  //       'id'      => 'footer social',
  //       'title'   => __( 'Footer Social', 'halim' ),
  //       'type'    => 'group',
  //       'button_title'  => __( 'Add New Link', 'halim' ),
  //       'fields'  => array(
  //         array(
  //           'id'      => 'footer_social_icon',
  //           'title'   => __( 'Footer Social Icons', 'halim' ),
  //           'type'    => 'text',
  //         ),
  //         array(
  //           'id'      => 'footer_social_url',
  //           'title'   => __( 'Footer Social Url', 'halim' ),
  //           'type'    => 'text',
  //         ),
  //       ),
  //     ),
  //   ),

  // ) );




 


  

}