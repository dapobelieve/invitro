<template>
    <div class="create-store">
        <div class="row">
            <div class="col-xs-12">
                <div v-if="error.status" class="alert alert-danger">
                    {{ error.message }}
                    <a href="#" data-dismiss="alert" class="close">×</a>
                </div>
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fa fa-shopping-cart"></i></span>
                        <h5>Add New Product <em v-if="upload.state">{{ upload.progress }}</em></h5>
                    </div>
                    <div class="widget-content">
                        <div class="row">
                            <form @submit.prevent="addProduct" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Title</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <input type="text" v-model="product.name" placeholder="Name" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Cost</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <input
                                                type="number"
                                                min="100"
                                                v-model.numnber="product.cost"
                                                placeholder="Product Cost"
                                                class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Display Image</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <div class="imager">
                                            <div class="imager-item"></div>
                                            <vueDropzone
                                                    @vdropzone-removed-file="imageRemoved"
                                                    @vdropzone-file-added="imageAdded"
                                                    id='uploader2'
                                                    :options="dropOptions2">
                                            </vueDropzone>
                                            <div class="imager-item"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Product Details</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <vue-editor v-model="product.details" :editorToolbar="customToolbar"></vue-editor>
                                    </div>
                                </div>
                                <div class="form-actions" v-if="btn.state">
                                    <!--<h5>Uploading...</h5>-->
                                    <loader></loader>
                                </div>
                                <div v-else class="form-actions">
                                    <button type="submit" class="btn btn-primary btn-sm">Save</button>
                                    <a class="text-danger" href="#">Cancel</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
    import  { VueEditor } from "vue2-editor";
    import vueDropzone from "vue2-dropzone";
    import loader from '../../../../helpers/loader.vue'
    import Bus from '../../../../helpers/bus.js'
    // import moment from 'moment';
    export default {
        name: "create",
        data () {
            return {
                btn: {
                    state: false,

                },
                product: {
                    image: ''
                },
                customToolbar: [
                    [{ 'header': [false, 1, 2, 3, 4, 5, 6, ] }],
                    ["bold", "italic", "underline"],
                    [{ list: "ordered" }, { list: "bullet" }, {list: "check"}],
                    [{ 'indent': '-1'}, { 'indent': '+1' }],
                    [{'align': ''}, {'align': 'center'}, {'align': 'right'}, {'align': 'justify'}],
                    // ["image"],
                    [{ 'script': 'sub'}, { 'script': 'super' }],
                ],
                dropOptions2: {
                    acceptedFiles: "image/*",
                    url: "http://localhost:8000/api/image",
                    maxFilesize: 2, // MB
                    maxFiles: 1,
                    chunking: true,
                    preventDuplicates: true,
                    chunkSize: 500, // Bytes
                    thumbnailWidth: 150, // px
                    thumbnailHeight: 150,
                    addRemoveLinks: true,
                    autoProcessQueue:false,
                    dictDefaultMessage: `<i class='fa fa-file-image-o' style='font-size:100px; text-align: center'></i>
            <br> Upload Display Image  <span style='color: red'>Upload</span>`
                },
                error: {
                    status: false,
                    message: ""
                },
                upload: {
                    state: false,
                    progress: 0
                }
            }
        },
        components: {
            VueEditor,
            vueDropzone,
            loader
        },
        methods: {
            imageAdded (e) {
                this.product.image = e;
            },
            imageRemoved () {
                this.product.image = ''
            },
            addProduct ()
            {
                this.error.status = false;

                if (!this.product.name) {
                    this.error.message = "Enter a Product Name";
                    this.error.status = true;
                    window.scrollTo(100, 0);
                    return;
                }

                if(isNaN(this.product.cost)) {
                    this.error.message = "Enter a Product amount";
                    this.error.status = true;
                    window.scrollTo(100, 0);
                    return;
                }

                if (!this.product.details) {
                    this.error.message = "Give details of the product";
                    this.error.status = true;
                    window.scrollTo(100, 0);
                    return;
                }

                this.btn.state = !this.btn.false;

                const td = new FormData();

                td.append('name', this.product.name);
                td.append('price', this.product.cost);
                td.append('details', this.product.details);

                if(this.product.image != '') {
                    td.append('image', this.product.image)
                }


                axios.post('api/create', td, {
                    headers: {
                        "Content-type": "multipart/form-data"
                    },
                    onUploadProgress: uploadEvent => {
                        this.upload.state = true;
                        this.upload.progress =  Math.round(uploadEvent.loaded / uploadEvent.total * 100);
                    }
                })
                    .then((response) => {
                        Bus.$emit('item-created');
                        this.btn.state = !this.btn.state;
                        this.$swal(response.data.message);
                        this.$router.replace({
                            name: 'product-home'
                        })
                    })
                    .catch((error) => {
                        console.log(error.response.data)
                    });
            }
        },
        mounted() {
            // Bus.$emit('hideParentView', true);
        }
    }
</script>

<style scoped>
    .imager {
        display: grid;
        grid-template-columns: 200px 300px 200px;
        justify-content: center
    }

</style>