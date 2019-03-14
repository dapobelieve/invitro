<template>
    <div class="index">
        <div class="container-fluid">

            <div class="row">
                <div class="col-xs-12 center" style="text-align: center;">
                    <ul class="stats-plain">
                        <li>
                            <h4>36094</h4>
                            <span>Total Visits</span>
                        </li>
                        <li>
                            <h4>1433</h4>
                            <span>Users Registered</span>
                        </li>
                        <li>
                            <h4>8650</h4>
                            <span>Completed Orders</span>
                        </li>
                        <li>
                            <h4>29</h4>
                            <span>Pending Orders</span>
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
    export default {
        name: "index"
    }
</script>

<style scoped>

</style>