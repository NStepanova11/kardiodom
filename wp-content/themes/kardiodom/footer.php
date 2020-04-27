            <!------------------------------Footer---------------------------------------->
            <footer class="footer font-small ">
                <div class="jumbotron footer__attention">
                  <div class="footer__attention__container">
                    <p class = "footer__attention__1">
                        Имеются противопоказания.
                    </p>
                    <p class = "footer__attention__2">
                        Необходима консультация специалиста.
                    </p>
                  </div>
                </div>
  
                <div class="container text-center footer__info__container">
                    <div class="row">
                        <div class="col-lg-3 mx-auto text-lg-left">
                            <h5 class="mt-3 mb-4 footer__info__title">
                                График работы
                            </h5>
                            <div class="work__time__list">
                                <?php echo nl2br(get_theme_mod('work__time')); ?>
                            </div>
                            <!--
                                Пн - с 08:00 до 20:00
                                Вт - с 08:00 до 20:00
                                Ср - с 08:00 до 20:00
                                Чт - с 08:00 до 20:00
                                Пт - с 08:00 до 20:00
                                Сб - с 08:00 до 16:00
                            -->
                        </div>  
  
                        <hr class="clearfix w-100 d-md-none">
                
                        <div class="col-lg-3 mx-auto">
                            <h5 class="mt-3 mb-4 footer__info__title">Контакты</h5>
                            <ul class="list-unstyled contacts">
                                <li><u>Адрес:</u></li>
                                <li class = "mc__address"><?php echo nl2br(get_theme_mod('address')); ?></li>
                                <!--<li>г. Йошкар-Ола, ул. Успенская, д. 32а</li>-->
                                <li><u>Телефон:</u></li>
                                <li class = "mc__phone__1">
                                    <?php echo nl2br(get_theme_mod('phone__1')); ?>
                                    <!--8 (927) 882-63-23-->
                                </li>
                                <li class = "mc__phone__2">
                                    <?php echo nl2br(get_theme_mod('phone__2')); ?>
                                    <!--8 (8362) 23-18-23-->
                                </li>
                            </ul>
                        </div>
            
                        <hr class="clearfix w-100 d-md-none">
                
                        <div class="col-lg-3 mx-auto">
                            <h5 class="mt-3 mb-4 footer__info__title">Помощь</h5>
                            <ul class="list-unstyled help">
                                <li><a class = "text-dark" href="/">На главную</a></li>
                                <li><a class = "text-dark" href="/price">Поиск по сайту</a> </li>
                                <li class = "text-dark"><?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?></li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
  
          </div>
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      -->
      <?php wp_footer();?>
    </body>
  </html>