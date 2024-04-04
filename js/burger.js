document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector('.header')
    const burgers = document.querySelectorAll('.burger')
    const menu = document.querySelector('.header__menu')
    const header__bottom = document.querySelector('.header__bottom')
    const screenWidth = window.innerWidth

    burgers.forEach(burger => {
        burger.addEventListener("click", () => {
            header.classList.toggle("active")
            menu.classList.toggle("active")
            burger.classList.toggle("active")
            if (screenWidth <= 695) {
                header__bottom.classList.toggle('mobile')
            }
        })
    })
})