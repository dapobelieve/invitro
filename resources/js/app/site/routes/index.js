import {
    StoreIndex,
    StoreHome,
    StoreCart,
    StoreCheckout,
    StorePayment
} from "../components/store";

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
    }

]