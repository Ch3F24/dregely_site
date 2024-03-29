import './bootstrap';
// import '../css/app.css';
document.addEventListener('contextmenu', event => event.preventDefault());

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

const myElement = document.querySelectorAll('#gallery-list')[1];
const activeElement = myElement.querySelector('.active');
if (activeElement) {
    setTimeout(() => {
        myElement.scrollTop = activeElement.offsetTop - myElement.offsetTop
    },200)
}
