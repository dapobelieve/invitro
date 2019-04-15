<template>
    <div class="train-home">
        <section class="page_breadcrumbs ds color parallax section_padding_top_75 section_padding_bottom_75">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2>Latest Trainings</h2>
                        <ol class="breadcrumb highlightlinks">
                            <li> <a href="#">
                                Home
                            </a> </li>
                            <li class="active">Trainings</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="ls section_padding_top_100 section_padding_bottom_130">
            <div class="container">
                <div style="display: grid; grid-template-rows: auto;" class="row masonry-layout columns_margin_bottom_20">
                    <span v-for="i in Math.ceil(datas.length / 3)">
                        <training  v-for="data in datas.slice((i - 1) * 3, i * 3)" :data="data"  :key="data.id"></training>
                    </span>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    import training from './train.vue'
    export default {
        data () {
            return {
                datas: []
            }
        },
        components: {
            training
        },
        methods: {
            getTrainings() {
                axios.get('api/all-trainings')
                .then(response => {
                    this.datas = response.data.data.trainings
                })
                .catch(error => {

                })
            }
        },
        mounted () {
            this.getTrainings()
        }
    }
</script>

<style>
    .gridy {
        /*display: grid;*/
        /*grid-template-rows: auto*/
    }
</style>