import {
    TrainingHome,
    TrainingList,
    TrainingCreate,
    TrainingDetails,
    TrainingApplicants,
    TrainingEdit
} from '../components/training/'

import {
    StoreHome,
    StoreIndex,
    StoreOrders,
    StoreCreate,
    StoreEdit,
    StoreOrderDetails
} from '../components/store/'

export default [
    {
        path: '/home',
        component: TrainingHome,
        children: [
            {
                path: '',
                component: TrainingList,
                name: 'train-list'
            },
            {
                path: '/create-training',
                component:TrainingCreate,
                name: 'train-create'
            },
            {
                path: '/edit-training/:id',
                component:TrainingEdit,
                name: 'train-edit'
            },
            {
                path: 'training-details/:id',
                component: TrainingDetails,
                name: 'train-detail'
            },
            {
                path: '/training-applicants/:id',
                component: TrainingApplicants,
                name: 'train-app'
            }

        ]
    },
    {
        path: '/store',
        component: StoreIndex,
        children: [
            {
                path: '',
                component: StoreHome,
                name: 'product-home'
            },
            {
                path: 'orders',
                component: StoreOrders,
                name: 'product-orders'
            },
            {
                path: 'create',
                component: StoreCreate,
                name: 'product-create'
            },
            {
                path: 'edit-product/:id',
                component: StoreEdit,
                name: 'product-edit'
            },
            {
                path: 'order-details/:ref',
                component: StoreOrderDetails,
                name: 'order-details'
            }
        ]
    }
]