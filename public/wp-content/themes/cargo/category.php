<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col">
      <?php breadcrumb_bootstrap(); ?>
    </div>
  </div>

  <div class="row">
    <div class="col-12">
      <h1><?php single_cat_title(); ?></h1>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-lg-8 i-text-space">
      <div class="row">
      <?php while(have_posts()) : the_post(); ?>
          <div class="col-12 col-md-6">
          <h2 class="news-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h2>
          <?php // the_excerpt(); ?> 
          <?php echo get_the_date(); ?>
          <!-- <a href="<?php // the_permalink() ?>" rel="bookmark" class="read-more">Читать далее</a> -->
          </div>
        <?php endwhile; ?>
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

<?=do_shortcode('[advantages]');?>
<?php get_footer(); ?>