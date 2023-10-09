<?php

add_theme_support( 'html5', array( 'search-form' ) );

// Отключаем сжатие изображений
add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );


remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
// если собираетесь выводить вставки из других сайтов на своем, то закомментируйте след. строку.
remove_action( 'wp_head',                'wp_oembed_add_host_js'                 );

/* Сброс фильтра для html в описании категории */
remove_filter('pre_term_description', 'wp_filter_kses');
remove_filter('pre_term_description', 'wp_kses_data');

// Убираем мусор из шапки
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// убираем emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

remove_filter('the_content', 'wptexturize'); /* убираем авотдобавление параграфиов */
remove_action( 'wp_head', 'wp_resource_hints', 2); /* удаляем dns-prefetch */

// Удаляем автоподстановку размера картинок
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function remove_footer_admin (){
  echo '<span id="footer-thankyou">Разработка сайта - Spaceweb Studio</span>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Кастомизация логин формы
function iservice_login_logo() {
  echo '<style  type="text/css">
    .login h1 a { 
      background: url("/img/logo-color.svg") no-repeat !important; 
      background-size: contain !important;
      width: 160px;
    }
    </style>';
}
add_action('login_head', 'iservice_login_logo');