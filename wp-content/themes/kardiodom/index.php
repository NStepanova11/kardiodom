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
                        </div>

                        <div class="carousel-item" style="background-image: url(<?php the_field('slide_image_2'); ?>);">
                        </div>
                        <div class="carousel-item slide-img-container" style="background-image: url(<?php the_field('slide_image_3'); ?>);">
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
                            <h5 class="card-title service__card__title">Услуги и цены</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="<?php echo get_post_type_archive_link('specialist'); ?>" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Специалисты</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="/documents" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/250/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Документы</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="/about" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">О нас</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="/contacts" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/200/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Контакты</h5>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <a href="<?php echo get_post_type_archive_link('vacancy'); ?>" class="service__card__link">
                        <div class="card service__card">
                            <div class="service__card__img__container">
                            <img src="https://picsum.photos/300/200" class="card-img">
                            </div>
                            <div class="card-body service__card__body">
                            <h5 class="card-title service__card__title">Вакансии</h5>
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