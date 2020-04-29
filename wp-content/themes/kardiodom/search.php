<?php 
  /*
        The template for displaying Search Results pages. 
  */
  get_header();

 require_once __DIR__ . '/classes/PriceTable.php';
 
 $price_table = new PriceTable();

?>   

<!------------------------------Content---------------------------------------->
<div class="content"> 
        <?php $price_table->get_search_result(get_search_query()); ?>
</div> 
     
<?php get_footer();?>