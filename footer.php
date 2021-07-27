<?php 
      $config = get_option( 'halim_options' );   
      
      if( $config[ 'cta_switch' ] ){
?>
<!-- CTA Area Start -->
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4><?php echo $config[ 'cta_title' ]?> <span><?php echo $config[ 'cta_subtitle' ]?></span></h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php echo $config[ 'cta_btn_url' ]?>" class="box-btn"><?php echo $config[ 'cta_btn_text' ]?>
                    <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<!-- CTA Area End -->
<!-- Footer Area End -->
<footer class="footer-area pt-50 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <?php 
                     if( is_active_sidebar( 'footer_sidebar1' ) ){
                        dynamic_sidebar( 'footer_sidebar1' );
                     }
                ?>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="single-footer">
                    <?php 
                        if( is_active_sidebar( 'footer_sidebar2' ) ){
                            dynamic_sidebar( 'footer_sidebar2' );
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-footer">
                    <?php 
                        if( is_active_sidebar( 'footer_sidebar3' ) ){
                            dynamic_sidebar( 'footer_sidebar3' );
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer contact-box">
                    <?php 
                        if( is_active_sidebar( 'footer_sidebar4' ) ){
                            dynamic_sidebar( 'footer_sidebar4' );
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="row copyright">
            <div class="col-md-6">
                <?php 
                    if( is_active_sidebar( 'copyright' ) ){
                        dynamic_sidebar( 'copyright' );
                    }
                ?>
            </div>
            <div class="col-md-6 text-right">
                <?php 
                    if( is_active_sidebar( 'social' ) ){
                        dynamic_sidebar( 'social' );
                    }
                ?>

            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
<?php wp_footer();?>
</body>

</html>