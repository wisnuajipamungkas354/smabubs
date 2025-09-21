// resources/js/app.js
import Swiper from 'swiper';
import { Virtual, Autoplay } from 'swiper/modules';

// Styles (core + module styles)
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';


document.addEventListener('DOMContentLoaded', () => {
  let slides = [];
  for(let i = 1; i <= 30; i++) {
    slides = [...slides, `<img src="https://picsum.photos/300/300.webp?random=${i}" alt="dummy" class="object-cover h-full" />`];
  }

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
