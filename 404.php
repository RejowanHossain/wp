<?php get_header();?>
<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h4 class="page-title"><?php _e('404 not found')?></h4>
            </div>
        </div>
    </div>
</section>
<section class="page-404 pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <div class="page-404-content">
                    <h4><?php _e('Sorry! Not Found')?></h4>
                </div>
            </div>
            <div class="col-xl-4">
                <?php dynamic_sidebar('main_sidebar');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>