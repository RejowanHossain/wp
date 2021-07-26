<!-- CTA Area Start -->
<section class="cta">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h4>best solution for your business <span>the can be used on larger scale projectss as well as small
                        scale projectss</span></h4>
            </div>
            <div class="col-md-6 text-center">
                <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
            </div>
        </div>
    </div>
</section>
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