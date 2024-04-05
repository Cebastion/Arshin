function validateForm(form) {
    var nameField = form.querySelector('.lead_client_name')
    var phoneField = form.querySelector('.lead_phone')
    var checkbox = form.querySelector('.custom-checkbox')

    /*if (nameField.value.trim() === "") {
        alert("Пожалуйста, введите ваше имя.")
        return false
    }*/

    if (phoneField.value.trim() === "") {
        alert("Пожалуйста, введите номер телефона.")
        return false
    }

    // Проверяем наличие чекбокса перед его использованием
    if (checkbox && !checkbox.checked) {
        alert("Для продолжения необходимо принять условия политики конфиденциальности.")
        return false
    }

    // Отправка данных на сервер
    const xhr = new XMLHttpRequest()
    xhr.open("POST", "../server/server.php", true)
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText)
        }
    }
    const data = `lead_phone=${encodeURIComponent(phoneField.value)}`
    xhr.send(data)

    // Перенаправление на thanks.php после отправки данных
    window.location.href = "./thanks.php"
    form.reset()

    return false
}

//lead_client_name=${encodeURIComponent(nameField.value)}