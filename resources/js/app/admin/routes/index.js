import {
    TrainingHome,
    TrainingList,
    TrainingCreate,
    TrainingDetails
} from '../components/training/'


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
    }
]