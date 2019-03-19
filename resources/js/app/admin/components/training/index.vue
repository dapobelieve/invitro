<template>
    <div class="index">
        <div class="container-fluid">

            <div class="row">
                <div v-if="!hideParent" class="col-xs-12 center" easeIn style="text-align: center;">
                    <ul class="stats-plain">
                        <li>
                            <h4>{{ tCount }}</h4>
                            <span>Trainings Courses</span>
                        </li>
                        <li>
                            <h4>1433</h4>
                            <span>Users Registered</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <router-link class="btn btn-info" :to="{name: 'train-list'}">All Trainings</router-link>
                    <router-link class="btn btn-success" :to="{name: 'train-create'}">Add New</router-link>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Bus from '../../../../helpers/bus.js'
    export default {
        name: "index",
        data () {
            return {
                tCount: 0,
                hideParent: false
            }
        },
        mounted() {
            Bus.$on('trainingCount', (data) => {
                this.tCount = data
            });

            Bus.$on('hideParentView', (payLoad) => {
                this.hideParent = payLoad;
            })
        }
    }
</script>

<style scoped>

</style>