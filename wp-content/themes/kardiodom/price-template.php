<?php
/*
  Template Name: price-template 
*/

 get_header();
    require_once __DIR__ . '/classes//simple-xlsx/simplexlsx.class.php';
    $xlsx  = new SimpleXLSX(__DIR__ . '/assets/docs/price.xlsx');
 ?>

<!------------------------------Content---------------------------------------->
<div class="content">
    <h1 class="page-header">Услуги и цены</h1>
    <div class="price__table">
        <table>
            <?php 
                $sheet = $xlsx->rows();
                $firstRow = $sheet[0];
            ?>
            <tr class = "title__row">
                <td><?=$firstRow[0]?></td>
                <td><?=$firstRow[1]?></td>
                <td><?=$firstRow[2]?></td>
            </tr>


            <?php
                for($i=1; $i<count($sheet); $i++){
                    /*if (empty($sheet[$i][1]) && empty($sheet[$i][2])){
                    ?>
                        <tr class = "subtitle__row">
                            <?=$sheet[$i][0]?>
                       </tr>
                    <?php
                    }
                    else{
                        */
                    ?>
                        <tr class = "price__row">
                            <td><?=$sheet[$i][0]?></td>
                            <td><?=$sheet[$i][1]?></td>
                            <td><?=$sheet[$i][2]?></td>
                        </tr>
                    <?php
                   // } 
                }?>      
        </table>
    </div>
</div>

<?php get_footer();?>



 