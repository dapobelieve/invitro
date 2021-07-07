import {
    StoreIndex,
    StoreHome,
    StoreCart,
    StoreCheckout,
    StorePayment,
    StoreDetails
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
    }

]