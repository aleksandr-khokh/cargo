  <footer class="b-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 b-footer__left">
          <a href="/">
            <img alt="" class="b-footer__logo-img" src="frontend/img/logo.png">
          </a>
        </div>
        <div class="col-lg-7">
          <div class="row">
            <div class="col-lg-4">
              <ul class="b-footer-list b-footer-list_top">
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-evropy">Доставка грузов из Европы</a></li>
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-kitaya">Доставка грузов из Китая</a></li>
                <li class="b-footer-list__item"><a href="dostavka-gruzov-iz-ameriki">Доставка грузов из США</a></li>
              </ul>
               <a href="/otzyvy" class="review-link">Отзывы клиентов</a>
               <a href="/news" class="review-link">Новости и статьи</a>
            </div>
            <div class="col-lg-4">
              <ul class="b-footer-list b-footer-list_top">
                <li class="b-footer-list__item"><a href="sbornye-gruzy">Доставка сборных грузов</a></li>
                <li class="b-footer-list__item"><a href="tamozhennoe-oformlenie">Таможенное оформление</a></li>
                <li class="b-footer-list__item"><a href="perevozka-generalnykh-gruzov">Генеральные грузы</a></li>
                <li class="b-footer-list__item"><a href="perevozka-negabaritnykh-gruzov">Негабаритные грузы</a></li>
                <li class="b-footer-list__item"><a href="perevozka-opasnyh-gruzov/">Перевозка опасных грузов</a></li>
              </ul>
            </div>
            <div class="col-lg-4">
              <div class="b-footer__phone">
                8 (915) 261 60 24
              </div>
              <div class="b-footer__email">
                info@cargo-trading.ru
              </div>
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
        <h5 class="modal-title" id="cbModalLabel">Перезвоним через 2 минуты</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="/wp-content/themes/fishplanet/mail.php" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <input type="text" class="form-control form-input-name" placeholder="Введите имя" name="name">
          </div>
          <div class="form-group">
            <input type="phone" class="form-control form-input-phone" placeholder="Введите телефон" name="phone" required>
          </div>
        </div><!-- modal-body -->

        <div class="modal-footer">
          <input type="submit" id="btn-submit" class="btn btn-secondary" value="Отправить заявку">
        </div><!-- modal-footer -->

        <p class="desc small grey">Нажимая кнопку «Заказать звонок», Вы даете свое <a href="/privacy/" class="grey" target="_blank" title="Политика конфиденциальности">согласие на обработку персональных данных.</a></p>
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

<?php wp_footer(); ?>

</body>
</html>