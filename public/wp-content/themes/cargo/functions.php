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
    wp_enqueue_style( 'jq-fancybox', get_template_directory_uri() . "/css/jquery.fancybox.css", '', '', '' );
    wp_enqueue_style( 'jq-fancybox-button', get_template_directory_uri() . "/css/jquery.fancybox-buttons.css", '', '', '' );
    wp_enqueue_style( 'jq-fancybox-thumbs', get_template_directory_uri() . "/css/jquery.fancybox-thumbs.css", '', '', '' );
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
    wp_enqueue_script('fancybox-pack', get_template_directory_uri() . "/js/jquery.fancybox.pack.js", '', '', 'true');
    wp_enqueue_script('fancybox-buttons', get_template_directory_uri() . "/js/jquery.fancybox-buttons.js", '', '', 'true');
    wp_enqueue_script('fancybox-media', get_template_directory_uri() . "/js/jquery.fancybox-media.js", '', '', 'true');
    wp_enqueue_script('fancybox-thumbs', get_template_directory_uri() . "/js/jquery.fancybox-thumbs.js", '', '', 'true');
    wp_enqueue_script('fixedsticky', get_template_directory_uri() . "/js/jquery.fixedsticky.min.js", '', '', 'true');
    wp_enqueue_script('sticky', get_template_directory_uri() . "/js/jquery.header-sticky.min.js", '', '', 'true');
    wp_enqueue_script('scroll', get_template_directory_uri() . "/js/jquery.scroll-to.min.js", '', '', 'true');
    wp_enqueue_script('barsik', get_template_directory_uri() . "/js/barsik.min.js", '', '', 'true');
} 

register_nav_menus(array(
    'top_menu' => __('Верхнее меню'),
    'aside_menu' => __('Мобильное меню'),
    'country' => __('Страны')
)); 

function shipping_date(){
    
    ob_start();

    $month = array( 
        1 => 
        'Января', 
        'Февраля', 
        'Марта' , 
        'Апреля' , 
        'Мая' , 
        'Июня' , 
        'Июля', 
        'Августа', 
        'Сентября', 
        'Октября', 
        'Ноября',
        'Декабря');
    $date =  date('d', strtotime('next saturday')) . " " . $month[date('m', strtotime('next saturday'))];
    

    echo '<div class="row"><div class="col-12"><p class="i-align_center data-desc"><b>Ближайшая отправка сборного контейнера в Россию <span class="blue-date">' . $date . ' июня</span></b></p></div></div>';

    return ob_get_clean();
}
add_shortcode('shipping', 'shipping_date');

function true_remove_category_from_category($cat_url) {
    $cat_url = str_replace('/category', '', $cat_url);
    return $cat_url;
}
add_filter('category_link', 'true_remove_category_from_category', 1, 1);

function the_advantages(){
    ob_start();
    echo '<section class="b-advantages-line">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="b-advantages-line__header">
                      Наши преимущества
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col w1-5 b-advantages-line__item">
                    <img src="/frontend/img-content/b-advantages-line_1.png" alt="Грузовик">
                    <div class="b-advantages-line__text">
                      Быстрые сроки доставки
                    </div>
                  </div>
                  <div class="col w1-5 b-advantages-line__item">
                    <img src="/frontend/img-content/b-advantages-line_2.png" alt="">
                    <div class="b-advantages-line__text">
                      Возможность отправки груза от 1 кг
                    </div>
                  </div>
                  <div class="col w1-5 b-advantages-line__item">
                    <img src="/frontend/img-content/b-advantages-line_3.png" alt="">
                    <div class="b-advantages-line__text">
                      Грамотное оформление документов и таможенная очистка грузов
                    </div>
                  </div>
                  <div class="col w1-5 b-advantages-line__item">
                    <img src="/frontend/img-content/b-advantages-line_4.png" alt="">
                    <div class="b-advantages-line__text">
                      Минимизация расходов клиента
                    </div>
                  </div>
                  <div class="col w1-5 b-advantages-line__item">
                    <img src="/frontend/img-content/b-advantages-line_5.png" alt="">
                    <div class="b-advantages-line__text">
                      Надежность и постоянство присутствия на рынке ВЭД
                    </div>
                  </div>
                </div>
              </div>
            </section>';
    return ob_get_clean();
}
add_shortcode('advantages', 'the_advantages');