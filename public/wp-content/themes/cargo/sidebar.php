<div class="b-country-geography <?=country_class($post->post_name)?> fixedsticky">
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