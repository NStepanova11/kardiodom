<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;900&display=swap" rel="stylesheet">
    <!-- Styles -->
    <?wp_head();?>

  <title>Медицинский центр "КардиоДом"</title>
  </head>
  <body>
        <div class="container">
            <!------------------------------Header----------------------------------------->
            <header id="header">
                <div class="container header__container">
          
                  <nav class="navbar navbar-expand-lg navbar-light">
          
                    <a class = "navbar-brand" href="/main"><img src = "/wp-content/themes/kardiodom/assets/images/brand.png"></a>
                    
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
          
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/price" class="nav-link">Услуги и цены</a></li>
                        <li class="nav-item"><a href="<?php echo get_post_type_archive_link('specialist'); ?>" class="nav-link">Специалисты</a></li>
                        <li class="nav-item"><a href="/documents" class="nav-link">Документы</a></li>
                        <li class="nav-item"><a href="/about" class="nav-link">О нас</a></li>
                        <li class="nav-item"><a href="/contacts" class="nav-link">Контакты</a></li>
                      </ul>
                    </div>
                  </nav>

                  <div class="header__info">
                        <div class="header__info_1">
                            <?php echo get_theme_mod('red_info_block'); ?>
                        </div>
                        <div class="header__info_2">
                            <?php 
                              $default = 'Добро пожаловать в МЦ "КардиоДом"';
                              $info_1 = get_theme_mod('red_info_block');
                              $info_2 = get_theme_mod('green_info_block');

                              if (!$info_1 && !$info_2)
                                  echo $default;
                              else
                                  echo $info_2;
                            ?>
                        </div>
                  </div>

                  <div class="search__container">
                  <form class="search__box" action= "<?php __DIR__ . '/classes/searchPrice.php'?>">
                      <span class="search__icon"><i class="fa fa-search"></i></span>
                      <input type="search" id="search" class = "search__input" name = "search_form" placeholder="Поиск..." />
                  </form>
                  </div>
                </div>
            </header>