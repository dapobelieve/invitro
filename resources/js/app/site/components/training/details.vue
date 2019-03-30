<template>
    <div class="train-details">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>{{ data.title }}</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li>
                                <a style="cursor: pointer" @click="home()">
                                    Home
                                </a>
                            </li>
                            <li> <router-link :to="{name: 'train-home'}">Trainings</router-link> </li>
                            <li class="active">{{ data.title }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_100 columns_padding_25">
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <article class="vertical-item content-padding with_border ">
                            <div class="item-media"> <img :src="getImage()" alt=""> </div>
                            <div class="item-content">
                                <h4> {{ data.title }} </h4>
                            </div>
                            <div class="item-content with_top_border">
                                <div class="media small-teaser">
                                    <div class="media-left media-middle"> <i class="fa fa-map-marker highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body media-middle"> 3699 Wescam Court, Quincy </div>
                                </div>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle"> <i class="fa fa-phone highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body media-middle"> 07069494803 </div>
                                </div>
                                <div class="media small-teaser">
                                    <div class="media-left media-middle"> <i class="fa fa-envelope highlight" aria-hidden="true"></i> </div>
                                    <div class="media-body media-middle"> support@invitrofertilizationacademy.org </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-7">
                        <div class="details" v-html="data.content"></div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs topmargin_40" role="tablist">
                            <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Materials</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content big-padding top-color-border bottommargin_40">
                            <div class="tab-pane fade in active" id="tab1">
                                <div class="training-item" v-for="item in data.materials">
                                    <i class="fa fa-certificate"></i>
                                    <a
                                        class="material"
                                        :href="JSON.parse(item.material).secure_url">
                                        {{ JSON.parse(item.material).public_id.slice(14) }}
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="regiter-section">
                            <a href="#" class="theme_button color1"><i class="rt-icon2-star-outline"></i> Register Now</a>
                        </div>
                        <!-- eof .tab-content -->
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>
<script>
    export default {
        data () {
            return {
                data: {}
            }
        },
        head: {
            title () {
                return {
                    inner: this.data.title
                }
            }
        },
        methods: {
            getImage ()
            {
                return `images/crop/${this.data.image}`
            },
            home ()
            {
                window.location = window.location.origin
            }
        },
        mounted() {
            window.scrollTo(20, 0);
        },
        created () {
            axios.get(`api/get-training-details/${this.$route.params.slug}`)
                .then(response => {
                    this.data = response.data.data.training
                    window.setTimeout(() => {
                        this.title = this.data.title
                        this.$emit('updateHead')
                    })
                })
                .catch(error => {
                    this.$swal({
                        title: 'Training not found',
                        type: 'info'
                    })
                    this.$router.go(-1);
                })
        }
    }
</script>

<style>
    .training-item {
        margin-top: 15px;
    }
    .material {
        font-weight: bolder;
        text-decoration: none;
        cursor: pointer;
        color: #0d0b21;
    }
    .material:hover {
        font-weight: bolder;
        text-shadow: #0c0f11;
    }
</style>