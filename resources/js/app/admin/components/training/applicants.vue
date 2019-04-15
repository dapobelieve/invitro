<template>
    <div class="store-list">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <h5>Applications for </h5>
                        </div>
                        <div class="widget-content">
                            <loader v-if="!data.training"></loader>
                            <table v-else class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Discipline</th>
                                    <th>Status</th>
                                    <th>Reference</th>
                                    <th>options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(data, index) in data.training.applications">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ data.name }}</td>
                                    <td>{{ data.email }}</td>
                                    <td>{{ data.phone }}</td>
                                    <td>{{ data.occupation }}</td>
                                    <td>{{ data.payment.status }}</td>
                                    <td><strong>{{ data.reference }}</strong></td>
                                    <!--<td>&#8358{{ (data.price).toLocaleString() }}</td>-->
                                    <td>
                                        <!--<router-link-->
                                                <!--:to="{name: 'product-edit', params:{id: data.id}}"-->
                                                <!--class="btn btn-info btn-xs">Details-->
                                        <!--</router-link>-->
                                        <!--<button @click="deleteItem(data.id)" type="submit" class="btn btn-danger btn-xs">Delete</button>-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

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
        data () {
            return {
                data: []
            }
        },
        methods: {
            //
        },
        components: {
            loader
        },
        mounted () {
            // alert(this.$route.params.id)
            axios.get(`api/get-applicants/${this.$route.params.id}`)
                .then(response => {
                    this.data = response.data.data
                })
        }
    }
</script>

<style scoped>

</style>