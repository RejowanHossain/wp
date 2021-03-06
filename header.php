<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <?php  
        $config = get_option( 'halim_options' );

        $favicon =  $config['favicon']
    ?>
    <link rel="icon" href="<?php echo $favicon[ 'url' ]?>" type="image/jpg">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body>
    <section class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <div class="header-left">

                        <?php if( $config['header_email'] ){?>
                        <a href="mailto:<?php echo $config['header_email'];?>"><i class="fa fa-envelope"></i>
                            <?php echo $config['header_email'];?> </a>
                        <?php } ?>

                        <?php if( $config['header_phone'] ){?>
                        <a href="tel:<?php echo $config['header_phone'];?>"><i class="fa fa-phone"></i>
                            <?php echo $config['header_phone'];?> </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="header-social">
                        <?php
                            $header_icons = $config['header_icons'];
                            foreach( $header_icons as $header_icon){
                        ?>
                        <a href="<?php echo $header_icon['social-link'];?>"><i
                                class="<?php echo $header_icon['social-icon'];?>"></i></a>
                        <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Header Area Start -->
    <header class="header header-fixed">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <?php
                          $logo = $config['header_logo'];

                          if( $logo ){
                        ?>

                        <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo $logo['url']?>"
                                alt="logo"></a>


                        <?php }
                        ?>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">

                            <?php
                              wp_nav_menu(array(
                                 'theme_location' => 'main-menu',
                                 'menu_class' => 'navbar-nav ml-auto'
                              ));
                           ?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area Start -->