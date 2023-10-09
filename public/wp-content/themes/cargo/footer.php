  <footer class="b-footer">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-4 col-lg-5 b-footer__left">
          <a href="/"><img class="b-footer__logo-img" src="/frontend/img/logo.png" alt=""></a>
        </div>
        <div class="col-md-8 col-lg-7">
          <div class="row">
            <div class="d-none d-md-block col-md-6 col-lg">
              <ul class="b-footer-list b-footer-list_top">
                <li class="b-footer-list__item"><a href="/dostavka-gruzov-iz-evropy">Доставка грузов из Европы</a></li>
                <li class="b-footer-list__item"><a href="/dostavka-gruzov-iz-kitaya">Доставка грузов из Китая</a></li>
                <li class="b-footer-list__item"><a href="/dostavka-gruzov-iz-ameriki">Доставка грузов из США</a></li>
              </ul>
               <a href="/otzyvy" class="b-footer-review-link">Отзывы клиентов</a>
               <a href="/news" class="b-footer-review-link">Новости и статьи</a>
            </div>
            <div class="d-none d-lg-block col-lg">
              <ul class="b-footer-list b-footer-list_top">
                <li class="b-footer-list__item"><a href="/sbornye-gruzy">Доставка сборных грузов</a></li>
                <li class="b-footer-list__item"><a href="/tamozhennoe-oformlenie">Таможенное оформление</a></li>
                <li class="b-footer-list__item"><a href="/perevozka-generalnykh-gruzov">Генеральные грузы</a></li>
                <li class="b-footer-list__item"><a href="/perevozka-negabaritnykh-gruzov">Негабаритные грузы</a></li>
                <li class="b-footer-list__item"><a href="/perevozka-opasnyh-gruzov/">Перевозка опасных грузов</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg">
              <p class="b-footer__phone">+7 (495) 743-02-64</p>
              <p class="b-footer__email">info@cargo-trading.ru</p>
              <div class="b-footer__adress">
                127473, г.Москва, <a href="/contacts" title="Контакты">Проспект Маршала Жукова 76/2</a>
              </div>
              <div class="b-footer__link">Разработка <a href="//mad-dog.ru">mad-dog.ru</a></div>
              <!-- <div class="b-footer__pitech"></div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

</main> <!-- #container -->

<!-- Modal Call-Back -->
<div class="modal fade" id="cbModal" tabindex="-1" role="dialog" aria-labelledby="cbModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-md modal-dialog-centered" role="document">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cbModalLabel">Перезвоним в блжайшее время</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/wp-content/themes/cargo/mail.php" method="POST" class="call-back-form">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control form-input-name" placeholder="Введите имя" name="name">
          </div>
          <div class="form-group">
            <input type="phone" class="form-control form-input-phone" placeholder="Введите телефон" name="phone" required>
          </div>
        </div><!-- modal-body -->

        <div class="modal-footer justify-content-center">
          <input type="submit" id="btn-submit" class="btn b-btn_color_blue" value="Отправить заявку">
        </div><!-- modal-footer -->
        <input id="prodId" name="modal_hidden_form" type="hidden" value="z8C6e">
      </form>

      <!-- result -->
      <div class="form-result red">
        <p>Спасибо за Вашу заявку!</p>
        <hr class="bg-red">
        <p>Мы перезвоним Вам в ближайшее время</p>
      </div>

    </div>

  </div>
</div>


<div class="order" style="display: none;" id="hidden-content">
  <div class="container">
    <form class="b-form b-form_order ajax_form call-back-form" method="post" action="/wp-content/themes/cargo/mail.php">
      <div class="row">
        <div class="col-12">
          <h4 class="b-form__header text-center">Оставьте заявку на расчет стоимости доставки груза</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6">
          <div class="b-form-group-line">
            <input class="b-form__input" placeholder="Название компании" type="text" name="company">
            <input class="b-form__input" placeholder="Контактное лицо*" type="text" name="name" required="true">
            <input class="b-form__input" placeholder="Телефон*" type="text" name="phone" required="true">
            <input class="b-form__input" placeholder="E-mail*" type="email" name="email" required="true">
          </div>
          <div class="b-form-group-line">
            Нужен ли транспорт?
            <label class="b-form__label b-form__label_radio"><input class="b-form__radio" name="radioTransport" value="Да" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Да</label>
            <label class="b-form__label b-form__label_radio"><input checked="" class="b-form__radio" name="radioTransport" value="Нет" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Нет</label>
          </div>
          <div class="b-form-group-line">
            Таможенное оформление?
            <label class="b-form__label b-form__label_radio"><input class="b-form__radio" name="radioTam" value="Да" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Да</label>
            <label class="b-form__label b-form__label_radio"><input checked="" class="b-form__radio" name="radioTam" value="Нет" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Нет</label>
          </div>
          <div class="b-form-group-line">
            Наличие контракта на поставку?
            <label class="b-form__label b-form__label_radio"><input class="b-form__radio" name="radioContract" value="Да" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Да</label>
            <label class="b-form__label b-form__label_radio"><input checked="" class="b-form__radio" name="radioContract" value="Нет" type="radio"><i class="b-icon-form b-icon-form_radio"></i>Нет</label>
          </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="b-form-group-line">
            <input class="b-form__input i-hide required" placeholder="Особенность груза*" type="text" name="item_spec">
            <input class="b-form__input" placeholder="Наименование груза" type="text" name="item_name">
            <input class="b-form__input" placeholder="Торговая марка" type="text" name="item_tm">
            <input class="b-form__input" placeholder="Производитель" type="text" name="item_vendor">
            <input class="b-form__input" placeholder="Код ТН ВЭД" type="text" name="item_tnved">
            <input class="b-form__input" placeholder="Общий вес груза, (кг)*" type="text" name="item_weight">
            <input class="b-form__input" placeholder="Количество мест" type="text" name="item_place">
            <input class="b-form__input" placeholder="Габаритные размеры (д*ш*в)*" type="text" name="item_volume">
            <input class="b-form__input" placeholder="Стоимость груза" type="text" name="item_cost">
          </div>
          <div class="b-form-group-line">
            <input class="b-form__input" placeholder="Место отправления*" type="text" name="item_start">
            <input class="b-form__input" placeholder="Место назначения" type="text" name="item_end">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col i-align_right">
          <input class="b-btn b-btn_color_yellow" value="Отправить" type="submit" /> 
        </div>
      </div>
      <input id="prodId" name="order_hidden_form" type="hidden" value="kDsG766">
    </form>

    <!-- result -->
    <div class="form-result red">
      <p>Спасибо за Вашу заявку!</p>
      <hr class="bg-red">
      <p>Мы перезвоним Вам в ближайшее время</p>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116305823-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-116305823-3');
</script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter30726213 = new Ya.Metrika({ id:30726213, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/30726213" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'JXJDsijvuo';
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);})();</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>