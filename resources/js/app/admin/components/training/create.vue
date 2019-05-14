<template>
    <div class="create-training">
        <div class="row">
            <div class="col-xs-12">
                <div v-if="error.status" class="alert alert-danger">
                    {{ error.message }}
                    <a href="#" data-dismiss="alert" class="close">×</a>
                </div>
                <div class="widget-box">
                    <div class="widget-title">
                        <span class="icon"><i class="fa fa-medkit"></i></span>
                        <h5>Create Training <em v-if="upload.state">{{ upload.progress }}</em></h5>
                    </div>
                    <div class="widget-content">
                        <div class="row">
                            <form @submit.prevent="submitCourse" class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Title</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <input type="text" v-model="course.title" placeholder="Title" class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Cost</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <input
                                                type="number"
                                                min="1000"
                                                v-model.numnber="course.cost"
                                                placeholder="Training Fee"
                                                class="form-control input-sm" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Slots</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <input
                                                type="number"
                                                min="1"
                                                v-model.numnber="course.slots"
                                                placeholder="Available Slots"
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
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Training Details</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <vue-editor v-model="course.content" :editorToolbar="customToolbar"></vue-editor>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 col-md-3 col-lg-2 control-label">Training Materials</label>
                                    <div class="col-sm-9 col-md-9 col-lg-10">
                                        <vueDropzone
                                                @vdropzone-removed-file="removeFile"
                                                @vdropzone-file-added="fileAdded"
                                                id='uploader1'
                                                :options="dropOptions">
                                        </vueDropzone>
                                    </div>
                                </div>
                                <div class="form-actions" v-if="btn.state">
                                    <!--<h5>Uploading...</h5>-->
                                    <loader></loader>
                                </div>

                                <div v-else class="form-actions">
                                    <!--<progress-bar :options="options" :value="upload.progress"></progress-bar>-->
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
            course: {
                materials: [],
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
            dropOptions: {
                acceptedFiles: "video/mp4, application/pdf",
                url: "http://localhost:8000/api/image",
                maxFilesize: 10, // MB
                maxFiles: 5,
                chunking: true,
                preventDuplicates: true,
                chunkSize: 500, // Bytes
                thumbnailWidth: 150, // px
                thumbnailHeight: 150,
                addRemoveLinks: true,
                autoProcessQueue:false,
                dictDefaultMessage: `<i class='fa fa-upload' style='font-size:100px; text-align: center'></i>
            <br> Upload Training materials <span style="color: #3cdd1b;">* only PDF files or MP4 videos</span> <span style='color: red'>Browse Device</span>`
            },
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
                dictDefaultMessage: `<i class='fa fa-plus' style='font-size:100px; text-align: center'></i>
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
        fileAdded (e) {
            this.course.materials.push(e);
        },
        imageAdded (e) {
            this.course.image = e;
        },
        imageRemoved () {
            this.course.image = ''
        },
        removeFile (e) {
            console.log(e.upload.uuid);

            this.course.materials = this.course.materials.filter((dFile) => {
                return dFile.upload.uuid != e.upload.uuid
            });
        },
        submitCourse ()
        {
            this.error.status = false;

            if (!this.course.title) {
                this.error.message = "Enter a Training Title";
                this.error.status = true;
                window.scrollTo(250, 0);
                return;
            }

            if(isNaN(this.course.cost)) {
                this.error.message = "Enter a Training fee";
                this.error.status = true;
                window.scrollTo(250, 0);
                return;
            }

            if(isNaN(this.course.slots)) {
                this.error.message = "Enter Available Slots";
                this.error.status = true;
                window.scrollTo(250, 0);
                return;
            }

            if (!this.course.content) {
                this.error.message = "Give details of the training";
                this.error.status = true;
                window.scrollTo(250, 0);
                return;
            }

            this.btn.state = true;

            const td = new FormData();

            td.append('title', this.course.title);
            td.append('cost', this.course.cost);
            td.append('details', this.course.content);
            td.append('slots', this.course.slots);

            if(this.course.image != '') {
                td.append('cimage', this.course.image)
            }

            for (var i=0; i<this.course.materials.length; i++) {
                let aFile = this.course.materials[i];

                td.append('materials['+ i +']', aFile);
            }
            // td.append('materials', this.course.materials);

            axios.post('api/create-training', td, {
                headers: {
                    "Content-type": "multipart/form-data"
                },
                onUploadProgress: uploadEvent => {
                    this.upload.state = true;
                    this.upload.progress =  Math.round(uploadEvent.loaded / uploadEvent.total * 100);
                }
            })
            .then((response) => {
                this.btn.state = !this.btn.state;
                this.$swal(response.data.message);
                this.$router.replace({
                    name: 'train-list'
                })
            })
            .catch((error) => {
                console.log(error.response.data)
            });
        }
    },
    mounted() {
        Bus.$emit('hideParentView', true);
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