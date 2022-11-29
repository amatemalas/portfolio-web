import './bootstrap';
import './scrollProgress';
import './focus';
import '@fortawesome/fontawesome-free/js/all';
import AOS from 'aos';
import './animatedBg';
import './swiper';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({disable: 'mobile'});
})