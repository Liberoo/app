const menu = document.querySelector(".navi__menu");
const burger = document.querySelector('.navi__menu__burger');
const options = document.querySelector('.navi__options');
const items = document.querySelectorAll('.menu__item');
menu.addEventListener('click', () => {
    burger.classList.toggle('navi__menu__burger--open');
    options.classList.toggle('navi__options--close');
})

items.forEach(item => {
    item.addEventListener('click', () => {
        burger.classList.toggle('navi__menu__burger--open');
        options.classList.toggle('navi__options--close');
    })
})