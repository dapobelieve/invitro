<template>
    <div class="shop-payment">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Payment</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a href="index.html">
                                Home
                            </a> </li>
                            <!--<li> <router-link :to="{name: 'store-home'}">Shop</router-link>-->
                                <!--<a href="#"></a> </li>-->
                            <li class="active">Payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
            <div class="container">
                <div v-if="!paySuccess" class="row">
                    <loader v-if="loading" message="Processing..."></loader>
                    <div v-else class="place-order">
                        <div class="pay-amount">
                            <span class="big-price amount grey">
                                &#8358{{ formatPrice }}
                            </span>
                        </div>
                        <div class="pay-btn item">
                            <input type="submit"
                                   @click.prevent="payWithPaystack"
                                   class="theme_button color1"
                                   name="checkout_place_order"
                                   :disabled="btn.state"
                                   id="place_order"
                                   :value="btn.text">
                        </div>
                    </div>
                </div>
                <div class="row" v-else>
                    <div class="info">
                        <p class="big-price">Payment Successful.</p>
                        <!--<p class="big-price">A mail has been sent to {{ info.email }}</p>-->
                    </div>

                </div>
            </div>
        </section>

    </div>
</template>

<script>
    import loader from '../../../../helpers/spinner.vue'
    import { mapGetters, mapActions } from 'vuex';
    export default {
        name: "payment",
        data () {
            return {
                loading: true,
                paySuccess: false,
                btn: {
                    state: false,
                    text: 'Pay Now'
                },
                amount: 0,
                id: null,
                payObj: {
                    email:  'electrumpharmacie@gmail.com',
                    psKey: 'pk_live_5db8e0bad45e548980641d23586e1197e463965e',
                    bearer: 'Androcare Laboratories & Cryobank Limited'
                },
                info: {}
            }
        },
        computed: {
            scriptLoaded () {
                return new Promise((resolve) => {
                    this.loadScript(() => {
                        resolve();
                    })
                })
            },
            ...mapGetters({
                getUserData: 'shop/getUserData'
            }),
            formatPrice () {
                return (this.amount / 100).toLocaleString();
            }
        },
        components: {
            loader,
        },
        methods: {
            showAlertmessage(message) {
                this.$swal({
                    title: message,
                    text: 'Please check your mail or spam folder for a mail from us',
                    type: 'success'
                })
            },
            verifyTransaction (ref) {
                axios.get('api/verify-payment/'+this.id+'/'+ref+'/'+this.$route.query.type)
                    .then(response => {
                        this.paySuccess = true;
                        this.clearData();
                        this.showAlertmessage('Payment Successful');
                        this.info = response.data.data
                    })
                    .catch(error => {
                        alert(error.response);
                    })
            },
            close (){
                alert("INCOMPLETE PAYMENT!!!");
            },
            loadScript(callback) {
                // load paystack's inline js script
                const script = document.createElement('script');
                script.src = 'https://js.paystack.co/v1/inline.js';
                document.getElementsByTagName('head')[0].appendChild(script);
                if (script.readyState) {
                    // IE
                    script.onreadystatechange = () => {
                        if (script.readyState === 'loaded' || script.readyState === 'complete') {
                            script.onreadystatechange = null;
                            callback()
                        }
                    }
                } else {
                    // Others
                    script.onload = () => {
                        callback()
                    }
                }
            },
            payWithPaystack() {
                this.btn.state = true;
                this.btn.text = 'Processing...';

                //only after script has loaded
                this.scriptLoaded.then(() => {

                    const paystackOptions = {
                        key: this.payObj.psKey,
                        email: this.getUserData.email,
                        amount: this.amount,
                        ref: this.payObj.reference,
                        callback: (response) => {
                            console.log(response.trxref);
                            this.loadText = 'Verifying your payment';

                            //verify trnsaction from the backend
                            this.verifyTransaction(response.trxref)
                        },
                        onClose: () => {
                            this.close()
                        },
                        metadata: null,
                        currency: this.currency,
                        // bearer: this.payObj.bearer
                    };

                    if (this.embed) {
                        paystackOptions.container = 'paystackEmbedContainer'
                    }

                    const handler = window.PaystackPop.setup(paystackOptions);
                    if (!this.embed) {
                        handler.openIframe()
                    }
                })
            },
            ...mapActions({
                getUser: 'shop/getUserDetails',
                clearData: 'shop/clearUserData'
            }),
            showFlash()
            {
                this.flash('Hello World', 'success');
            }
        },
        mounted ()
        {
            console.log(this.$route);
            window.scrollTo(20, 0);
            if (this.embed) {
                this.payWithPaystack()
            }

            this.getUser();
        },
        beforeRouteEnter(to, from, next) {
            axios.get(`api/verify-transaction-ref/${to.params.ref}`)
                .then(response => {
                    next((be) => {
                        be.loading = false;
                        be.amount = response.data.data.amount;
                        be.id = response.data.data.id
                    })
                })
                .catch(error => {
                    alert(error.response.data.message)
                });
        }
    }
</script>

<style scoped>
    .place-order, .info {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column
        /*grid-gap: 30px;*/
    }
    .big-price {
        font-weight: 500;
        font-size: 50px;
    }
    .pay-btn {
        margin-top: .8em;
        justify-self: center;
    }

</style>