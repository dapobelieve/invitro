<template>
    <div class="index">
        <div class="container-fluid">

            <div class="row">
                <div v-if="!hideParent" class="col-xs-12 center" data-animation="easeIn" data-speed="5000" style="text-align: center;">
                    <ul class="stats-plain" >
                        <li>
                            <h4>{{ stats.products }}</h4>
                            <span>Products</span>
                        </li>
                        <li>
                            <h4>{{ stats.orders }}</h4>
                            <span>Orders</span>
                        </li>
                        <li>
                            <h4>{{ stats.pending }}</h4>
                            <span>New Orders</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="sub-menu">
                        <router-link class="btn btn-info " :to="{name: 'product-home'}">All Products</router-link>
                        <router-link class="btn btn-primary " :to="{name: 'product-orders'}">Orders {{ stats.pendOrders }}</router-link>
                        <router-link class="btn btn-success" :to="{name: 'product-create'}">New</router-link>
                    </div>
                </div>
            </div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    import Bus from '../../../../helpers/bus.js'
    export default {
        name: "index",
        data () {
            return {
                stats: {},
                hideParent: false
            }
        },
        methods: {
            getStats () {
                axios.get('api/index')
                    .then(response => {
                        this.stats = response.data.data
                    })
            }
        },
        mounted() {
            this.getStats();

            Bus.$on('item-created', () => {
                this.stats.products += 1;
            });

            Bus.$on('item-deleted', () => {
                this.stats.products -= 1;
            });

            Bus.$on('hideParentView', (payLoad) => {
                this.hideParent = payLoad;
            })
        }
    }
</script>

<style scoped>
    .sub-menu {
        /*display: flex;*/
        /*justify-content: space-between*/
    }

</style>