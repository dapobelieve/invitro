import Vue from 'vue'


import { routes as routes } from '../app/index'

import Router from 'vue-router'

Vue.use(Router);

const router = new Router ({
    routes: routes
});


export default router