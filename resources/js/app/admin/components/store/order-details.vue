<template>
    <div class="order-details">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <h5>Order Details</h5>
                        </div>
                        <div class="widget-content">
                            <div class="basic-info">
                                <h3>Customer's Information</h3>
                                <p>Name: {{ order.name}}</p>
                                <p>Email: {{ order.email}}</p>
                                <p>Phone: {{ order.phone}}</p>
                                <p>Address: {{ order.address}}</p>
                            </div>
                            <hr>
                            <table class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>item</th>
                                    <th>quantity</th>
                                    <th>price</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(data, index) in order.items">
                                        <td>{{ index + 1 }}</td>
                                        <td>{{ data.product.name }}</td>
                                        <td> {{ data.quantity }}</td>
                                        <td>&#8358{{ (data.product.price * data.quantity).toLocaleString() }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div v-if="order.payment" class="payment-info">
                                <h3>Payment Information</h3>
                                <p>Status: <strong>{{order.payment.status }}</strong></p>
                                <p>Amount: <strong>&#8358{{ (order.payment.amount).toLocaleString() }}</strong></p>
                                <p>Paystack Reference Code: <strong>{{  order.payment.payment_ref}}</strong></p>
                                <p>Transaction Reference : <strong>{{  order.ref}}</strong></p>
                                <p>Transaction Date : <strong>{{  formatDate(order.payment.updated_at)}}</strong></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment'
    import Bus from '../../../../helpers/bus.js'
    export default {
        data () {
            return {
                order: {}
            }
        },
        methods: {
            formatDate(dDate)
            {
                return moment(dDate).format('MMMM Do YYYY @ h:mm a')
            },
            getOrder(orderRef)
            {
                axios.get(`api/get-order/${orderRef}`)
                    .then(response => {
                        // Bus.$emit('')
                        this.order = response.data.data.order
                    })
            }
        },
        created() {
            this.getOrder(this.$route.params.ref)
        }
    }
</script>