<template>
    <div class="tdetails">
        <div class="row">
            <div class="col-xs-12">
                <div class="widget-box">
                    <loader v-if="!training"></loader>
                    <div v-else class="widget-title">
                        <span class="icon"><i class="fa fa-medkit"></i></span>
                        <h5>{{ training.title }}</h5>
                        <!--<div class="buttons">-->
                        <!--<a href="#" class="btn"><i class="fa fa-refresh"></i> <span class="text">Update stats</span></a>-->
                        <!--</div>-->
                    </div>
                    <div class="widget-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import Bus from '../../../../helpers/bus.js'
    import loader from '../../../../helpers/loader.vue'
    export default {
        data () {
            return {
                training: null
            }
        },
        components: {
            loader
        },
        methods: {
            getTraining()
            {
                axios.get(`api/get-training/${this.$route.params.id}`)
                .then(response => {
                    this.training = response.data.data
                })
                .catch(error => {
                    console.log(error.response.data)
                })
            }
        },
        mounted() {
            Bus.$emit('hideParentView', true);
            this.getTraining();
        }
    }
</script>