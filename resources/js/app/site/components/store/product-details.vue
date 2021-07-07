<template>
    <div class="product-details">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Single Product</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a href="index.html">
                                Home
                            </a> </li>
                            <li> <a href="#">Shop</a> </li>
                            <li class="active">Single Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
            <div class="container">
                <div v-if="product.name" class="row">
                    <div class="col-sm-7 col-md-8 col-lg-9 col-sm-push-5 col-md-push-4 col-lg-push-3">
                        <div class="with_border with_padding ">
                            <div  itemscope="" itemtype="http://schema.org/Product" class="product type-product row">
                                <div class="col-md-6">
                                    <div class="images">
                                        <span class="onsale">Sale!</span>
                                        <img
                                            :src="getImage(product.image)"
                                            class="attachment-shop_single wp-post-image muted_background">
                                     </div>
                                    <!--eof .images -->
                                    <!-- eof .images -->
                                </div>
                                <div class="summary entry-summary col-md-6">
                                    <h1 itemprop="name" class="product_title entry-title">{{ product.name }}</h1>
                                    <div itemprop="offers" itemscope="" >
                                        <ul class="list1 no-bullets">
                                            <li>
                                                <p class="price">
                                                    <ins>
                                                        <span class="amount">&#x20A6{{(product.price).toLocaleString() }}</span>
                                                    </ins>
                                                </p>
                                                <meta itemprop="price" content="2">
                                                    <meta itemprop="priceCurrency" content="NGN">
                                                <link itemprop="availability">
                                                <p class="stock"><span class="grey">Availability:</span> In Stock</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- .summary.col- -->
                            </div>
                            <!-- .product.row -->
                        </div>
                        <!-- .muted_background -->
                        <div class="woocommerce-tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs wc-tabs" role="tablist">
                                <li class="active"><a href="#details_tab" role="tab" data-toggle="tab">Details</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content top-color-border">
                                <div class="tab-pane fade in active" id="details_tab">
                                    <div v-html="product.details"></div>
                                    <!--<vue-editor v-model="product.details"></vue-editor>-->
                                </div>
                            </div>
                            <!-- eof .tab-content -->
                        </div>
                        <!-- .woocommerce-tabs -->
                    </div>
                    <!--eof .col-sm-8 (main content)-->
                    <!-- sidebar -->
                    <aside class="col-sm-5 col-md-4 col-lg-3 col-sm-pull-7 col-md-pull-8 col-lg-pull-9">
                        <!--<div class="widget widget_products widget_popular_entries">-->
                            <!--<h3 class="widget-title">Sale products</h3>-->
                            <!--<ul class="media-list">-->
                                <!--<li class="media"> <a class="media-left media-middle" href="shop-product-right.html">-->
                                    <!--<img class="media-object muted_background" src="images/shop/01.png" alt="">-->
                                <!--</a>-->
                                    <!--<div class="media-body media-middle">-->
                                        <!--<h4 class="entry-title"> <a href="shop-product-right.html">Narcissist Treatment</a> </h4>-->
                                        <!--<div class="star-rating  small-stars" title="Rated 4.00 out of 5"> <span style="width:80%">-->
								<!--<strong class="rating">4.00</strong> out of 5-->
							<!--</span> </div> <span class="price small-text">-->
							<!--<del>-->
								<!--<span class="amount">$59</span> </del> <ins>-->
								<!--<span class="amount">$49</span>-->
							<!--</ins> </span>-->
                                    <!--</div>-->
                                <!--</li>-->
                                <!--<li class="media"> <a class="media-left media-middle" href="shop-product-right.html">-->
                                    <!--<img class="media-object muted_background" src="images/shop/02.png" alt="">-->
                                <!--</a>-->
                                    <!--<div class="media-body media-middle">-->
                                        <!--<h4 class="entry-title"> <a href="shop-product-right.html">Dealing with Criticis</a> </h4>-->
                                        <!--<div class="star-rating small-stars" title="Rated 3.00 out of 5"> <span style="width:70%">-->
								<!--<strong class="rating">3.00</strong> out of 5-->
							<!--</span> </div> <span class="price small-text">-->

							<!--<del>-->
								<!--<span class="amount">$125</span> </del> <ins>-->
								<!--<span class="amount">$99</span>-->
							<!--</ins> </span>-->
                                    <!--</div>-->
                                <!--</li>-->
                                <!--<li class="media"> <a class="media-left media-middle" href="shop-product-right.html">-->
                                    <!--<img class="media-object muted_background" src="images/shop/03.png" alt="">-->
                                <!--</a>-->
                                    <!--<div class="media-body media-middle">-->
                                        <!--<h4 class="entry-title"> <a href="shop-product-right.html">Insights into Life</a> </h4>-->
                                        <!--<div class="star-rating  small-stars" title="Rated 2.00 out of 5"> <span style="width:40%">-->
								<!--<strong class="rating">2.00</strong> out of 5-->
							<!--</span> </div> <span class="price small-text">-->
							<!--<del>-->
								<!--<span class="amount">$46</span> </del> <ins>-->
								<!--<span class="amount">$33</span>-->
							<!--</ins> </span>-->
                                    <!--</div>-->
                                <!--</li>-->
                            <!--</ul>-->
                        <!--</div>-->
                    </aside>
                    <!-- eof aside sidebar -->
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                product: {}
            }
        },
        methods: {
            getImage (data) {
                return '/store/original/'+data;
            },
            getProduct(slug) {
                axios.get(`api/get-product/${slug}`)
                    .then(response => {
                        this.product = response.data.data.product
                    })
            }
        },
        mounted() {
            // alert('details')
            this.getProduct(this.$route.params.slug)
        }
    }
</script>