<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">
  <link href="/frontend/img/link-icon/favicon.ico" rel="shortcut icon" />

  <link rel="apple-touch-icon" sizes="76x76" href="/frontend/img/link-icon/apple-touch-icon-76x76.png" />
  <link rel="apple-touch-icon" sizes="120x120" href="/frontend/img/link-icon/apple-touch-icon-120x120.png" />
  <link rel="apple-touch-icon" sizes="152x152" href="/frontend/img/link-icon/apple-touch-icon-152x152.png" />
  <meta name="msapplication-TileImage" content="/frontend/img/link-icon/windows-touch-icon-144x144.png" />
  <meta name="msapplication-TileColor" content="#fff" />

  <title><?=get_field('title') ?></title>
  <meta name="keywords" content="">
  <meta name="description" content="<?=get_field('description') ?>">
  <?php wp_head(); ?>

</head>
<body>
  <!-- Pushy Menu -->
  <nav class="pushy pushy-right">
    <div class="pushy-content">

      <?php
      $menu = wp_nav_menu( array(
        'theme_location'  => 'aside_menu',
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => 'navbarSupportedContent',
        'menu_class'      => 'menu nav',
        'fallback_cb'     => 'wp_page_menu',
        'items_wrap'      => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
        'depth'           => 2,
        'echo' => 0
      ) );
      $menu = str_replace('class="menu-item', 'class="menu-item nav-item', $menu);
      $menu = str_replace('<a', '<a class="nav-link"', $menu);
      echo $menu;
      ?>
    </div>
  </nav>

  <!-- Site Overlay -->
  <div class="site-overlay"></div>

  <main id="container">

      <div id="toggle-button" class="d-block d-lg-none fixed-top">
        <div class="row">
          <div class="col-4">
            <button class="menu-btn">&#9776; Меню</button>
          </div>
          <div class="col-8 text-right">
            <span class="phone-button text-right">+7 (915) 261-60-24</span>
          </div>
        </div>
      </div>

      <div class="d-lg-none mobile-header">
        <a href="/"><img alt="" class="b-header__logo-img_big b-header_big" src="/frontend/img/logo.png" /></a><a href="/"><img alt="" class="b-header__logo-img_small b-header_small" src="/frontend/img/logo_small.png" /></a>
        <span class="b-work-since">Работаем с 1998 года</span>
      </div>

      <header class="d-none d-lg-block b-header"><!-- все содержимое -->
        <div class="container">
          <div class="row b-header__inner"> 

            <div class="col-lg-4 b-header__left">
              <a href="/"><img alt="" class="b-header__logo-img_big b-header_big" src="/frontend/img/logo.png" /></a><a href="/"><img alt="" class="b-header__logo-img_small b-header_small" src="/frontend/img/logo_small.png" /></a>
              <span class="b-work-since">Работаем с 1998 года</span>
            </div> <!-- лого -->

            <div class="col-lg-8">
              <div class="b-header-contacts row no-gutters">
                <div class="col-md-8">
                  <ul class="b-header-menu">
                    <li class="b-header-menu__item">
                      <a href="transportnaya-kompaniya" class="b-header-menu__link"><i class="b-icon b-icon_transportnaya-kompaniya b-header_big"></i>О нас</a>
                    </li>
                    <li class="b-header-menu__item">
                      <a href="tamozhennoe-oformlenie" class="b-header-menu__link"><i class="b-icon b-icon_tamozhennoe-oformlenie b-header_big"></i>Таможенное оформление</a>
                    </li>
                    <li class="b-header-menu__item">
                      <a href="contacts" class="b-header-menu__link"><i class="b-icon b-icon_contacts b-header_big"></i>Контакты</a>
                    </li>
                  </ul>

                </div>
                <div class="col-md-4 b-header_big">
                  <!-- <span class="b-header-contacts__item phone">+7 (915) 261-60-24</span><br> -->
                  <span class="b-header-contacts__item phone">+7 (915) 261-66-54</span>
                  <a href="#" class="text-uppercase b-btn b-btn_color_blue header_phone_btn-blue" rel="nofollow" data-toggle="modal" data-target="#cbModal">Заказать звонок</a> <br>
                  <span class="b-header-hours">Пн - Пт: 9:00 - 19:00</span> <br>
                  <span class="b-header-contacts__item email"><a href="mailto:info@cargo-trading.ru" rel="nofollow">info@cargo-trading.ru</a></span> <br>
                </div>
                <span class="b-header-contacts__item phone b-header_small">+7 (915) 261-60-24<br><a href="mailto:info@cargo-trading.ru" class="email" rel="nofollow">info@cargo-trading.ru</a></span>
                
              </div>
            </div>
          </div> <!-- b-header__inner -->
        </div>
      </header>

