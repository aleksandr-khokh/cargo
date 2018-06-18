<!doctype html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" 
  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon">

  <title><?php echo get_post_meta($post->ID, 'title', true); ?></title>
  <meta name="keywords" content="<?php echo get_post_meta($post->ID, 'keywords', true); ?>">
  <meta name="description" content="<?php echo get_post_meta($post->ID, 'description', true); ?>">
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

      <div id="toggle-button" class="d-flex d-sm-none fixed-top">
        <!-- Menu Button -->
        <button class="menu-btn">&#9776; Меню</button>
      </div>

      <header class="b-header">
        <div class="container">
          <div class="row b-header__inner"> <!-- все содержимое -->

            <div class="col-md-4 b-header__left">
              <a href="/"><img alt="" class="b-header__logo-img_big b-header_big" src="/frontend/img/logo.png" /></a><a href="/"><img alt="" class="b-header__logo-img_small b-header_small" src="/frontend/img/logo_small.png" /></a>
            </div> <!-- лого -->

            <div class="col-md-8">
              <div class="b-header-contacts row">
                <div class="col-md-7">
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
                  <span class="b-header-contacts__item phone">+7 (915) 261-60-24</span><br>
                  <span class="b-header-contacts__item phone">+7 (915) 261-66-54</span><br>
                  <a href="#" class="text-uppercase btn-blue header_phone_btn-blue" rel="nofollow" data-toggle="modal" data-target="#cbModal">Заказать звонок</a> <br>
                  <span class="b-header-hours">Пн - Пт: 9:00 - 19:00</span> <br>
                  <span class="b-header-contacts__item email"><a href="mailto:info@cargo-trading.ru" rel="nofollow">info@cargo-trading.ru</a></span> <br>
                </div>
                <span class="b-header-contacts__item phone b-header_small">+7 (915) 261-60-24<br><a href="mailto:info@cargo-trading.ru" class="email" rel="nofollow">info@cargo-trading.ru</a></span>
                
              </div>
            </div>
          </div> <!-- b-header__inner -->
        </div>
      </header>

