const navAppear = () => {
    const menuBtn = document.querySelector('.menu-btn');
    const nav = document.querySelector('.nav__list');

    menuBtn.addEventListener('click', () => {
        nav.classList.toggle('nav-active');
        menuBtn.classList.toggle('toggle');
    });
}

navAppear();