import './bootstrap';
import 'flowbite';
import AOS from 'aos';
import 'aos/dist/aos.css';

document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
        duration: 600,
        once: true,
    });
});