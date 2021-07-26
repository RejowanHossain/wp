<?php get_header();?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <?php get_template_part( 'template-parts/breadcrumb' )?>
            </div>
        </div>
    </div>
</section>

<section class="blog-single pt-100 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-8">
                <?php 
                  while( have_posts() ){
                     the_post();
               ?>

                <h2><?php the_title();?></h2>
                <?php the_post_thumbnail();?>
                <p><?php the_content();?></p>
                <div class="comments">
                    <?php comments_template();?>
                </div>
                <?php
                }
                  ?>

            </div>
            <div class="col-xl-4">
                <?php 
                     if( is_active_sidebar( 'main_sidebar' ) ){
                        dynamic_sidebar( 'main_sidebar' );
                     }
                  ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer();?>