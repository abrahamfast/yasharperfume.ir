/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('shop-product-button-component', require('./components/ShopProductButtonComponent.vue').default);
Vue.component('register-component', require('./components/RegisterComponent.vue').default);
Vue.component('profile-header-component', require('./components/ProfileHeaderComponent.vue').default);
Vue.component('profile-body-component', require('./components/ProfileBodyComponent.vue').default);
Vue.component('login-component', require('./components/LoginComponent.vue').default);
Vue.component('profile-card-component', require('./components/ProfileCardComponent.vue').default);


if (process.env.MIX_ENV_MODE === 'production') {
    Vue.config.devtools = false;
    Vue.config.debug = false;
    Vue.config.silent = true;
} else {
    Vue.config.devtools = true;
    Vue.config.debug = true;
}

const app = new Vue({
    el: '#app',
    data: {
    	cartList: [],
    	globalAccount: false
    }

});
