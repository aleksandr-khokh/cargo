<?php
/*
Plugin Name: Breadcrumbs Bootstrap
Plugin URI:  https://wordpress.org/plugins/breadcrumb-bootstrap/
Description: This plugin will create a breadcrumbs for pages with Bootstrap 4 markup. Use the shortcode "[breadcrumb_bootstrap]" OR use Function "breadcrumb_bootstrap();" .
Version:     1
Author:      Aleksandr Khokhryakov
Author URI:  http://spaceweb.studio
License:     GPL2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) or die( 'Something wrong' );

add_shortcode('breadcrumb_bootstrap', 'breadcrumb_bootstrap');
function breadcrumb_bootstrap() {
  global $post;
  $separator = "&nbsp;/&nbsp;";
  
  echo '<nav aria-label="breadcrumb"><ul class="breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#">';
  if (!is_front_page()) {

    echo '<li class="breadcrumb-item" typeof="v:Breadcrumb"><a href="';
    echo get_option('home');
    echo '" class="breadcrumb-item_link" rel="v:url" property="v:title" title="';
    echo get_option('blogname');
    echo '">';
    echo get_option('blogname');
    echo '</a></li>';

    if ( is_category() || is_single() ) {

      echo '<li class="breadcrumb-item" typeof="v:Breadcrumb">';
      the_category(', ');
      echo '</li>';

      if ( is_single() ) {

        echo '<li class="breadcrumb-item active" aria-current="page" typeof="v:Breadcrumb">';
        the_title();
        echo "</li>";

      }
    } elseif ( is_page() && $post->post_parent ) {

      $home = get_page(get_option('page_on_front'));
      for ($i = count($post->ancestors)-1; $i >= 0; $i--) {

        if (($home->ID) != ($post->ancestors[$i])) {

          echo '<li class="breadcrumb-item" typeof="v:Breadcrumb"><a href="';
          echo get_permalink($post->ancestors[$i]); 
          echo '" class="breadcrumb-item_link">';
          echo get_the_title($post->ancestors[$i]);
          echo "</a></li>";

        }

      }

      echo '<li class="breadcrumb-item active" aria-current="page" typeof="v:Breadcrumb">';
      echo the_title();
      echo "</li>";

    } elseif (is_page()) {

      echo '<li class="breadcrumb-item active" aria-current="page" typeof="v:Breadcrumb">';
      echo the_title();
      echo "</li>";

    } elseif (is_404()) {

      echo "404";

    }
  } else {

    bloginfo('name');

  }

  echo '</ul></nav>';
  
}
?>