 <?php get_header();?>   

            <!------------------------------Content---------------------------------------->
            <div class="content">

                <!--Слайдер-->
                <div id="cardioCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <li data-target="#cardioCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#cardioCarousel" data-slide-to="1"></li>
                    <li data-target="#cardioCarousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url(<?php the_field('slide_image_1'); ?>);" >
                            <!--style="background-image: url(/wp-content/themes/kardiodom/assets/images/carousel/test-1.jpg);"-->
                            <div class="carousel-caption">
                                <h6><?php the_field('slide_title_1'); ?></h6>
                                <h1><?php the_field('slide_subtitle_1'); ?></h1>
                                <p>
                                    <?php the_field('slide_text_1'); ?>
                                </p>
                            </div>
                        </div>

                        <div class="carousel-item" style="background-image: url(<?php the_field('slide_image_2'); ?>);">
                            <div class="carousel-caption">
                                <h6><?php the_field('slide_title_2'); ?></h6>
                                <h1><?php the_field('slide_subtitle_2'); ?></h1>
                                <p>
                                    <?php the_field('slide_text_2'); ?>
                                </p>
                            </div>
                        </div>
                        <div class="carousel-item slide-img-container" style="background-image: url(<?php the_field('slide_image_3'); ?>);">
                            <div class="carousel-caption">
                                <h6><?php the_field('slide_title_3'); ?></h6>
                                <h1><?php the_field('slide_subtitle_3'); ?></h1>
                                <p>
                                    <?php the_field('slide_text_3'); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Карточки услуг-->
                <div class="service-cards-container">
                    <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/150" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Прием врача</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Узи</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/250/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Электрокардиография</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Процедурный кабинет</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/200/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Анализы</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="#" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Документы</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    </div>
                </div>

                <!--Телефон для записи-->
                <div class="jumbotron register__phone__info">
                  <div class="container-fluid">
                      <h5>
                            <?php the_field('phone_numbers_title'); ?>
                      </h5>
                      <h3>
                            <?php the_field('phone_number_1'); ?>
                      </h3>
                      <h3>
                            <?php the_field('phone_number_2'); ?>
                      </h3>
                  </div>
                </div>
            </div> 

<?php get_footer();?>