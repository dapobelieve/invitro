<template>
    <div class="store-home">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Products</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li>
                                <!--<a h> Home </a>-->
                            </li>
                            <li class="active">Products</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_150 section_padding_bottom_130">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="shop-sorting">
                            <form class="form-inline content-justify vertical-center content-margins">
                                <!--<div> Showing 1-6 of 36 results </div>-->
                                <div class="righty">
                                    <div class="item-a">
                                        <router-link :to="{name: 'store-cart'}">View Cart {{ cart.length }}</router-link>

                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="columns-3">
                            <ul id="products" style="display: grid; grid-template-rows: auto" class="products list-unstyled">
                                <span v-for="i in Math.ceil(Products.length / 3)">
                                    <product v-for="x in Products.slice((i - 1) * 3, i * 3 )" :key="x.id" :product="x"></product>
                                </span>
                            </ul>
                        </div>
                        <!-- eof .columns-* -->
                        <div class="row">
                            <!--<div class="col-sm-12 text-center">-->
                                <!--<ul class="pagination with_border">-->
                                    <!--<li class="disabled"><a href="#"><span class="sr-only">Prev</span><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>-->
                                    <!--<li class="active"><a href="#">1</a></li>-->
                                    <!--<li><a href="#">2</a></li>-->
                                    <!--<li><a href="#">3</a></li>-->
                                    <!--<li><a href="#">4</a></li>-->
                                    <!--<li><a href="#"><span class="sr-only">Next</span><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>-->
                                <!--</ul>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import Product from './product'
    import { mapActions, mapGetters } from 'vuex'
    export default {
        name: "home.vue",

        components: {
            Product
        },
        methods: {
            ...mapActions({
                getProducts: 'shop/getProducts'
            })
        },
        computed: {
            ...mapGetters({
                Products: 'shop/store',
                cart: 'shop/cart'
            })
        },
        mounted() {
            this.getProducts();

        }
    }
</script>

<style scoped>
    .righty {
        top: 198px;
        right: 105px;
        z-index: 1000000;
    }

    .item-a:first-child {
        display: flex;
        background-color: green;
        justify-content: space-between;
        padding: 7px;
        cursor: pointer !important;
        font-weight: bolder;
        border-radius: 5px;
        color: #fffbdb !important;
    }
    .item-a a {
        color: #fffbdb;
    }
</style>