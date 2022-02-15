const menu = document.querySelector(".navi__menu");
const burger = document.querySelector('.navi__menu__burger');
const options = document.querySelector('.navi__options');
menu.addEventListener('click', () => {
    burger.classList.toggle('navi__menu__burger--open');
    options.classList.toggle('navi__options--close');
})