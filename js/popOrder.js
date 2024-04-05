const buttons = document.querySelectorAll('.buy')
const body = document.body
let openCard = null

buttons.forEach(button => {
  button.addEventListener("click", () => {
    if (openCard) {
      openCard.remove()
    }
    let CodeHTML =
      `
<div class="card__pop">
  <div class="blur"></div>
  <div class="pop__block">
    <div class="pop__title">
      <h2>Заказать поверку счетчика воды</h2>
      <div class="close"></div>
    </div>
    <form action='../server/server.php' method="post" class="pop__form form">
      <!--<input type="text" name='lead_client_name' class="lead_client_name" id='lead_client_name' placeholder='Ваше имя'>-->
      <input type="tel" name='lead_phone' id='lead_phone' class="lead_phone" placeholder='Номер телефона'>
      <button class="pop__button button">
        Заказать
      </button>
      <div class="checkbox">
        <input type="checkbox" id="customCheckboxPop" class="custom-checkbox">
        <label for="customCheckboxPop" class="checkbox-label">Я принимаю <a href='./PrivacyPolicy.php'>условия политики конфиденциальности</a></label>
      </div>
    </form>
  </div>
</div>
`
    body.insertAdjacentHTML('beforeend', CodeHTML)

    let closecard = document.querySelector('.close')
    let card = document.querySelector('.card__pop')
    openCard = card
    const popBlock = document.querySelector('.pop__block');
    popBlock.classList.add('active');
    const clearButton = card.querySelector(".button")


    const form = card.querySelector(".pop__form"); // Select the form inside the card
    popBlock.style.animation = "formAppear 0.3s ease";

        form.addEventListener("submit", (event) => {
            event.preventDefault(); // Prevent the default form submission
            
            //const nameField = form.querySelector('.lead_client_name');
            const phoneField = form.querySelector('.lead_phone');
            const checkbox = form.querySelector('.custom-checkbox');

            // if (nameField.value.trim() === "") {
            //     alert("Пожалуйста, введите номер счетчика.");
            //     return;
            // }

            if (phoneField.value.trim() === "") {
                alert("Пожалуйста, введите номер телефона.");
                return;
            }

            if (!checkbox.checked) {
                alert("Для продолжения необходимо принять условия политики конфиденциальности.");
                return;
            }

            const formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open("POST", "../server/server.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        console.log("Данные успешно отправлены на сервер.");
                        // Перенаправление на thanks.php после успешной отправки данных
                        window.location.href = './thanks.php';
                        form.reset();
                    } else {
                        console.error("Произошла ошибка при отправке данных на сервер.");
                    }
                }
            };
            //lead_client_name=${encodeURIComponent(nameField.value)}&
            var data = `lead_phone=${encodeURIComponent(phoneField.value)}`;
            xhr.send(data);
        });

    closecard.addEventListener("click", () => {
      card.remove()
      openCard = null
    })
  })
})