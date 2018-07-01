<?php
/*
Template Name: Шаблон Страны
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row d-none d-lg-block">
    <div class="col">
      <?php breadcrumb_bootstrap(); ?>
    </div>
  </div>
  
  <div class="b-shipping mt-3 mt-lg-0">
    <?=do_shortcode( '[shipping]' )?>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 i-text-space">

    <div class="delivery-info">
      <div class="row">
        <div class="col-12 col-lg-5">

          <div class="row">
            <div class="col-4 col-lg-4">
              <img src="/frontend/img/link-icon/duration.svg" class="delivery-icon" alt="Время доставки" width="58">
            </div>
            <div class="col-8 col-lg-8">
              <span class="grey">Время в пути:</span><br>
              <span class="big"><?=get_field('delivery_time') ?></span>
            </div>
          </div>

        </div>
        <div class="col-12 col-lg-7">

          <div class="row no-gutters">
            <div class="d-none d-sm-block col-sm-3 col-lg-3">
              <img src="/frontend/img/link-icon/cash.svg" class="delivery-icon" alt="Стоимость доставки груза из Австрии" width="58">
            </div>
            <div class="col-12 col-sm-9 col-lg-9">
              <table class="b-table">
                <tr>
                  <td class="grey">от 10 до 1000 кг</td>
                  <td><span class="big"><?=get_field('delivery_price') ?></span></td>
                </tr>
                <tr>
                  <td class="grey">от 1000 кг</td>
                  <td>индивидуально</td>
                </tr>
              </table>
            </div>
          </div>

        </div>
      </div>

      <br>

      <div class="row no-gutters">
        <div class="col-3 col-lg-2">
          <img src="/frontend/img/link-icon/sklad.svg" class="delivery-icon" alt="Ближайший консолидационный склад" width="58">
        </div>
        <div class="col-9 col-lg-10">
          <p><b>Ваш груз будет доставлен на наш ближайший консолидационный склад в <?=get_field('delivery_city') ?></b></p>
        </div>
      </div>
    </div>

    <?php
    if (have_posts()):
        while (have_posts()): the_post();

            the_content();

        endwhile;
    endif;
    ?>
    </div>
    <div class="d-none d-lg-block col-lg-4">
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

<?php get_footer(); ?>