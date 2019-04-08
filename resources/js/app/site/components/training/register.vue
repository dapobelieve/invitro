<template>
    <div class="shop-checkout">
        <section v-show="training.title" class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Register</h2>
                        <h3>{{ training.title | upperCase }}</h3>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a style="cursor: pointer" @click="home">
                                Home
                            </a> </li>
                            <li> <router-link :to="{name: 'train-home'}">Trainings</router-link>
                                <!--<a href="#"></a> </li>-->
                            <li class="active">Registeration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_75 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2>Please fill out your details</h2>
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
                                    <span v-if="errors.email" class="has-error">
                                        {{ errors.email[0] }}
                                    </span>
                                </div>
                            </div>
                            <div class="form-group validate-required">
                                <label for="billing_last_name" class="col-sm-3 control-label">
                                    <span class="grey">Phone Number</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" v-model="form.phone" class="form-control " placeholder="Phone Number" value="">
                                    <span v-if="errors.phone" class="has-error">
                                        {{ errors.phone[0] }}
                                    </span>
                                </div>
                            </div>
                            <div class="form-group validate-required">
                                <label for="billing_last_name" class="col-sm-3 control-label">
                                    <span class="grey">Occupation</span>
                                    <span class="required">*</span>
                                </label>
                                <div class="col-sm-9">
                                    <input type="text" v-model="form.occupation" class="form-control " placeholder="Occupation" >
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
                                <input
                                    type="submit"
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
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    // import { mapGetters, mapActions } from 'vuex'
    export default {
        data () {
            return {
                btn: {
                    state: false,
                    text: 'Register'
                },
                errors: [],
                form: {
                    name: null,
                    phone: null,
                    email: null,
                    address: null
                },
                training: {
                    name: ''
                }
            }
        },
        computed: {
            //
        },
        methods: {
            home () {
                window.location = window.location.origin
            },
            getTraining()
            {
                axios.get(`api/get-training-details/${this.$route.params.slug}`)
                    .then(response => {
                        this.training = response.data.data.training
                    })
                    .catch(error => {
                        this.$swal({
                            title: 'Invalid Url',
                            type: 'error'
                        });
                        this.$router.go(-1)
                    })
            },
            send () {
                //validate users input
                if(!this.form.name || !this.form.phone || !this.form.email || !this.form.address || !this.form.occupation) {
                    this.$swal('All Fields Required');
                    return;
                }

                if(isNaN(this.form.phone) || this.form.phone.length !== 11) {
                    this.$swal('Enter a valid phone number');
                    return;
                }

                this.form.training = this.training.id


                this.btn.state = !this.btn.state;
                this.btn.text = 'Processing...';

                axios.post(`api/training-register`, this.form)
                    .then(response => {
                        //set user details so it can be usefull on the payment component
                        localStorage.setItem('userData', JSON.stringify(this.form));
                        // this.form = {}
                        this.$swal({
                            title: 'Registration Successful',
                            // text: response.data.message,
                            type: 'success',
                            // showConfirmButton: false
                        })
                        this.btn.state = !this.btn.state;


                        this.$router.push({
                            name: 'store-pay',
                            params: {
                                ref: response.data.data.application_ref
                            },
                            query: {
                                type: 'training'
                            }
                        });
                    })
                    .catch(error => {
                        window.scrollTo(40, 0);
                        this.btn.text = 'Register'
                        this.btn.state = !this.btn.state;
                        this.errors = error.response.data.errors;
                        // console.log(error.response.data)
                    })

            }
        },
        mounted() {
            this.getTraining();
            window.scrollTo(20, 0);
        },
        filters: {
            upperCase (value) {
                return value.toUpperCase()
            }
        }
    }
</script>

<style scoped>
    .place-order {
        display: flex;
        justify-content: center
    }
    .has-error {
        color: red
    }
</style>