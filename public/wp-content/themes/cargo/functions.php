<?php
if (!is_admin()) show_admin_bar(false);

require_once 'includes/init.php';

if ( !is_admin() ) {
  add_action( 'wp_print_styles', 'my_style_method' );
}

function my_style_method () {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . "/css/bootstrap-cargo.css", '', '', '' );
    wp_enqueue_style( 'barsik', get_template_directory_uri() . "/css/barsik.css", '', '', '' );
    wp_enqueue_style( 'norm', get_template_directory_uri() . "/css/norm.css", '', '', '' );
    wp_enqueue_style( 'style', get_template_directory_uri() . "/css/concat.css", '', '', '' );
}

add_action('wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', "https://yastatic.net/jquery/2.0.3/jquery.min.js", '', '', 'true');
    wp_enqueue_script('popper', "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js", '', '', 'true');
    wp_enqueue_script('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js", '', '', 'true');
    wp_enqueue_script('pushy', get_template_directory_uri() . "/js/pushy.min.js", '', '', 'true');
} 

register_nav_menus(array(
    'top_menu' => __('Верхнее меню'),
    'aside_menu' => __('Мобильное меню'),
    'country' => __('Страны')
)); 