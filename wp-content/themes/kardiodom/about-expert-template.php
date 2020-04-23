<?php
/*
  Template Name: about-expert-template 
 */

 get_header();

 require_once __DIR__ . '/classes/ExpertsInfo.php';

 $expertsInfo = ExpertsInfo::getExpertsInfo();
 $expert = $expertsInfo[substr($_SERVER['REQUEST_URI'],1,-1)];
 ?>

 <!------------------------------Content---------------------------------------->
 <div class="content">
    <h1 class="page-header">О специалисте</h1>

    <div class="expert__description">
    <div class="row expert__description__row">
        <div class="expert__description__photo__wrapper col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class= "expert__description__photo" style = "background-image: url(/wp-content/themes/kardiodom/assets/images/experts/<?=$expert['image']?>.png);"></div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 short-info">
                <h4><?= $expert['name'] ?></h4>
                <div class = "align-middle">
                    <div class="qualification">
                        <? for($i=0; $i<count($expert['position']); $i++){?>
                            <p><?=$expert['position'][$i]?></p>
                            <?}?>
                    </div>
                </div>

                <ul class="diploma-list">
                  <? for($i=0; $i<count($expert['description']); $i++){?>
                      <li><span><?=$expert['description'][$i]?></span></li>
                  <?}?>
            </ul>
        </div>
    </div>
</div>

</div>  


 <?php get_footer();?>
