// resources/js/app.js
import Swiper from 'swiper';
import { Virtual, Autoplay } from 'swiper/modules';

// Styles (core + module styles)
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


document.addEventListener('DOMContentLoaded', () => {
  const slides = [
    '<img src="http://192.168.1.12/img/ppdb.png" />',
    '<img src="http://192.168.1.12/img/ppdb2.png" />',
    '<img src="http://192.168.1.12/img/ppdb3.png" />',
    '<img src="http://192.168.1.12/img/ppdb4.png" />',
    '<img src="http://192.168.1.12/img/profilsekolah.png" />',
    '<img src="http://192.168.1.12/img/doc1.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
    '<img src="http://192.168.1.12/img/doc2.png" />',
  ];

  const swiper = new Swiper('.swiper', {
    modules: [Virtual, Autoplay],
    slidesPerView: 'auto',
    spaceBetween: 20,
    loop: true, 

    virtual: { slides },

    freeMode: true,           // geser bebas
    freeModeMomentum: false,

    autoplay: {
      delay: 0,       // jeda 3 detik
      disableOnInteraction: false, // tetap jalan meskipun user klik navigasi
    },
    speed: 3000,
  });
});
