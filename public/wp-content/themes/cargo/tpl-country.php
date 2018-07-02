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
    <?=do_shortcode( '[shipping_date]' )?>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 i-text-space">

    <div class="delivery-info">
      <div class="row">
        <div class="col-12 col-lg-5">

          <div class="row mb-3">
            <div class="col-3 col-lg-4">
              <img src="/frontend/img/link-icon/duration.svg" class="delivery-icon" alt="Время доставки" width="58">
            </div>
            <div class="col-9 col-lg-8">
              <span class="grey">Время в пути:</span><br>
              <span class=""><?=get_field('delivery_time') ?></span>
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
      <?php get_sidebar(); ?>
    </div>
  </div>

</div>

<?=do_shortcode('[advantages]');?>

<?php get_footer(); ?>