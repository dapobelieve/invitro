<template>
    <div class="list-training">
        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fa fa-signal"></i></span>
                        <h5>Current Trainngs</h5>
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
                                <td>&#8358{{ (data.price).toLocaleString() }}</td>
                                <td v-if="data.get_applications_count.length">
                                    {{ data.get_applications_count[0]["count"] }}
                                </td>
                                <td v-else> 0 </td>
                                <td>
                                    <router-link
                                            :to="{name: 'train-app', params:{id: data.id}}"
                                            class="btn btn-success btn-xs">Applicants
                                    </router-link>
                                    <router-link
                                            :to="{name: 'train-edit', params:{id: data.id}}"
                                            class="btn btn-primary btn-xs">Edit
                                    </router-link>
                                    <button @click="deleteItem(data.id)" class="btn btn-danger btn-xs">Delete</button>
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
            },
            deleteItem(id) {
                this.$swal.fire({
                    title: 'Are you sure you want to delete this item?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',

                })
                    .then((result) => {
                        axios.delete(`api/delete-training/${id}`)
                            .then(response => {
                                // Bus.$emit('item-deleted');
                                this.data.trainings = this.data.trainings.filter(item => {
                                    return item.id !== id;
                                })
                                this.$swal(response.data.message);
                            })
                    })
            },
        },
        mounted() {
            this.getTrainings();
            Bus.$emit('hideParentView', false);

        }
    }
</script>

<style scoped>

</style>