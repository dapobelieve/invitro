<template>
    <li class="product type-product">
        <div class="vertical-item content-padding text-center with_border">
            <div class="item-media muted_background bottommargin_30">
                <img :src="getImage()" alt="" /> </div>
            <div class="item-content">
                <h4 class="hover-color2 bottommargin_0">
                    <router-link :to="{name: 'store-product-details', params: {slug: product.slug}}">{{ product.name }}</router-link>
                </h4>
                <p class="price semibold">
                    <ins>
                        <span class="amount"><span>&#x20A6</span>{{(product.price).toLocaleString() }}</span>
                    </ins>
                </p>
                <p>{{ product.summary }}</p>
                <p class="topmargin_30">
                    <a @click.prevent="addToCart" href="#" class="theme_button color2 inverse min_width_button">Add to Cart</a>
                </p>
            </div>
        </div>
    </li>
</template>

<script>
    import { mapActions } from 'vuex'
    export default {
        props: ['product'],
        methods: {
            getImage () {
                return '/store/crop/'+this.product.image;
            },
            ...mapActions({
                addProductToCart: 'shop/addProductToCart'
            }),
            addToCart () {
                this.addProductToCart({
                    product: this.product,
                    quantity: 1
                });

                this.showAlertmessage('Added to Cart')

            },
            showAlertmessage(message) {
                this.$swal({
                    title: message,
                    type: 'success',
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 2000
                })
            },
        }

    }
</script>

<style>
    /*.product:nth-child(1) {*/
        /*background-color: black*/
    /*}*/
</style>