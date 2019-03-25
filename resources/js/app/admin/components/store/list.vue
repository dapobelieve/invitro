<template>
    <div class="store-list">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">

                    <!--<div class="alert alert-info">-->
                    <!--Welcome in the <strong>Unicorn Admin Theme</strong>. Don't forget to check all the pages!-->
                    <!--<a href="#" data-dismiss="alert" class="close">×</a>-->
                    <!--</div>-->
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <h5>All Store items</h5>
                            <!--<div class="buttons">-->
                            <!--<a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>-->
                            <!--</div>-->
                        </div>
                        <div class="widget-content">
                            <loader v-if="!data.products"></loader>
                            <table v-else class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(data, index) in data.products">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ data.name }}</td>
                                    <td>&#8358{{ (data.price).toLocaleString() }}</td>
                                    <td>
                                        <router-link
                                                :to="{name: 'train-detail', params:{id: data.id}}"
                                                class="btn btn-primary btn-xs">Details
                                        </router-link>
                                        <router-link
                                                :to="{name: 'train-detail', params:{id: data.id}}"
                                                class="btn btn-info btn-xs">Edit
                                        </router-link>
                                        <button @click="deleteItem(data.id)" type="submit" class="btn btn-danger btn-xs">Delete</button>
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
        name: "list",
        data () {
            return {
                data: []
            }
        },
        methods: {
            deleteItem(id) {
                this.$swal.fire({
                    title: 'Are you sure you want to delete this item?',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',

                })
                .then((result) => {
                    axios.get(`api/delete/${id}`)
                    .then(response => {
                        Bus.$emit('item-deleted');
                        this.data.products = this.data.products.filter(item => {
                            return item.id !== id;
                        })
                        this.$swal(response.data.message);
                    })
                })
            },
            getStoreItems() {
                axios.get('api/products')
                    .then(response => {

                        this.data = response.data.data
                    })
                    .catch(error => {
                        console.log(error.response)
                    })
            }
        },
        components: {
            loader
        },
        mounted () {
            this.getStoreItems();
        }
    }
</script>

<style scoped>

</style>