const currentMonthYear = document.getElementById("currentMonthYear");
const calendarDays = document.getElementById("calendarDays");
const prevMonthButton = document.getElementById("prevMonth");
const nextMonthButton = document.getElementById("nextMonth");
const sendDataButton = document.querySelector(".order__button");
const phoneNumberInput = document.querySelector(".order__phone");
const agreementCheckbox = document.getElementById("customCheckboxCalendar");

phoneNumberInput.addEventListener("input", () => {
    const inputValue = phoneNumberInput.value.replace(/\D/g, "");
    const formattedValue = formatPhoneNumber(inputValue);
    phoneNumberInput.value = formattedValue;
});

function formatPhoneNumber(input) {
    const matches = input.match(/^(\d{1})(\d{3})(\d{3})(\d{4})$/);
    if (matches) {
        return `${matches[1]}${matches[2]}${matches[3]}${matches[4]}`;
    }
    return input;
}

let currentDate = new Date();

function renderCalendar() {
    const lastDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0);

    currentMonthYear.textContent = `${currentDate.toLocaleString('default', { month: 'long' })} ${currentDate.getFullYear()}`;

    calendarDays.innerHTML = "";

    for (let day = 1; day <= lastDayOfMonth.getDate(); day++) {
        const dayElement = createDayElement(new Date(currentDate.getFullYear(), currentDate.getMonth(), day));
        calendarDays.appendChild(dayElement);
    }
}

function createDayElement(date) {
    const dayElement = document.createElement("div");
    dayElement.classList.add("calendar-day");
    dayElement.textContent = date.getDate();
    dayElement.addEventListener("click", () => {
        const allDayElements = document.querySelectorAll(".calendar-day");
        allDayElements.forEach(element => {
            element.classList.remove("selected-day");
        });
        dayElement.classList.add("selected-day");
    });
    return dayElement;
}

function sendDataToServer(userName, userPhone, formattedDate) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "../server/server.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    const data = `lead_client_name=${encodeURIComponent(userName)}&lead_phone=${encodeURIComponent(userPhone)}&client_description=${encodeURIComponent(formattedDate)}&date=${encodeURIComponent(formattedDate)}`;
    xhr.send(data);
}

renderCalendar();

prevMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() - 1);
    renderCalendar();
});

nextMonthButton.addEventListener("click", () => {
    currentDate.setMonth(currentDate.getMonth() + 1);
    renderCalendar();
});

sendDataButton.addEventListener("click", () => {
    const selectedDay = document.querySelector(".selected-day");
    const userNameInput = document.querySelector(".order__name");
    
    if (!userNameInput.value.trim()) {
        alert("Пожалуйста, введите ваше имя.");
        return;
    }

    if (!phoneNumberInput.value.trim()) {
        alert("Пожалуйста, введите номер телефона.");
        return;
    }

    if (!agreementCheckbox.checked) {
        alert("Для продолжения необходимо принять условия политики конфиденциальности.");
        return;
    }

    if (!selectedDay) {
        alert("Пожалуйста, выберите день в календаре.");
        return;
    }

    const date = new Date(currentDate.getFullYear(), currentDate.getMonth(), parseInt(selectedDay.textContent));
    const userName = userNameInput.value;
    const userPhone = phoneNumberInput.value;

    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    const formattedDate = `${day}/${month}/${year}`;

    sendDataToServer(userName, userPhone, formattedDate);

    selectedDay.classList.remove("selected-day");
    userNameInput.value = "";
    phoneNumberInput.value = "";
    agreementCheckbox.checked = false;
    window.location.href = "./thanks.php";
});
