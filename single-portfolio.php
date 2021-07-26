<?php
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

<section class="portfolio-single pt-100 pb-100">
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
                <?php
                }      
               ?>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project gallery</h4>
                    </div>
                    <div class="col-xl-4">
                        <div class="project-gallery">
                            <img src="assets/img/portfolio/1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="project-gallery">
                            <img src="assets/img/portfolio/2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="project-gallery">
                            <img src="assets/img/portfolio/3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-xl-12">
                        <h4>project overview</h4>
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jssO8-5qmag" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="portfolio-sidebar">
                    <?php
                     $technology_list = get_field( 'technology_used' );

                     if( $technology_list ){
                   ?>
                    <h4>Technology Used</h4>
                    <ul>
                        <?php foreach( $technology_list as $tech_list ) {?>
                        <li><i class="fa fa-arrow-right"></i>
                            <?php echo $tech_list;?>
                        </li>
                        <?php }?>
                    </ul>
                    <?php } ?>
                </div>
                <div class="portfolio-sidebar">

                    <?php 
                        $project_list = get_field( 'project_features' ); 

                        if( $project_list ){
                    ?>
                    <h4>project features</h4>
                    <ul>
                        <?php foreach( $project_list as $p_list ){?>
                        <li><i class="fa fa-arrow-right"></i> <?php echo $p_list;?></li>
                        <?php } ?>
                    </ul>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

?>