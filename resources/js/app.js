/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./_app');
require('./jquery.waypoints.min');


window.Vue = require('vue');
import VueParticles from 'vue-particles'
Vue.use(VueParticles);


import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
Vue.use(BootstrapVue)
Vue.use(IconsPlugin)

import Axios from 'axios'
Vue.use(Axios)




/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))


Vue.component('section-one', require('./components/SectionOneComponent.vue').default);
Vue.component('section-two', require('./components/SectionTwoComponent.vue').default);
Vue.component('section-three', require('./components/SectionThreeComponent.vue').default);
Vue.component('section-four', require('./components/SectionFourComponent.vue').default);
Vue.component('section-five', require('./components/SectionFiveComponent.vue').default);
Vue.component('section-six', require('./components/SectionSixComponent.vue').default);

Vue.component('dashboard', require('./components/Dashboard.vue').default);

Vue.component('webdesign-showcase', require('./components/WebDesignShowcase.vue').default);
Vue.component('digital-marketing-showcase', require('./components/DigitalMarketingShowcase.vue').default);
Vue.component('landing', require('./components/Lading.vue').default);



Vue.component('section-footer', require('./components/FooterComponent.vue').default);

Vue.component('evaluation-form', require('./components/EvaluationForm.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});


