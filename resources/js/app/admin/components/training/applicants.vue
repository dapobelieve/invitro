<template>
    <div class="store-list">
        <div class="container">
            <div class="row">
                <div id="myModal" v-if="show">
                    <div class="modal-dialog show">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button data-dismiss="modal" @click="show = false" class="close" type="button">×</button>
                                <h3>Add New Applicant</h3>
                            </div>
                            <div class="modal-body">
                                <form action="" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 col-lg-2 control-label">Name</label>
                                        <div class="col-sm-9 col-md-9 col-lg-10">
                                            <input type="text" placeholder="Name" v-model="form.name" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 col-lg-2 control-label">Email</label>
                                        <div class="col-sm-9 col-md-9 col-lg-10">
                                            <input type="text" placeholder="Email" v-model="form.email" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 col-lg-2 control-label">Phone Number</label>
                                        <div class="col-sm-9 col-md-9 col-lg-10">
                                            <input type="text" placeholder="Phone Number" v-model="form.phone" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 col-md-3 col-lg-2 control-label">Occupation</label>
                                        <div class="col-sm-9 col-md-9 col-lg-10">
                                            <input type="text" placeholder="Occupation" v-model="form.occupation" class="form-control input-sm" />
                                        </div>
                                    </div>
                                    <div class="submit-button">
                                        <button @click.prevent="addApplicant" class="btn btn-dark-green">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="widget-box">
                        <div class="widget-title">
                            <span class="icon"><i class="fa fa-signal"></i></span>
                            <h5>Applications for </h5>
                        </div>
                        <div class="widget-content">
                            <loader v-if="!data.training"></loader>
                            <table v-else class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Discipline</th>
                                    <th>Status</th>
                                    <th>Reference</th>
                                    <th>options</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr v-for="(data, index) in data.training.applications">
                                    <td>{{ index + 1 }}</td>
                                    <td>{{ data.name }}</td>
                                    <td>{{ data.email }}</td>
                                    <td>{{ data.phone }}</td>
                                    <td>{{ data.occupation }}</td>
                                    <td>
                                        {{ data.payment.status }}
                                        <small v-if="data.payment.status == 'PAID' && data.payment.payment_ref == null">
                                            (manual)
                                        </small>
                                    </td>
                                    <td><strong>{{ data.reference }}</strong></td>
                                    <!--<td>&#8358{{ (data.price).toLocaleString() }}</td>-->
                                    <td>
                                        <!--<router-link-->
                                                <!--:to="{name: 'product-edit', params:{id: data.id}}"-->
                                                <!--class="btn btn-info btn-xs">Details-->
                                        <!--</router-link>-->
                                        <!--<button @click="deleteItem(data.id)" type="submit" class="btn btn-danger btn-xs">Delete</button>-->
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="add-applicant">
                            <a @click.prevent="show = !show" href="#">Manually Create Applicant</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import loader from '../../../../helpers/loader.vue'
    import Bus from '../../../../helpers/bus.js'
    export default {
        data () {
            return {
                show: false,
                data: [],
                form:{}
            }
        },
        methods: {
            addApplicant () {
                if(!this.form.name || !this.form.email || !this.form.occupation || !this.form.phone) {
                    alert('Please fill all fields!');
                    return;
                }
                this.form.id = this.$route.params.id

                axios.post(`api/manual-training-register`, this.form)
                    .then(response => {
                        this.show = !this.show;
                        this.getApplicants();
                        console.log(response.data)
                    })
                    .catch(error => {
                        console.log(error.response.data)
                    })
            },
            getApplicants() {
                axios.get(`api/get-applicants/${this.$route.params.id}`)
                    .then(response => {
                        this.data = response.data.data
                    })
            }
        },
        components: {
            loader
        },
        mounted () {
            this.getApplicants();
        }
    }
</script>

<style scoped>
.add-applicant {
    display: flex;
    justify-content: center;
}
</style>