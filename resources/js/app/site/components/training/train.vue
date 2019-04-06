<template>
        <div class="isotope-item col-md-4 col-sm-6">
            <article class="vertical-item content-padding with_border rounded text-center">
                <div class="item-media top_rounded overflow_hidden">
                    <img :src="getImage()" alt="">
                </div>
                <div class="item-content">
                    <h4> <a href="#">{{ data.title }}</a> </h4>
                    <div v-html="truncate(data.content, 20)"></div>
                    <p class="topmargin_20">
                        <router-link :to="{name: 'train-details', params:{slug: data.slug}}" class="theme_button color1 inverse min_width_button">Details</router-link>
                    </p>
                </div>
            </article>
        </div>
</template>

<script>
    export default {
        props: ['data'],
        methods: {
            getImage() {
                if(this.data.image == "" || this.data.image == null) {
                    return `images/crop/train.jpg`
                }
                return `images/crop/${this.data.image}`
            },
            truncate(text, length=26) {
                return text.slice(0, length)+"...";
            }
        }

    }
</script>