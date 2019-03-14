import {
    TrainingHome,
    TrainingList,
    TrainingCreate
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
            }

        ]
    }
]