<?php
/*
Template Name: Шаблон страницы с преимуществами
*/
?>

<?php get_header(); ?>

<div class="container">
  <div class="row d-none d-lg-block">
    <div class="col">
      <?php breadcrumb_bootstrap(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 i-text-space">
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

<?=do_shortcode('[advantages]');?>

<?php get_footer(); ?>