
<template>
  <swiper class="swiper" :options="swiperOption">
    <swiper-slide><h1>Lleva tu negocio al<br><span>Siguiente Nivel</span></h1></swiper-slide>
    <swiper-slide><h1>Lleva tu negocio al<br><span>Siguiente Nivel</span></h1></swiper-slide>
    <swiper-slide><h1>Lleva tu negocio al<br><span>Siguiente Nivel</span></h1></swiper-slide>
    <swiper-slide><h1>Lleva tu negocio al<br><span>Siguiente Nivel</span></h1></swiper-slide>
    
    <div class="swiper-pagination" slot="pagination"></div>
    <div class="swiper-button-prev" slot="button-prev"></div>
    <div class="swiper-button-next" slot="button-next"></div>
  </swiper>
</template>

<script>
//   import { Swiper, SwiperSlide } from 'vue-awesome-swiper'
//   import 'swiper/css/swiper.css'

  export default {
    name: 'swiper-example-autoplay',
    title: 'Autoplay',
    components: {
      Swiper,
      SwiperSlide
    },
    data() {
      return {
        swiperOption: {
          spaceBetween: 30,
          centeredSlides: true,
          autoplay: {
            delay: 2500,
            disableOnInteraction: false
          },
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
          }
        }
      }
    }
  }
</script>

<style lang="scss" scoped>
  // @import './base.scss';
</style>