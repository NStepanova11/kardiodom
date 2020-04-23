<?php 
  /*
    Template Name: experts-template
  */
  get_header();


  require_once __DIR__ . '/classes/ExpertsInfo.php';

  $expertsInfo = ExpertsInfo::getExpertsInfo();
  
  ?>

<!------------------------------Content---------------------------------------->
<div class="content">
    <h1  class = "page-header">Специалисты</h1>
    <div class="row expert__card__list">

    <? foreach ($expertsInfo as $expert): ?>
        
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <div class="card expert__card">
                <div class="card-image expert__card__image" style="background-image: url(/wp-content/themes/kardiodom/assets/images/experts/<?=$expert['image']?>.png);">
                </div>
                <div class="card-body expert__card__body">
                    <h5><?=$expert['name']?></h5>
                    <p>
                        <? for($i=0; $i<count($expert['position']); $i++){?>
                            <?=$expert['position'][$i]?></br>
                        <?}?>
                    </p>
                </div>
                <div class="expert__card__button">
                    <a href="/<?=$expert['id']?>" class="btn btn-outline-dark btn__details">Перейти</a>
                </div>
            </div>
        </div>

        <? endforeach; ?>
    </div>
</div>    

<?php get_footer();?>