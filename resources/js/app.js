import './bootstrap';
import '../css/app.css';

let headerHeight = document.querySelector('header').offsetHeight;
let footerHeight = document.querySelector('footer').offsetHeight;

// console.log(headerHeight)
document.documentElement.style.setProperty('--header-height', headerHeight + 'px');
document.documentElement.style.setProperty('--footer-height', footerHeight + 'px');

