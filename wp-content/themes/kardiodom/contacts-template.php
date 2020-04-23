<?php 
  /*
    Template Name: contacts-template
  */
  get_header();

?>   
<!--
ИНН 121508437542, 
ОГРНИП 314121502200082,
ОКПО 0191016586
                
+7 (927) 882-63-23, 
+7 (8362) 23-18-23
dom.kardio@yandex.ru
-->
            <!------------------------------Content---------------------------------------->
            <div class="content">
                <h1 class = "page-header">Контакты</h1>
                <div class="jumbotron contacts__info">
                    <p>ИП <?php the_field('employer_name'); ?></p>
                    <p>ИНН <?php the_field('inn'); ?>, ОГРНИП <?php the_field('ogrnip'); ?>, ОКПО <?php the_field('okpo'); ?></p>
                    <p>Свяжитесь с нами, чтобы назначить удобное время.</p>
                    <p>Звоните: <?php the_field('phone_number_1'); ?>, <?php the_field('phone_number_2'); ?></p>
                    <p>Электронный адрес: <?php the_field('email'); ?></p>
                </div> 
 
                <div id="map">
                 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2194.580772784676!2d47.8848783160723!3d56.62987993147177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTbCsDM3JzQ3LjYiTiA0N8KwNTMnMTMuNCJF!5e0!3m2!1sru!2sru!4v1586196618521!5m2!1sru!2sru" frameborder="" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
             </div>    
<?php get_footer();?>