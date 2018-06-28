<?php get_header(); ?>

<section class="b-work-map-line d-none d-lg-block">
  <div class="container">
    <div class="row">
      <div class="col b-work-map-line__inner">
        <div class="b-work-map-line__text text-center">
          <h1 class="d-inline-block text-center">Международные перевозки грузов</h1> из <a href="dostavka-gruzov-iz-evropy">Европы</a>, <a href="dostavka-gruzov-iz-kitaya">Китая</a> и <a href="dostavka-gruzov-iz-ameriki">Америки</a>.
        </div>
        <a class="b-work-map-line__link b-work-map-line__link_evro" href="dostavka-gruzov-iz-evropy"></a><a class="b-work-map-line__link b-work-map-line__link_usa" href="dostavka-gruzov-iz-ameriki"></a><a class="b-work-map-line__link b-work-map-line__link_china" href="dostavka-gruzov-iz-kitaya"></a>
      </div>
    </div>
  </div>
</section>

<section class="b-services-line">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="b-services-line__header">
          <h2 class="text-center">Мы работаем как с юридическими, так и с физическими лицами.</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="row">
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/sbornye-gruzy">Доставка сборных грузов</a>
          </div>
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/tamozhennoe-oformlenie">Таможенное оформление</a>
          </div>
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/perevozka-generalnykh-gruzov">Доставка генеральных грузов</a>
          </div>
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/services/oversize">Доставка негабаритных грузов</a>
          </div>
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/perevozka-opasnyh-gruzov">Доставка опасных грузов</a>
          </div>
          <div class="col-12 col-sm-6">
            <a class="b_service_link" href="/morskie-kontejnernye-perevozki">Морские контейнерные перевозки</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-4">
        <div class="b-country-geography fixedsticky">
          <div class="b-country-geography__header">
            География перевозок
          </div>
          <?php
          $menu = wp_nav_menu( array(
            'theme_location'  => 'country',
            'container'       => 'div',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu row',
            'fallback_cb'     => 'wp_page_menu',
            'items_wrap'      => '<ul id="%1$s" class="%2$s" role="navigation">%3$s</ul>',
            'depth'           => 2,
            'echo' => 0
          ) );
          $menu = str_replace('menu-item ', 'menu-item nav-item col-6 b-country-geography-list__item', $menu);
          $menu = str_replace('<a', '<a class="nav-link"', $menu);
          echo $menu;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="b-order-line">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6">
        <div class="b-order-line__header">
          Оставьте заявку на расчет стоимости доставки груза
        </div>
        <form class="b-form js-form-fake">
          <input class="b-form__input" name="" placeholder="Контактная информация*" type="text" readonly="" />
          <input class="b-form__input" name="" placeholder="Характеристики груза*" type="text" readonly="" />
          <input class="b-form__input" name="" placeholder="Услуги*" type="text" readonly="" />
          <div class="b-btn b-btn_color_yellow">
            Получить расчет
          </div>
        </form>
      </div>
      <div class="col-12 col-lg-6">
        <div class="b-order-line__info">
          <p>
            <b>“Карго-Трейдинг”</b>- логистическая компания оказывающая услуги по международной перевозке грузов и таможенному оформлению.
          </p>
          <p>
            Доставка товаров из Европы, Америки и Китая в Россию, таможенное декларирование, сбор и консолидация грузов, практические решения в сфере ВЭД, временное хранение на нашем складе, доставка сборных грузов, перевозка опасных и негабаритных грузов - это лишь часть услуг.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php //do_shortcode('[advantages]');?>

<section class="b-advantages-line">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="b-advantages-line__header">
          Наши преимущества
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 col-md-6 col-lg mb-3">
        <img src="/frontend/img-content/b-advantages-line_1.png" alt="Грузовик">
        <div class="b-advantages-line__text">
          Быстрые сроки доставки
        </div> 
      </div>
      <div class="col-12 col-md-6 col-lg mb-3">
        <img src="/frontend/img-content/b-advantages-line_2.png" alt="">
        <div class="b-advantages-line__text">
          Возможность отправки груза от 1 кг
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg mb-3">
        <img src="/frontend/img-content/b-advantages-line_3.png" alt="">
        <div class="b-advantages-line__text">
          Грамотное оформление документов и таможенная очистка грузов
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg mb-3">
        <img src="/frontend/img-content/b-advantages-line_4.png" alt="">
        <div class="b-advantages-line__text">
          Минимизация расходов клиента
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg mb-3">
        <img src="/frontend/img-content/b-advantages-line_5.png" alt="">
        <div class="b-advantages-line__text">
          Надежность и постоянство присутствия на рынке ВЭД
        </div>
      </div>
    </div>
  </div>
</section>

<section class="b-schema-line">
  <div class="container">

    <?php
    if (have_posts()):
        while (have_posts()): the_post();

            the_content();

        endwhile;
    endif;

    ?>

  </div>
</section>
<?php get_footer(); ?>