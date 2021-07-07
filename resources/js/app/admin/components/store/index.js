import Vue from 'vue'

export const StoreIndex = Vue.component('store-index', require('./index.vue'));
export const StoreHome = Vue.component('store-home', require('./list'));
export const StoreOrders = Vue.component('store-orders', require('./orders'));
export const StoreCreate = Vue.component('store-create', require('./create'));
export const StoreEdit = Vue.component('store-edit', require('./edit'));
export const StoreOrderDetails = Vue.component('store-order-details', require('./order-details'));