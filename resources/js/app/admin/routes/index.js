import {
    TrainingHome,
    TrainingList,
    TrainingCreate,
    TrainingDetails
} from '../components/training/'

import {
    StoreHome,
    StoreIndex,
    StoreOrders,
    StoreCreate
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
                path: 'training-details/:id',
                component: TrainingDetails,
                name: 'train-detail'
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
            }
        ]
    }
]