<?php 
  /*
    Template Name: documents-template
  */
get_header();
?>
<div class="content">  
    <h1 class = "page-header">Документы</h1>

    <div class="doc__container">        
        <div class="doc__list">
            <div class="doc__item">
                <p class="doc__link__title"><?php the_field('doc_name_1'); ?></p>
                <span class="doc__download__link">
                    <a href="<?php the_field('doc_file_1'); ?>" download="" title=""><i class="far fa-arrow-alt-circle-down"></i></a>
                    <!--/wp-content/themes/kardiodom/assets/docs/Лицензия.docx-->
                </span>
            </div>

            <div class="doc__item">
                <p class="doc__link__title"><?php the_field('doc_name_2'); ?></p>
                <span class="doc__download__link">
                    <a href="<?php the_field('doc_file_2'); ?>" download="" title=""><i class="far fa-arrow-alt-circle-down"></i></a>
                </span>
            </div>
            <div class="doc__item">
                <p class="doc__link__title"><?php the_field('doc_name_3'); ?></p>
                <span class="doc__download__link">
                    <a href="<?php the_field('doc_file_3'); ?>" download="" title=""><i class="far fa-arrow-alt-circle-down"></i></a>
                </span>
            </div>
            <div class="doc__item">
                <p class="doc__link__title"><?php the_field('doc_name_4'); ?></p>
                <span class="doc__download__link">
                    <a href="<?php the_field('doc_file_4'); ?>" download="" title=""><i class="far fa-arrow-alt-circle-down"></i></a>
                </span>
            </div>
        </div>
    </div>
</div>  
<?php get_footer();?>