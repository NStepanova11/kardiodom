<?php
    add_action('wp_enqueue_scripts', 'cardiodom_style');
    add_action('wp_enqueue_scripts', 'cardiodom_scripts');

    function cardiodom_style(){
        wp_enqueue_style( 'bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0' );
        wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/css/header.css'); 
        wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/css/footer.css'); 
        wp_enqueue_style('index-style', get_template_directory_uri() . '/assets/css/index.css'); 
        wp_enqueue_style('experts-style', get_template_directory_uri() . '/assets/css/experts.css'); 
        wp_enqueue_style('aboutexpert-style', get_template_directory_uri() . '/assets/css/aboutexpert.css'); 
        wp_enqueue_style('about-style', get_template_directory_uri() . '/assets/css/about.css'); 
        wp_enqueue_style('contacts-style', get_template_directory_uri() . '/assets/css/contacts.css'); 
        wp_enqueue_style('documents-style', get_template_directory_uri() . '/assets/css/documents.css'); 
        wp_enqueue_style('main-style', get_stylesheet_uri()); //подключает style.css Из корня
    }

    function cardiodom_scripts(){
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
        wp_enqueue_script( 'jquery' );

        wp_enqueue_script( 'popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array( 'jquery' ), '1.12.9', true );
	wp_enqueue_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array( 'jquery' ), '4.0.0', true );
    }

add_action('customize_register', 'cardiodom_footer_customize_register');

function cardiodom_footer_customize_register($wp_customize) {
    //FOOTER
    $wp_customize->add_section('footer', array(
        'title' => 'Подвал сайта',
        'priority' => 1,
    ));

    //footer address
    $address_setting = 'address';
    $wp_customize->add_setting($address_setting, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($address_setting, array(
        'section' => 'footer',
        'type' => 'text',
        'label' => 'Адрес МЦ "КардиоДом":',
        'description' => "Введите адрес, по которому расположен ваш мед.центр"
    ));

     //footer phone #1
     $phone_1_setting = 'phone__1';
     $wp_customize->add_setting($phone_1_setting, array(
         'default' => '',
         'sanitize_callback' => 'sanitize_text_field',
         'transport' => 'postMessage'
     ));
 
     $wp_customize->add_control($phone_1_setting, array(
         'section' => 'footer',
         'type' => 'text',
         'label' => 'Телефон #1:',
         'description' => "Введите номер телефона для записи"
     ));

      //footer phone #2
      $phone_2_setting = 'phone__2';
      $wp_customize->add_setting($phone_2_setting, array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
      ));
  
      $wp_customize->add_control($phone_2_setting, array(
          'section' => 'footer',
          'type' => 'text',
          'label' => 'Телефон #2:',
          'description' => "Введите номер телефона для записи"
      ));

    //work time
    $work_time_setting = 'work__time';
    $wp_customize->add_setting($work_time_setting, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($work_time_setting, array(
        'section' => 'footer',
        'type' => 'textarea',
        'label' => 'Режим работы:',
        'description' => 'Введите режим работы в виде "Пн - с 08:00 до 20:00" с новой строки для каждого дня'
    ));
}

add_action('customize_register', 'cardiodom_header_customize_register');

function cardiodom_header_customize_register($wp_customize) {
    $wp_customize->add_section('header', array(
        'title' => 'Заголовок сайта',
        'priority' => 1,
    ));

    //header red info block
    $red_info_setting = 'red_info_block';
    $wp_customize->add_setting($red_info_setting, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_textarea_field',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control($red_info_setting, array(
        'section' => 'header',
        'type' => 'textarea',
        'label' => 'Объявление КРАСНОГО цвета:',
        'description' => "Текст, введенный в это поле будет отображаться в блоке объявлений красным цветом"
    ));

     //header green info block
     $green_info_setting = 'green_info_block';
     $wp_customize->add_setting($green_info_setting, array(
         'default' => '',
         'sanitize_callback' => 'sanitize_textarea_field',
         'transport' => 'postMessage'
     ));
 
     $wp_customize->add_control($green_info_setting, array(
         'section' => 'header',
         'type' => 'textarea',
         'label' => 'Объявление ЗЕЛЕНОГО цвета:',
         'description' => "Текст, введенный в это поле будет отображаться в блоке объявлений зеленым цветом"
     ));
 /*
     $wp_customize->selective_refresh->add_partial($green_info_setting, array(
         'selector' => '.header__info_2',
         'render_callback' => function() use ($green_info_setting) {
             return nl2br(get_theme_mod($green_info_setting));
         }
     ));
*/
}