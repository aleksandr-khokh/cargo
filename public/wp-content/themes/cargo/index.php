<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col my-3">
      <?php breadcrumb_bootstrap(); ?>
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

<?php get_footer(); ?>