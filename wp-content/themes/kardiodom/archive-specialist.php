<?php 
get_header(); 
?>

<div class="content">
    <h1 class="page-header">Специалисты</h1>
    <div class="row expert__card__list">
      <?php 
          $args = array('post_type'=> 'specialist', 'posts_per_page'=> 20, 'orderby' => 'post_date', 'order' => 'ASC' );
          $loop = new WP_Query($args);
          while ($loop->have_posts()) : $loop->the_post();
      ?>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card expert__card">
                <div class="card-image expert__card__image" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                </div>
                <div class="card-body expert__card__body">
                    <h5><?php the_title();?></h5>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                </div>
                <div class="expert__card__button">
                    <a href="<?php the_permalink(); ?>" class="btn btn-outline-dark btn__details">Перейти</a>
                </div>
            </div>
        </div>


      <?php      
          endwhile;
      ?>
    </div>
</div>

<?php get_footer();?>