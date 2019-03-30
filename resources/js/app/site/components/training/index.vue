<template>
    <div class="training">
        <transition name="fadeLeft">
            <router-view></router-view>
        </transition>
    </div>
</template>
<script>
    export default {
        mounted()
        {
            // alert('Mounted Parent view')
        }
    }
</script>