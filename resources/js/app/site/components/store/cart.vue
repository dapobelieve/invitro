<template>
    <div class="cart">
        <section class="page_breadcrumbs to_animate ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>{{ carter.length }} Cart Items</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a style="cursor: pointer" @click="home()" >
                                Home
                            </a> </li>
                            <li><router-link :to="{name: 'store-home'}">Shop</router-link> </li>
                            <li class="active">Cart</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_25 section_padding_bottom_25 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="table-responsive">
                            <table class="table shop_table cart cart-table">
                                <thead>
                                <tr>
                                    <td class="product-info">Product</td>
                                    <td class="product-price-td">Price</td>
                                    <td class="product-quantity">Quantity</td>
                                    <td class="product-subtotal">Subtotal</td>
                                    <td class="product-remove">&nbsp;</td>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="item in cart" class="cart_item" :key="item.product.id">
                                    <td class="product-info">
                                        <div class="media">
                                            <div class="media-left">
                                                <a href="shop-product-right.html">
                                                    <img class="media-object cart-product-image" :src="getImage(item.product.image)" alt="">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h4 class="media-heading">
                                                    <router-link :to="{name: 'store-product-details', params: {slug: item.product.slug}}">
                                                        {{ item.product.name }}</router-link>
                                                </h4>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product-price">
                                        <span class="currencies">&#x20A6</span>
                                        <span class="amount">{{ item.product.price }}</span>
                                    </td>
                                    <td class="product-quantity">
                                        <div class="quantity">
                                            <!--<input type="button" @click.prevent="item.quantity&#45;&#45;" value="-" class="">-->
                                            <input type="number"
                                                   min="1"
                                                   name="product_quantity"

                                                   title="Qty"
                                                   v-model="item.quantity"
                                                   class="form-control">
                                            <!--<input @click.prevent="item.quantity+=1" type="button" value="+" class="plus">-->
                                        </div>
                                    </td>
                                    <td class="product-subtotal">
                                        <span class="currencies">&#x20A6</span>
                                        <span class="amount">
                                            {{(item.product.price * item.quantity).toLocaleString() }}
                                        </span>
                                    </td>
                                    <td class="product-remove">
                                        <a href="#"
                                           @click.prevent="removeFromCart(item.product.id)"
                                           class="remove fontsize_20"
                                           title="Remove this item">
                                        <i class="fa fa-trash-o"></i>
                                    </a> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="cart-buttons">
                            <router-link class="theme_button" :to="{name: 'store-home'}">Countinue Shopping</router-link>
                            <input type="submit" @click.prevent="update" class="theme_button color1" name="update_cart" value="Update Cart">
                            <router-link class="theme_button color2" :to="{name: 'store-checkout'}">Proceed to Checkout</router-link>
                        </div>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h4>Cart Totals</h4>
                                <table class="table">
                                    <tbody>
                                    <tr class="cart-subtotal">
                                        <td>Cart Subtotal</td>
                                        <td>
                                            <strong>
                                                <span class="currencies">&#x20A6</span>
                                                <span class="amount">{{ cartTotal.toLocaleString() }}</span>
                                            </strong>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import { mapGetters, mapActions } from 'vuex'
    export default {
        name: 'cart',
        computed: {
            ...mapGetters({
                cart: 'shop/cart',
                cartTotal: 'shop/cartTotal'
            }),
            carter () {
                return this.cart;
            }
        },
        methods: {
            getImage (data) {
                return JSON.parse(data).secure_url;
            },
            home () {
                window.location = window.location.origin
            },
            ...mapActions({
                getCart: 'shop/getCart',
                updateCart: 'shop/updateCart',
                removeFromCart: 'shop/removeFromCart'
            }),
            update () {
                this.updateCart({
                    cart: this.cart
                })
                this.$swal({
                    title: 'Cart Updated',
                    type: 'info',
                    showConfirmButton: false,
                    timer: 2000
                })
            }
        },
        mounted() {
            this.getCart();
            window.scrollTo(20, 0);
        }
    }
</script>