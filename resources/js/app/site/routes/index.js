import {
    StoreIndex,
    StoreHome,
    StoreCart,
    StoreCheckout,
    StorePayment,
    StoreDetails
} from "../components/store";

import {
    TrainIndex,
    TrainHome,
    TrainDetails,
    TrainRegister
} from "../components/training";

export default [
    {
        path: '/products',
        component: StoreIndex,
        children: [
            {
                path: '',
                component: StoreHome,
                name: 'store-home'
            },
            {
                path: '/product-details/:slug',
                component: StoreDetails,
                name: 'store-product-details'
            },
            {
                path: '/cart',
                component: StoreCart,
                name: 'store-cart'
            },
            {
                path: '/checkout',
                component: StoreCheckout,
                name: 'store-checkout'
            },
            {
                path: '/payment/:ref',
                component: StorePayment,
                name: 'store-pay'
            }
        ]
    },
    {
        path: '/trainings',
        component: TrainIndex,
        children: [
            {
                path: '',
                component: TrainHome,
                name: 'train-home'
            },
            {
                path: '/details/:slug',
                component: TrainDetails,
                name: 'train-details',
            },
            {
                path: '/register/:slug',
                component: TrainRegister,
                name: 'train-register'
            }
        ]
    }

]