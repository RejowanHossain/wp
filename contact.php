<?php

/*
   Template Name: Contact
*/

get_header();

?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part( 'template-parts/breadcrumb' )?>
            </div>
        </div>
    </div>
</section>

<!-- Contact Us Area End -->
<section class="contact-area pb-100 pt-100" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row text-center">

                    <?php 
                        $config = get_option( 'halim_options' );

                        $contact_items = $config[ 'contact_info' ];

                        if( $contact_items ){
                            foreach( $contact_items as $contact_item ){
                    ?>
                    <div class="col-md-4">
                        <div class="contact-address">
                            <i class="<?php echo $contact_item[ 'contact_info_icon' ];?>"></i>
                            <h4><?php echo $contact_item[ 'contact_info_title' ];?>
                                <span><?php echo $contact_item[ 'contact_info_description' ];?></span>
                            </h4>
                        </div>
                    </div>

                    <?php }

                        }
                    
                    ?>

                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="contact-form">
                            <?php echo do_shortcode( '[contact-form-7 id="132" title="Contact form"]' );?>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="google-map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14608.039147951962!2d90.36710723036111!3d23.74703040345487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b33cffc3fb%3A0x4a826f475fd312af!2sDhanmondi%2C%20Dhaka%201205!5e0!3m2!1sen!2sbd!4v1627410864036!5m2!1sen!2sbd"
                                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Area End -->
<?php get_footer();?>