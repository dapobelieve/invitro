<template>
    <div class="all-orders">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <h5>Orders</h5>
                        </div>
                        <div class="widget-content">
                            <loader v-if="!orders.length"></loader>
                            <table v-else class="table table-bordered table-responsive table-striped table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Amount</th>
                                    <th>Items</th>
                                    <th>Payment Ref.</th>
                                    <th>Date</th>
                                    <th>options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(data, index) in orders">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ data.name }}</td>
                                    <td>{{ data.email }}</td>
                                    <td>{{ data.phone }}</td>
                                    <td v-if="data.payment">&#8358{{ (data.payment.amount).toLocaleString() }}</td>
                                    <td v-else>Not Paid</td>
                                    <td>{{ data.items.length }}</td>
                                    <td v-if="data.payment">{{ formatDate(data.payment.updated_at) }}</td>
                                    <td v-else>N/A</td>
                                    <td v-if="data.payment"> <strong>{{ data.payment.payment_ref }} </strong></td>
                                    <td v-else>N/A</td>
                                    <td>
                                        <router-link
                                                :to="{name: 'order-details', params:{ref: data.ref}}"
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
    </div>
</template>
<script>
    import loader from '../../../../helpers/loader.vue'
    import moment from 'moment'
    export default {
        data () {
            return {
                orders: []
            }
        },
        methods: {
            formatDate(dDate) {
                return moment(dDate).format("MMM Do YY");
            },
            getOrders() {
                axios.get('api/orders')
                    .then((response) => {
                        this.orders = response.data.data.orders
                    })
            }
        },
        components: {
            loader
        },
        mounted() {
            this.getOrders()
        }
    }
</script>