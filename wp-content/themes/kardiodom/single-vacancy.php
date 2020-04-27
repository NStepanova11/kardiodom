<?php
 get_header();
 ?>

 <!------------------------------Content---------------------------------------->
 <div class="content">
    <h1 class="page-header">Вакансия</h1>

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="vacancy__container">
            <div class = "vacancy__title"><?php the_title(); ?></div>
            <div class = "vacancy__description"><?php the_excerpt();?></div>
            <div class = "vacancy__body"><?php  the_content();?></div>
            <div class = "vacancy__date_left">Опубликовано: <?php echo get_the_date(); ?></div>
    </div>
    <?php endwhile; ?>
</div>  

 <?php get_footer();?>