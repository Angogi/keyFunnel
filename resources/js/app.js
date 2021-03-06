/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./_app');
require('./_appWebinar');
require('./_marketing');
require('./_appMariaCamila');
require('./jquery.waypoints.min');




window.Vue = require('vue');
import VueParticles from 'vue-particles'
Vue.use(VueParticles);


import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import Axios from 'axios'
Vue.use(Axios)




Vue.component('section-one', require('./components/SectionOneComponent.vue').default);
Vue.component('section-two', require('./components/SectionTwoComponent.vue').default);
Vue.component('section-three', require('./components/SectionThreeComponent.vue').default);
Vue.component('section-four', require('./components/SectionFourComponent.vue').default);
Vue.component('section-five', require('./components/SectionFiveComponent.vue').default);
Vue.component('section-six', require('./components/SectionSixComponent.vue').default);

Vue.component('free-evaluations', require('./components/FreeEvaluations.vue').default);
Vue.component('contacts', require('./components/Contacts.vue').default);

Vue.component('webdesign-showcase', require('./components/WebDesignShowcase.vue').default);
Vue.component('digital-marketing-showcase', require('./components/DigitalMarketingShowcase.vue').default);
Vue.component('landing', require('./components/Lading.vue').default);



Vue.component('section-footer', require('./components/FooterComponent.vue').default);
Vue.component('evaluation-form', require('./components/EvaluationForm.vue').default);
Vue.component('form-file-input', require('./components/FormFile.vue').default);
Vue.component('webinar-register-form', require('./components/WebinarRegisterForm.vue').default);

Vue.component('marketing-product-card', require('./components/MarketingProductCard.vue').default);


Vue.component('banner-ads-vo', require('./components/BannerAdsToVirtualOffice.vue').default);

Vue.component('maria-camila', require('./components/MariaCamila.vue').default);
Vue.component('slider-camila', require('./components/SliderMariaCamila.vue').default);
Vue.component('landing-page', require('./components/LandingPage.vue').default);
// Vue.component('banner-home-page', require('./components/BannerHomePage.vue').default);





import router from './routes'

const app = new Vue({
    el: '#app',
    router
});


