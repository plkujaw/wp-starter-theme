import Swiper, { Navigation, Pagination } from 'swiper';

class Carousel {
  constructor() {
    const swiper = new Swiper('.swiper', {
      // configure Swiper to use modules
      modules: [Navigation, Pagination],
    });
    console.log('carousel');
  }
}

export default Carousel;
