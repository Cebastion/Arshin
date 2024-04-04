<div class="question">
  <div class="question__title">
    <h2>Остались <span class="red">вопросы?</span></h2>
  </div>
  <div class="question__block">
    <div class="question__row">
      <form action='../server/server.php' method="post" class="question__form form validate-form" onsubmit="return validateForm(this)">
        <div class="question__phone">
          <span>Звоните:<a href="tel:+74951913074">	<span  class="bold">+7(495) 191-30-74</span></a>
</span>
        </div>
        <div class="question__text">
          <span>Оставьте свои контактные данные, и мы свяжемся с вами в течение 3 мин.</span>
        </div>
        <!--<input class='form__name lead_client_name' name='lead_client_name' id='lead_client_name' type="text" placeholder='Ваше имя'>-->
        <input class='form__phone lead_phone' name='lead_phone' id='lead_phone' type="tel" placeholder='Номер телефона'>
        <div class="checkbox">
          <input type="checkbox" id="customCheckbox" class="custom-checkbox" checked>
          <label for="customCheckbox" class="checkbox-label">Я принимаю <a href='./PrivacyPolicy.php'>условия политики конфиденциальности</a></label>
        </div>
        <button class="question__button button">
          Оставить заявку
        </button>
      </form>
      <div class="question__image">
        <img src="./image/woman.webp" alt="woman">
      </div>
    </div>
  </div>
</div>