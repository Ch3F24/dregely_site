import './bootstrap';
import '../css/app.css';

// let headerHeight = document.querySelector('header').offsetHeight;
// let footerHeight = document.querySelector('footer').offsetHeight;
// let main = document.querySelector('main');
// console.log(headerHeight)
// document.documentElement.style.setProperty('--header-height', headerHeight + 'px');
// document.documentElement.style.setProperty('--footer-height', footerHeight + 'px');
// document.querySelector('main').style.height = (document.documentElement.offsetHeight - headerHeight - footerHeight) + 'px';
const mediaQuery = window.matchMedia('(min-width: 768px)')
const main = document.querySelector('main');

function setMainHeight() {
    let headerHeight = document.querySelector('header').offsetHeight;
    let footerHeight = document.querySelector('footer').offsetHeight;

    if (mediaQuery.matches) {
        main.style.height = (document.documentElement.offsetHeight - headerHeight - footerHeight) + 'px';
    } else {
        main.style.height = 'auto'
    }
}

setMainHeight();

addEventListener('resize', setMainHeight);

// document.documentElement.addEventListener('resize',setMainHeight);


