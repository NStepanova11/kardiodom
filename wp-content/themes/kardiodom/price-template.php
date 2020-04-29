<?php
/*
  Template Name: price-template 
*/

 get_header();

 require_once __DIR__ . '/classes/PriceTable.php';
 $price_table = new PriceTable();

 ?>

<!------------------------------Content---------------------------------------->
<div class="content">
    <h1 class="page-header">Услуги и цены</h1>
        <?php
            /*
            $shcode= get_field('price_table_code');
            echo do_shortcode($shcode);
            */
        ?>
      <?php $price_table->show_price_table()?>
</div>

<?php get_footer();?>