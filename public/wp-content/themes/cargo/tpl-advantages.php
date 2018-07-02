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
      <?php get_sidebar(); ?>
    </div>
  </div>

</div>

<?=do_shortcode('[advantages]');?>

<?php get_footer(); ?>