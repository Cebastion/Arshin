function validateFormMeterNumber(form) {
    var MeterNumber = form.querySelector(".lead_client_meter_number");
    var phoneField = form.querySelector(".lead_phone");

    const trimmedValue = phoneField.value.trim();
    // Проверяем, что значение не пустое и не начинается с '+7'
    if (trimmedValue !== "" && !trimmedValue.startsWith("+7")) {
        // Добавляем '+7' в начало значения поля
        phoneField.value = "+7" + trimmedValue;
    } else if (trimmedValue === "+7") {
      // Если введено только '+7', убираем его
      phoneField.value = "";
  }

    if (MeterNumber.value.trim() === "") {
        alert("Пожалуйста, введите ваш номер счетчика.");
        return false;
    }

    if (phoneField.value.trim() === "") {
        alert("Пожалуйста, введите номер телефона.");
        return false;
    }

    // Отправка данных на сервер
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../server/server.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    const data = `lead_phone=${encodeURIComponent(
        phoneField.value
    )}&lead_client_meter_number=${MeterNumber.value}`;
    xhr.send(data);

    // Перенаправление на thanks.php после отправки данных
    window.location.href = "./thanks.php";
    form.reset();

    return false;
}
