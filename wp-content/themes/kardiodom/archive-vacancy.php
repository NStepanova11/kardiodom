<?php 
get_header(); 
?>

<div class="content">
    <h1 class="page-header">Вакансии</h1>
    <div class="row vacancy__list">
        <?php 
            $args = array('post_type'=> 'vacancy', 'posts_per_page'=> 20, 'orderby' => 'post_date', 'order' => 'DESC' );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) : $loop->the_post();
        ?>
        
        <div class="col-12">
            <div class="vacancy__card">
                <div class = row>
                    <div class = "col-sm-12 col-md-10 col-lg-10 col-xl-10">
                        <a href="<?php the_permalink(); ?>" class = "vacancy__card__title">
                                <?php the_title();?>
                         </a>
                    </div>
                    <div class = "vacancy__date_right col-sm-12 col-md-2 col-lg-2 col-xl-2"><?php echo get_the_date(); ?></div>
                </div>

                <p class = "vacancy__description"><?php the_excerpt();?></p>

            </div>

        </div>
        
         <?php endwhile; ?>
    </div>
</div>

<?php get_footer();?>

                        
                            
                        
                           

                    
                        
