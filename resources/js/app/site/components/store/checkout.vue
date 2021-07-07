<template>
    <div class="shop-checkout">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Checkout</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a href="index.html">
                                Home
                            </a> </li>
                            <li> <router-link :to="{name: 'store-home'}">Shop</router-link>
                                <!--<a href="#"></a> </li>-->
                            <li class="active">Checkout</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">
                        <!--<div class="shop-info">Returning customer?-->
                            <!--<a data-toggle="collapse" href="#registeredForm" aria-expanded="false" aria-controls="registeredForm">-->
                                <!--Click here to login-->
                            <!--</a>-->
                        <!--</div>-->
                        <div class="collapse" id="registeredForm">
                            <form class="checkout with_border with_padding form-horizontal" role="form">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>
                                <div class="form-group"> <label for="username" class="col-sm-3 control-label">
                                    <span class="grey">Nick or email:</span>
                                    <span class="required">*</span>
                                </label>
                                    <div class="col-sm-9"> <input type="text" class="form-control" name="username" id="username"> </div>
                                </div>
                                <div class="form-group"> <label for="password" class="col-sm-3 control-label">
                                    <span class="grey">Password:</span>
                                    <span class="required">*</span>
                                </label>
                                    <div class="col-sm-9"> <input class="form-control" type="password" name="password" id="password"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <div class="checkbox"> <label for="rememberme" class="control-label">
                                            <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                                            Remember me
                                        </label> </div> <input type="submit" class="theme_button color1 topmargin_20" name="login" value="Login">
                                        <div class="lost_password"> <a href="#">Lost your password?</a> </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <h2>Personal Information</h2>
                        <form class="form-horizontal checkout shop-checkout" role="form">

                            <div class="form-group validate-required" >
                                <label for="billing_first_name" class="col-sm-3 control-label">
                                    <span class="grey">Full Name:</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" v-model="form.name" placeholder="Full Name" value="">
                                </div>
                            </div>
                            <div class="form-group validate-required" id="billing_last_name_field">
                                <label for="billing_last_name" class="col-sm-3 control-label">
                                    <span class="grey">Email Address:</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" v-model="form.email" placeholder="Email Address" value="">
                                </div>
                            </div>
                            <div class="form-group validate-required">
                                <label for="billing_last_name" class="col-sm-3 control-label">
                                    <span class="grey">Phone Number</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" v-model="form.phone" class="form-control " placeholder="Phone Number" value="">
                                </div>
                            </div>
                            <div class="form-group address-field validate-required" id="billing_address_fields">
                                <label for="billing_address_1" class="col-sm-3 control-label">
                                    <span class="grey">Address:</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <textarea v-model="form.address" cols="30" rows="4" class="form-control">

                                    </textarea>
                                </div>
                            </div>
                            <div class="place-order">
                                <input type="submit"
                                       @click.prevent="send"
                                       class="theme_button color1"
                                       name="checkout_place_order"
                                       :disabled="btn.state"
                                       id="place_order"
                                       :value="btn.text">
                            </div>
                        </form>
                    </div>
                    <!--eof .col-sm-8 (main content)-->
                    <!-- sidebar -->
                    <aside class="col-sm-5 col-md-4 col-lg-3 col-sm-pull-7 col-md-pull-8 col-lg-pull-9">
                        <h3 class="widget-title" id="order_review_heading">Your order</h3>
                        <div id="order_review" class="shop-checkout-review-order">
                            <table class="table shop_table shop-checkout-review-order-table">
                                <thead>
                                <tr>
                                    <td class="product-name">Product</td>
                                    <td class="product-total">Total</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in cart" class="cart_item">
                                    <td class="product-name"> {{ item.product.name }}
                                        <span class="product-quantity">× {{ item.quantity }}</span>
                                    </td>
                                    <td class="product-total">
                                        <span class="amount grey">
                                            <span class="currencies">&#x20A6</span>
                                            {{(item.quantity * item.product.price).toLocaleString() }}</span>
                                    </td>
                                </tr>
                                </tbody>
                                <tfoot>
                                <tr class="order-total">
                                    <td>Total:</td>
                                    <td> <span class="amount grey">
										<strong>&#x20A6{{ total }}</strong>
									</span> </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </aside>
                    <!-- eof aside sidebar -->
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    import { mapGetters, mapActions } from 'vuex'
    export default {
        data () {
            return {
                btn: {
                    state: false,
                    text: 'Place Order'
                },
                errors: [],
                form: {
                    name: null,
                    phone: null,
                    email: null,
                    address: null
                },
            }
        },
        computed: {
            ...mapGetters({
                cart: 'shop/cart',
                total: 'shop/cartTotal'
            })
        },
        methods: {
            ...mapActions({
                getCart: 'shop/getCart',
                userData: 'shop/userData',
            }),
            send () {
                //validate users input
                if(!this.form.name || !this.form.phone || !this.form.email || !this.form.address) {
                    alert('All Fields Required');
                    return;
                }

                if(isNaN(this.form.phone) || this.form.phone.length !== 11) {
                    alert('Enter a valid phone number');
                    return;
                }


                this.btn.state = !this.btn.state;
                this.btn.text = 'Processing...';

                this.userData({
                    data: this.form,
                    cart: this.cart,
                    context: this
                })
                .then(response => {
                    this.$router.push({
                        name: 'store-pay',
                        params: {
                            ref: response.data.data.ref
                        }
                    });
                    console.log(response.data)
                })
                .catch(error => {
                    this.btn.state = !this.btn.state;
                    this.btn.text = 'Place Order';
                    this.errors = error.response.data.errors
                    console.log(error.response)
                })
            }
        },
        mounted() {
            this.getCart()
            window.scrollTo(20, 0);
        }
    }
</script>