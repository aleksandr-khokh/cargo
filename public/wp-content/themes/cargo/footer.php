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
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-evropy">Доставка грузов из Европы</a></li>
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-kitaya">Доставка грузов из Китая</a></li>
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-ameriki">Доставка грузов из США</a></li>
              </ul>
               <a href="/otzyvy" class="b-footer-review-link">Отзывы клиентов</a>
               <a href="/news" class="b-footer-review-link">Новости и статьи</a>
            </div>
            <div class="d-none d-lg-block col-lg">
              <ul class="b-footer-list b-footer-list_top">
                <li class="b-footer-list__item"><a href="sbornye-gruzy">Доставка сборных грузов</a></li>
                <li class="b-footer-list__item"><a href="tamozhennoe-oformlenie">Таможенное оформление</a></li>
                <li class="b-footer-list__item"><a href="perevozka-generalnykh-gruzov">Генеральные грузы</a></li>
                <li class="b-footer-list__item"><a href="perevozka-negabaritnykh-gruzov">Негабаритные грузы</a></li>
                <li class="b-footer-list__item"><a href="perevozka-opasnyh-gruzov/">Перевозка опасных грузов</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg">
              <p class="b-footer__phone">8 (915) 261 60 24</p>
              <p class="b-footer__email">info@cargo-trading.ru</p>
              <div class="b-footer__skype"><i class="b-icon b-icon_skype"></i><a href="skype:cargo-tradin?call" rel="nofollow">cargo-trading</a></div>
              <div class="b-footer__adress">
                127473, г.Москва, <a href="contacts" title="Контакты">Проспект Маршала Жукова 76/2</a>
              </div>
              <!--div class="b-footer__pitech"></div-->
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

        <div class="modal-footer">
          <input type="submit" id="btn-submit" class="btn b-btn_color_blue" value="Отправить заявку">
        </div><!-- modal-footer -->
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
          <h4 class="b-form__header">Оставьте заявку на расчет стоимости доставки груза</h4>
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
            <input class="b-form__input i-hide required" placeholder="Особенность груза*" type="text" name="item-spec">
            <input class="b-form__input" placeholder="Наименование груза*" type="text" name="item-name">
            <input class="b-form__input" placeholder="Торговая марка*" type="text" name="item-tm">
            <input class="b-form__input" placeholder="Производитель*" type="text" name="item-vendor">
            <input class="b-form__input" placeholder="Код ТН ВЭД" type="text" name="item-tnved">
            <input class="b-form__input" placeholder="Общий вес груза, (кг)*" type="text" name="item-weight">
            <input class="b-form__input" placeholder="Количество мест" type="text" name="item-place">
            <input class="b-form__input" placeholder="Габаритные размеры (д*ш*в)*" type="text" name="item-volume">
            <input class="b-form__input" placeholder="Стоимость груза" type="text" name="item-cost">
          </div>
          <div class="b-form-group-line">
            <input class="b-form__input" placeholder="Место отправления*" type="text" name="item-start">
            <input class="b-form__input" placeholder="Место назначения" type="text" name="item-end">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col i-align_right">
          <input class="b-btn b-btn_color_yellow" value="Отправить" type="submit" /> 
        </div>
      </div>
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

</body>
</html>