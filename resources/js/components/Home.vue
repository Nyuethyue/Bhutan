<template>
    <div class="container">
        <div class="row mt-4">
          <div class="col-md-12">
              <h3>Filter By:</h3>
            <div class="row">
                <div class="col">
                    <div class="form-group align-items-center">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Dzongkhag</label>
                        <select v-model="selectedDzongkhag" class="form-control">
                            <option value="">All</option>
                            <option v-for="item in dzongkhags" :key="item.id" :value="item.id">{{ item.dzo_name }}</option>
                        </select>
                    </div>
                </div>
            
                <div class="col" v-if="selectedDzongkhag">
                    <div class="form-group align-items-center ml-2">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Gewog</label
                        >
                        <select v-model="selectedGewog" class="form-control">
                            <option value="">All</option>
                            <option v-for="gewog in gewogs" :key="gewog.id" :value="gewog.id">{{ gewog.geo_name }}</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group align-items-center ml-2">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Work Type</label
                        >
                        <select class="form-control" id="work_type" required name="work_type" v-model="selectedWorkType">
                            <option value="">All</option>
                            <option value="Thangka Painting">Thangka Painting</option>
                            <option value="Wall Painting">Wall Painting</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group align-items-center ml-2">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >Work Description</label
                        >
                        <select class="form-control" id="work_type" required name="work_desc" v-model="selectedWorkDesc">
                            <option value="">All</option>
                            <option value="Detach">Detach</option>
                            <option value="Re-Attach">Re-Attach</option>
                        </select>
                    </div>
                </div>

                <div class="col">
                    <div class="form-group align-items-center ml-2">
                        <label for="paginate" class="text-nowrap mr-2 mb-0"
                            >No. of Thangka</label
                        >
                         <input id="no_of_thangka" v-model="selectedNoOfThangka" type="number" name="no_of_thangka" placeholder="No of Thangka" class="form-control">
                    </div>
                </div>
            </div>

            <div class="card mx-auto">
              <div class="card-header">
                  <div class="row">
                      <div class="col">
                            <div class="form-row align-items-center">
                                <div class="col">
                                    <input id="search" v-model="search" type="text" name="search" placeholder="Search By Lhakhang" class="form-control mb-2">
                                </div>
                            </div>
                      </div>
                      <div class="col-md-4">
                        <button type="button" class="btn btn-success"  @click="newModal">
                            <span  class="white">Add New</span>
                        </button>
                    </div>
                  </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Dzongkhag</th>
                      <th>Gewog</th>
                      <th>Lhakhang</th>
                      <th>Work Type</th>
                      <th>Work Description</th>
                      <th>Thangka #</th>
                      <th>Year</th>
                      <th>Remarks</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody >
                    <tr v-for="detail in details.data" :key="detail.id">
                      <td>{{ detail.dzo_name}}</td>
                      <td>{{ detail.geo_name}}</td>
                      <td>{{ detail.lhakhang_name}}</td>
                      <td>{{ detail.work_type}}</td>
                      <td>{{ detail.work_desc}}</td>
                      <td>{{ detail.no_of_thangka}}</td>
                      <td>{{ detail.year}}</td>
                      <td>{{ detail.remarks}}</td>
                      <td>
                          <a href="#" @click="editModal(detail)">
                              <i class="fa fa-edit blue"></i>
                          </a>
                          /
                          <a href="#" @click="deleteHome(detail.id)">
                              <i class="fa fa-trash red"></i>
                          </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                    <pagination :data="details" @pagination-change-page="getResults">
                        <span slot="prev-nav">&lt; Previous</span>
	                    <span slot="next-nav">Next &gt;</span>
                    </pagination>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1"  role="dialog" aria-labelledby="addNewLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
                <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update Info</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
             <form @submit.prevent="editmode ? updateHome() : createHome()">
                        <div class="modal-body">
                            <div class="form-group">
                              <label for="dzongkhag_id">Select Dzongkhag *</label>
                              <select class="form-control" id="dzongkhag" required v-model="form.dzongkhag_id" name="dzongkhag_id">
                                <option value="">Select Dzongkhag</option>
                                <option v-for="item in dzongkhags" :key="item.id" :value="item.id">{{ item.dzo_name }}</option>
                              </select>
                              <div v-if="form.errors.has('dzongkhag_id')" v-html="form.errors.get('dzongkhag_id')" />
                            </div>

                            <div class="form-group">
                              <label for="gewog">Select Gewog *</label>
                              <select class="form-control" id="gewogs" required name="gewog_id" v-model="form.gewog_id">
                                <option value="">Select Gewog</option>
                                <option v-for="gewog in gewogs" :key="gewog.id" :value="gewog.id">{{ gewog.geo_name }}</option>
                              </select>
                              <div v-if="form.errors.has('gewog_id')" v-html="form.errors.get('gewog_name')" />
                            </div>

                            <div class="form-group">
                                <label for="lhakhang">Lhakhang Name *</label>
                                <input id="lhakhang_name" v-model="form.lhakhang_name" type="text" name="lhakhang_name" placeholder="Lhakhang Name" class="form-control">
                                <div v-if="form.errors.has('lhakhang_name')" v-html="form.errors.get('lhakhang_name')" />
                            </div>
                            <div class="form-group">
                                <label for="gewog">Type of Work *</label>
                                <select class="form-control" id="work_type" required name="work_type" v-model="form.work_type">
                                    <option value="">Select work Type</option>
                                    <option value="Thangka Painting">Thangka Painting</option>
                                    <option value="Wall Painting">Wall Painting</option>
                                    <option value="Restoration">Restoration</option>
                                    <option value="Conservation">Conservation</option>
                                    <option value="Restoration/Conservation">Restoration / Conservation</option>
                                </select>
                                <div v-if="form.errors.has('work_type')" v-html="form.errors.get('work_type')" />
                            </div>

                            <div class="form-group">
                                <label for="work_desc">Work Description *</label>
                                 <select class="form-control" id="work_type" required name="work_desc" v-model="form.work_desc">
                                    <option value="">Select work Type</option>
                                    <option value="Deattach">Deattach</option>
                                    <option value="Reattach">Reattach</option>
                                    <option value="Reattach/Deattach">Reattach / Deattach</option>
                                </select>
                                <div v-if="form.errors.has('work_desc')" v-html="form.errors.get('work_desc')" />
                            </div>

                            <div class="form-group">
                                <label for="work_desc">Number of Thangka *</label>
                                <input id="no_of_thangka" v-model="form.no_of_thangka" type="number" name="no_of_thangka" placeholder="No of Thangka" class="form-control">
                                <div v-if="form.errors.has('no_of_thangka')" v-html="form.errors.get('no_of_thangka')" />
                            </div>

                            <div class="form-group">
                                <label for="year">Year *</label>
                                <input type="text" id="year" v-model="form.year" name="year" placeholder="Enter Year" class="form-control" />
                                <div v-if="form.errors.has('year')" v-html="form.errors.get('year')" />
                            </div>

                            <div class="form-group">
                                <label for="work_desc">Remarks *</label>
                                <textarea id="remarks" v-model="form.remarks" name="remarks" placeholder="Remarks" class="form-control" rows="3" />
                                <div v-if="form.errors.has('remarks')" v-html="form.errors.get('remarks')" />
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
                            <button v-show="!editmode" type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    import Form from 'vform'
    import axios from 'axios'
    import $ from 'jquery'

    export default {
        data: () => ({

            details: {},
            dzongkhags: {},
            gewogs: {},

            selectedDzongkhag: '',
            selectedGewog: '',
            selectedWorkType: '',
            selectedWorkDesc: '',
            selectedNoOfThangka: '',
            search: '',

            editmode: false,

            form: new Form({
                id: '',
                dzongkhag_id: '',
                gewog_id: '',
                lhakhang_name: '',
                work_type: '',
                work_desc: '',
                no_of_thangka: '',
                year: '',
                remarks: '',
            })
        }),

        watch : {
            'form.dzongkhag_id' : function(value) {
                axios.get('/api/gewogs?dzo_id='+this.form.dzongkhag_id)
                .then(response => {
                    // console.log(response.data);
                    this.gewogs = response.data.data;
                })
            },

            selectedDzongkhag: function(value) {
                 axios.get('/api/gewogs?dzo_id='+this.selectedDzongkhag)
                .then(response => {
                    // console.log(response.data);
                    this.gewogs = response.data.data;
                });
                
                this.getResults();
            },

            selectedGewog : function(value) {
                this.getResults();
            },

            search : function(value) {
                this.getResults();
            },

            selectedWorkType : function(value) {
                this.getResults();
            },

            selectedWorkDesc : function(value) {
                this.getResults();
            },

            selectedNoOfThangka : function(value) {
                this.getResults();
            },
        },

        methods: {
            // This method is for pagination
            getResults(page = 1) {
                axios.get('api/home?page=' 
                    + page 
                    + "&dzongkhag_id=" + this.selectedDzongkhag
                    + "&gewog_id=" + this.selectedGewog
                    + "&work_type=" + this.selectedWorkType
                    + "&work_desc=" + this.selectedWorkDesc
                    + "&no_of_thangka=" + this.selectedNoOfThangka
                    + "&search=" + this.search
                    )
                    .then(response => {
					    this.details = response.data;
				    });
		        },

            // Open new modal
            newModal () {
                this.form.reset();
                $('#addNew').modal({
                    backdrop: 'static',
                    keyboard: true, 
                    show: true
                });
            },

            updateHome() {
                console.log('editing data');
                // this.$Progress.start();
                this.form.put('/api/home/' +this.form.id)
                .then(() => {
                    $('#addNew').modal('hide');
                    Swal.fire(
                        'Updated!',
                        'Your info has been updated.',
                        'success'
                    )
                    Fire.$emit('AfterCreate');
                })
                .catch(() => {
                    // this.$Progress.fail();
                })
            },

            editModal (detail) {
                this.editmode = true;
                this.form.reset();
                $('#addNew').modal({
                    backdrop: 'static',
                    keyboard: true, 
                    show: true
                });
                this.form.fill(detail);
            },

            // delete Home
            deleteHome (id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    })
                    .then((result) => {

                        if (result.value) {
                            this.form.delete('/api/home/'+id).
                            then(() => {  
                                Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                                )   
                                Fire.$emit('AfterCreate');
                            })
                            .catch(() => {
                                Swal.fire(
                                    'Failed!',
                                    'There was something wrong.',
                                    'warning'
                                )
                            })
                        }
                    })
            },

            // get admin
            loadHome () {
                axios.get("/api/home").then(({ data }) => (this.details = data));
            },

            // // Create new data set
            async createHome () {
                this.editmode = false;
                // this.$Progress.start();
                const response = await this.form.post('/api/home')
                .then(() => {
                    Fire.$emit('AfterCreate');
                    $('#addNew').modal('hide');
                    
                    Toast.fire({
                        icon: 'success',
                        title: 'Created in successfully'
                    });
                    
                    // this.$Progress.finish();
                })
                .catch(() => {

                })
            }
        },

        created () {
            this.loadHome();
            Fire.$on('AfterCreate', () => {
                this.loadHome();
            })
            // setInterval(()=> this.loadAdmin(), 3000);
        },

        mounted() {
            axios.get('/api/dzongkhags')
            .then(response => {
                this.dzongkhags = response.data.data;
            });
        },
    }
</script>