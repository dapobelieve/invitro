import Vue from 'vue'

export const StoreIndex = Vue.component('store-index', require('./index.vue'))
export const StoreHome = Vue.component('store-home', require('./home.vue'))
export const StoreDetails = Vue.component('store-details', require('./product-details'))
export const StoreCart = Vue.component('store-cart', require('./cart.vue'))
export const StoreCheckout = Vue.component('store-checkout', require('./checkout'))
export const StorePayment = Vue.component('store-pay', require('./payment'))