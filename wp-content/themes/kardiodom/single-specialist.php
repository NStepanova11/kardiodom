<?php
 get_header();
 ?>

 <!------------------------------Content---------------------------------------->
 <div class="content">
    <h1 class="page-header">О специалисте</h1>

    <div class="expert__description">
        <div class="row expert__description__row">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="expert__description__photo__wrapper col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class= "expert__description__photo" style = "background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 short-info">
                        <h4><?php the_title(); ?></h4>
                        <div class = "align-middle">
                            <div class="qualification">
                                <?php the_excerpt();?>
                            </div>
                        </div>

                        <div class="diploma-list">
                            <?php  the_content();?>
                        </div>
                </div>
                <?php endwhile; ?>
        </div>
    </div>

</div>  


 <?php get_footer();?>