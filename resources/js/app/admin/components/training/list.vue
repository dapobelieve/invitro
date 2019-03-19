<template>
    <div class="list-training">
        <div class="row">
            <div class="col-xs-12">

                <!--<div class="alert alert-info">-->
                    <!--Welcome in the <strong>Unicorn Admin Theme</strong>. Don't forget to check all the pages!-->
                    <!--<a href="#" data-dismiss="alert" class="close">×</a>-->
                <!--</div>-->
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fa fa-signal"></i></span>
                        <h5>Current Trainngs</h5>
                        <!--<div class="buttons">-->
                            <!--<a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>-->
                        <!--</div>-->
                    </div>
                    <div class="widget-content">
                        <loader v-if="!data.trainings"></loader>
                        <table v-else class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th></th>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Applicants</th>
                                <th>options</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-for="(data, index) in data.trainings">
                                <td>{{ index + 1 }}</td>
                                <td>{{ data.title }}</td>
                                <td>N {{ data.price }}</td>
                                <td>45</td>
                                <td>
                                    <router-link
                                            :to="{name: 'train-detail', params:{id: data.id}}"
                                            class="btn btn-primary btn-xs">Details
                                    </router-link>
                                    <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import loader from '../../../../helpers/loader.vue'
    import Bus from '../../../../helpers/bus.js'
    export default {
        name: "list",
        data () {
            return {
                data: []
            }
        },
        components: {
            loader
        },
        methods: {
            getTrainings () {
                axios.get('api/all-trainings')
                .then(response => {
                    Bus.$emit('trainingCount', response.data.data.trainings.length);
                    this.data = response.data.data
                })
                .catch(error => {

                })
            }
        },
        mounted() {
            this.getTrainings();
            Bus.$emit('hideParentView', false);

        }
    }
</script>

<style scoped>

</style>