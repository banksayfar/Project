<template>
  <div>
    <div class="profile-page">
      <div>
        <div
          class="page-header header-filter"
          data-parallax="true"
          style="background-image: url('assets/img/examples/city.jpg');"
        ></div>

        <div class="main main-raised">
          <div class="profile-content">
            <div class="container">
              <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                  <div class="profile">
                    <div class="avatar">
                      <img
                        :src="user.member_pictureurl"
                        alt="Circle Image"
                        class="img-circle img-raised"
                      >
                    </div>

                    <h3 class="title">{{user.member_displayname}}</h3>
                    <h6>#{{user.member_id}}</h6>
                    
                  </div>
                </div>
                <div class="col-xs-2 follow">
                  <button
                    class="btn btn-fab btn-primary"
                    data-toggle="modal"
                    data-target="#updateprofile"
                  >
                    <!-- rel="tooltip" title="Follow this user" -->
                    <i class="material-icons">add</i>
                  </button>
                </div>
              </div>

              <div class="description text-center">
                <!-- <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p> -->
              </div>

              <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="profile-tabs">
                    <div class="nav-align-center">
                      <ul class="nav nav-pills nav-pills-icons" role="tablist">
                        <li class="active">
                          <a href="#work" role="tab" data-toggle="tab">
                            <i class="material-icons">palette</i>
                            REVIEW
                          </a>
                        </li>
                        <li>
                          <a href="#connections" role="tab" data-toggle="tab">
                            <i class="material-icons">people</i>
                            My_Cat
                          </a>
                        </li>
                        <li>
                          <a href="#media" role="tab" data-toggle="tab">
                            <i class="material-icons">camera</i>
                            Media
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- End Profile Tabs -->
                </div>
              </div>
              <div class="tab-content">
                <div class="tab-pane active work" id="work">
                  <div class="row">
                    <div class="col-md-7 col-md-offset-1">
                      <h4 class="title">Review</h4>
                      <div class="row collections">
                        <div class="col-md-6">
                          <div
                            class="card card-background"
                            style="background-image: url('assets/img/examples/chris4.jpg')"
                          >
                            <a href="#pablo"></a>
                            <div class="card-content">
                              <label class="label label-primary">Spring 2016</label>
                              <a href="#pablo">
                                <h2 class="card-title">Stilleto</h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div
                            class="card card-background"
                            style="background-image: url('assets/img/examples/chris6.jpg')"
                          >
                            <a href="#pablo"></a>
                            <div class="card-content">
                              <label class="label label-primary">Spring 2016</label>
                              <a href="#pablo">
                                <h2 class="card-title">High Heels</h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div
                            class="card card-background"
                            style="background-image: url('assets/img/examples/chris5.jpg')"
                          >
                            <a href="#pablo"></a>
                            <div class="card-content">
                              <label class="label label-primary">Summer 2016</label>
                              <a href="#pablo">
                                <h2 class="card-title">Flats</h2>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div
                            class="card card-background"
                            style="background-image: url('assets/img/examples/chris1.jpg')"
                          >
                            <a href="#pablo"></a>
                            <div class="card-content">
                              <label class="label label-primary">Winter 2015</label>
                              <a href="#pablo">
                                <h2 class="card-title">Men's Sneakers</h2>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2 col-md-offset-1 stats">
                      <h4 class="title">Stats</h4>
                      <ul class="list-unstyled">
                        <li>
                          <b>60</b> &nbsp;&nbsp; Review
                        </li>
                        <li>
                          <b>10</b> &nbsp;&nbsp; Cat's
                        </li>
                        
                      </ul>
                      <hr>
                      <h4 class="title">About his status</h4>
                      <p
                        class="description"
                      >{{user.member_status}}</p>
                      <hr>
                      <h4 class="title">Contact</h4>
                      <p>Tel : &nbsp;{{user.member_phone}}</p>
                      <p>FB : &nbsp;<a :href="user.urlfacebook" target="_blank">{{user.facebook}}</a></p>
                      
                      <p>Line :  &nbsp;{{user.line}}</p>
                    </div>
                  </div>
                </div>

                <div class="tab-pane connections" id="connections">
                  <div align="right">
                    <button class="btn btn-primary" data-toggle="modal" data-target="#noticeModal">
                      <i class="material-icons">add</i>AddCats
                    </button>
                  </div>
                  <div class="row">
                    <div class="col-md-5 col-md-offset-1" v-for="mycat in mycat_s" :key="mycat.id">
                      <div class="card card-profile card-plain">
                        <div class="col-md-5">
                          <div class="card-image">
                            <a href="#pablo">
                              <img class="img" :src="mycat.base64">
                            </a>
                          </div>
                        </div>
                        <div class="col-md-7">
                          <div class="card-content">
                            <h4 class="card-title">{{mycat.cat_name}}</h4>
                            <h6 class="category text-muted"></h6>

                            <p
                              class="card-description"
                              style="white-space: normal;width:100%;height: 60px;overflow: hidden;"
                            >{{mycat.cat_description}}</p>
                         <button class="btn btn-primary" data-toggle="modal" data-target="#Editcat" @click="show_editcat(mycat.cat_id)">
                             Edit
                        </button>
                            <button
                              class="btn btn-danger"
                          @click="adddelete(mycat.cat_id)"
                            >Delete</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane text-center gallery" id="media">
                  <div class="row">
                    <div class="col-md-3 col-md-offset-3">
                      <img src="assets/img/examples/chris4.jpg" class="img-rounded">
                      <img src="assets/img/examples/chris6.jpg" class="img-rounded">
                    </div>
                    <div class="col-md-3">
                      <img src="assets/img/examples/chris7.jpg" class="img-rounded">
                      <img src="assets/img/examples/chris5.jpg" class="img-rounded">
                      <img src="assets/img/examples/chris9.jpg" class="img-rounded">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- notice modal -->
    <div
      class="modal fade"
      id="updateprofile"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-notice">
        <div class="modal-content card card-signup">
          <div class="modal-header">
            <button type="button" to class="close" data-dismiss="modal" aria-hidden="true">
              <i class="material-icons">clear</i>
            </button>
            <div class="header header-primary text-center">
              <h4 class="card-title">Edit Profile</h4>
            </div>
          </div>
          <div class="modal-body">
            <div class="instruction">
              <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-9">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      style="color:red"
                      v-model="user.member_userid"
                      value="user.member_userid"
                      disabled
                      required
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      v-model="user.member_displayname"
                      value="user.member_displayname"
                      required
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      v-model="user.member_phone"
                      value="user.member_phone"
                      required
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      v-model="user.facebook"
                      value="user.facebook"
                      required
                    >
                     <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="url"
                      class="form-control"
                      v-model="user.urlfacebook"
                      value="user.urlfacebook"
                      required
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      v-model="user.line"
                      value="user.line"
                      required
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <textarea type="text"
                      class="form-control"
                      v-model="user.member_status"
                      value="user.member_status">
                      </textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center">
            <button
              @click="UpdateProfile();"
              class="btn btn-primary btn-simple btn-wd btn-lg"
              data-dismiss="modal"
              aria-hidden="true"
            >Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end notice modal -->
    <div
      class="modal fade"
      id="noticeModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="myModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-notice">
        <div class="modal-content card card-signup">
          <div class="modal-header">
            <button type="button" to class="close" data-dismiss="modal" aria-hidden="true">
              <i class="material-icons">clear</i>
            </button>
            <div class="header header-primary text-center">
              <h4 class="card-title">ADD CAT</h4>
            </div>
          </div>
          <div class="modal-body">
            <div class="instruction">
              <div class="row">
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Name..."
                      v-model="form.cat_name"
                      required
                    >
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <select
                      class="form-control datetimepicker"
                      v-model="form.cat_sex"
                      data-style="select-with-transition"
                      title="กรุณาเลิอกเพศ"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>กรุณาเลิอกเพศ</option>
                      <option value="เพศผู้" @click="form.cat_sex = 'เพศผู้'">เพศผู้</option>
                      <option value="เพศเมีย" @click="form.cat_sex = 'เพศเมีย'">เพศเมีย</option>
                    </select>
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    
                    <select
                      class="form-control"
                      v-model="form.cat_provinces"
                      data-style="select-with-transition"
                      title="กรุณาเลิอกจังหวัด"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>กรุณาเลิอกจังหวัด</option>
                      <option
                        v-for="province in provinces"
                        :key="province.id"
                        :value="province.id"
                      >{{province.name_th}}</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <input
                      type="date"
                      class="form-control datetimepicker"
                      placeholder="birthdate..."
                      v-model="form.cat_birthdate"
                    >
                  </div>
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <select
                      class="form-control"
                      v-model="form.cat_breed"
                      data-style="select-with-transition"
                      title="กรุณาเลิอกสายพันธ์"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>กรุณาเลิอกสายพันธ์</option>
                      <option
                        v-for="catbreeds in catbreed"
                        :key="catbreeds.id"
                        :value="catbreeds.catbreed_id"
                      >{{catbreeds.breed_name}}</option>
                    </select>
                  </div>

                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>

                    <div class="form-group form-file-upload">
                      <input type="file" @change="onFileChanged" multiple>

                      <div class="input-group">
                        <input
                          type="text"
                          readonly
                          class="form-control"
                          placeholder="Simple chooser..."
                          multiple
                        >
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="input-group">
                    <span class="input-group-addon">
                      <i class="material-icons">face</i>
                    </span>
                    <textarea
                      type="text"
                      class="form-control"
                      placeholder="รายละเอียด..."
                      v-model="form.cat_description"
                      rows="6"
                      required
                    ></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer text-center">
            <button
              @click="addCat();"
              data-dismiss="modal"
              class="btn btn-primary btn-simple btn-wd btn-lg"
            >Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end notice modal -->
     <!-- notice modal -->
<div class="modal fade" id="Editcat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">

    <div class="modal-content card card-signup ">
      <div class="modal-header">
        <button type="button" to="" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>                       
         <div class="header header-primary text-center">
            <h4 class="card-title">EDIT CAT</h4>
       </div>
      </div>
    <div class="modal-body">
        <div class="instruction">
            <div class="row">
                <div class="col-md-6">
                   
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="Name..." v-model="edit.cat_name"  required>
                   </div>
                   
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                             
                        </span>
                                    <select class="form-control datetimepicker" v-model="edit.cat_sex" data-style="select-with-transition" title="กรุณาเลิอกเพศ" data-size="7" tabindex="-98" >
                                         <option selected disabled>กรุณาเลิอกสายพันธ์</option>
                                        <option value="เพศผู้" @click="form.cat_sex = 'เพศผู้'">เพศผู้</option>
                                        <option value="เพศเมีย" @click="form.cat_sex = 'เพศเมีย'">เพศเมีย</option>                                 
                                    </select>
                          
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                                    <select class="form-control  " v-model="edit.cat_provinces" data-style="select-with-transition" title="กรุณาเลิอกจังหวัด" data-size="7" tabindex="-98">
                                        <option selected disabled>กรุณาเลิอกจังหวัด</option>
                                        <option v-for="province in provinces" :key="province.id" :value="province.id" >{{province.name_th}}</option>
                                    </select>
                                
                   </div>
                   
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="date" class="form-control datetimepicker"  placeholder="birthdate..." v-model="edit.cat_birthdate" >
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                                <select class="form-control  " v-model="edit.cat_breed" data-style="select-with-transition" title="กรุณาเลิอกสายพันธ์" data-size="7" tabindex="-98" >
                                         <option selected disabled>กรุณาเลิอกสายพันธ์</option>
                                        <option v-for="catbreeds in catbreed" :key="catbreeds.id" :value="catbreeds.catbreed_id">{{catbreeds.breed_name}}</option>                          
                                </select>
                   </div>
                    
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                            
                      <div class="form-group form-file-upload">
                      <input type="file" @change="onFileChangedEdit" multiple>

                      <div class="input-group">
                        <input
                          type="text"
                          readonly
                          class="form-control"
                          placeholder="Simple chooser..."
                          multiple
                        >
                      </div>
                    </div>


                      <!-- <div class="form-group form-file-upload"> 
                        <input type="file" @change="onFileChangedEdit" readonly="" class="form-control" placeholder="Simple chooser..."  multiple>
                               
                            </div> -->
                     </div>
                   </div>
                   <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <div class="">
                            <div class="col-md-6" v-for="viewcat in edit.cat_imgs" :key="viewcat.id">
                                    <img :src="viewcat.base64" style="width: 150px !important; height: 150px !important;"/>
                             <a  @click="delete_img(viewcat.id,viewcat.cat_id)"><i class="material-icons" >clear</i></a>
                            </div>
                         </div>
                   </div>
               <div class="col-md-12">
              <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <textarea type="text" class="form-control" placeholder="รายละเอียด..." v-model="edit.cat_description" rows="6" required>


                        </textarea>
              </div>
              </div>
            </div>
             
            
        </div>
      </div>
        <div class="modal-footer text-center">
          <button  @click="EditCat(edit.cat_id);" data-dismiss="modal" class="btn btn-primary btn-simple btn-wd btn-lg">Submit</button>
        </div>
    </div>

   
  </div>
</div>
  </div>
</template>
<script>
import UserStore from "@/stores/UserStore";
import router from "@/router";
export default {
  name: "profile",
  components: {},
  data() {
    return {
      provinces: [],
      catbreed: [],
      user: [],
      mycat_s: [],
      form: {
        cat_provinces: "กรุณาเลิอกจังหวัด",
        cat_name: null,
        cat_sex: "กรุณาเลิอกเพศ",
        cat_birthdate: null,
        cat_breed: "กรุณาเลิอกสายพันธ์",
        cat_img: null,
        cat_habit: null,
        cat_description: null,
        member_id: null
      },
      edit: {
        cat_provinces: null,
        cat_name: null,
        cat_sex: null,
        cat_birthdate: null,
        cat_breed: null,
        cat_img: null,
        cat_habit: null,
        cat_description: null,
        member_id: null
      }
    };
  },
  methods: {
    onFileChanged(e){
        // get the files
        let files = e.target.files;
        // Process each file
        this.form.cat_img = []
        for (var i = 0; i < files.length; i++) {
          let file = files[i]
          // Make new FileReader
          let reader = new FileReader()
          // Convert the file to base64 text
          reader.readAsDataURL(file)
          // on reader load somthing...
          reader.onload = () => {
            // Make a fileInfo Object
            let fileInfo = {
              name: file.name,
              type: file.type,
              size: Math.round(file.size / 1000)+' kB',
              base64: reader.result,
              file: file
            }

            // Push it to the state
// onFileChangedEdit
                  this.form.cat_img.push(fileInfo)
           
            
            
            console.log(this.form.cat_img)
            // If all files have been proceed
            // if(this.form.cat_img.length == files.length){
            //   // Apply Callback function
            //   if(this.multiple) this.done(this.form.cat_img)
            //   else this.done(this.form.cat_img[0])
            // }
           
          } // reader.onload
        } // for

      }, // onChange()
       onFileChangedEdit(e){
        // get the files
        let files = e.target.files;
        // Process each file
        this.edit.new_imgs = []
        for (var i = 0; i < files.length; i++) {
          let file = files[i]
          // Make new FileReader
          let reader = new FileReader()
          // Convert the file to base64 text
          reader.readAsDataURL(file)
          // on reader load somthing...
          reader.onload = () => {
            // Make a fileInfo Object
            let fileInfo = {
              name: file.name,
              type: file.type,
              size: Math.round(file.size / 1000)+' kB',
              base64: reader.result,
              file: file
            }

            // Push it to the state
// 
                  this.edit.new_imgs.push(fileInfo)
           
            
            
            console.log("this.edit.cat_img",this.edit.cat_img)
            // If all files have been proceed
            // if(this.form.cat_img.length == files.length){
            //   // Apply Callback function
            //   if(this.multiple) this.done(this.form.cat_img)
            //   else this.done(this.form.cat_img[0])
            // }
           
          } // reader.onload
        } // for

      }, // onChange()
    getUser: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token
      };
      await UserStore.dispatch("getUser", optionts);

      if (UserStore.state.user.status == 200) {
        this.user = UserStore.state.user.user;
      } else if (UserStore.state.user.status == 400) {
        router.push("/logout");
      }
    },
    UpdateProfile: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
        form: this.user
      };
      // console.log(optionts);
      await UserStore.dispatch("UpdateProfile", optionts);
      console.log(UserStore.state.update);
      if (UserStore.state.update.status == 200) {
        this.getUser("Header");
      } else if (UserStore.state.update.status == 400) {
        router.push("/logout");
      }
    },
    EditCat: async function(cat_id) {
      
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
        cat_id:cat_id,
        edit: this.edit
      };
      console.log(optionts);
      await UserStore.dispatch("getEditCat", optionts);
  
      if (UserStore.state.update.status == 200) {
        this.mycat();
      } else if (UserStore.state.EditCat.status == 400) {
        router.push("/logout");
      }
    },
     adddelete: async function(cat_id) {
      if(!confirm('Are you sure you want to delete this item?')){
          return
      }
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
        cat_id:cat_id,
      };
      await UserStore.dispatch("getdelete", optionts);
      this.mycat();
      if (UserStore.state.update.status == 200) {
        this.mycat();
      } else if (UserStore.state.EditCat.status == 400) {
        router.push("/logout");
      }
    },
    mycat: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
      };
      await UserStore.dispatch("mycat", optionts);
      console.log(UserStore.state.mycat);
      if (UserStore.state.mycat.status == 200) {
        this.mycat_s = UserStore.state.mycat.mycat;
      } else if (UserStore.state.mycat.status == 400) {
    
      }
    },
    addCat: async function() {
      if (!localStorage.access_token) router.push("/");
      this.form.member_id = this.user.member_id;
      let optionts = {
        access_token:localStorage.access_token,
        form: this.form
      };
      await UserStore.dispatch("addCat", optionts);
      console.log(UserStore.state.addCat);
      if (UserStore.state.addCat.status == 200) {
        this.mycat();
        this.form = {
          cat_provinces: "กรุณาเลิอกจังหวัด",
          cat_name: null,
          cat_sex: "กรุณาเลิอกเพศ",
          cat_birthdate: null,
          cat_breed: "กรุณาเลิอกสายพันธ์",
          cat_img: {},
          cat_habit: null,
          cat_description: null,
          member_id: null
        };
      } else if (UserStore.state.addCat.status == 400) {
        router.push("/logout");
      }
    },
    getFromsearch: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token
      };
      await UserStore.dispatch("getFromsearch", optionts);
      console.log(UserStore.state.fromsearch);
      
        this.provinces = UserStore.state.fromsearch.provinces;
        this.catbreed = UserStore.state.fromsearch.catbreed;
        this.showcat = UserStore.state.fromsearch.showcat;
     
    },
    delete_img: async function(id,cat_id) {
      if(!confirm('Are you sure you want to delete this item?')){
          return
      }
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
        id:id,
        cat_id:cat_id
      };
      await UserStore.dispatch("delete_img", optionts);
      if (UserStore.state.delete_img.status == 200) {
        this.show_editcat(cat_id);
      } else if (UserStore.state.delete_img.status == 400) {
          alert('ไม่สามารถลบรูปแมวได้');
      }
    },
    show_editcat: async function(cat_id) {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token,
        cat_id:cat_id
      };
      await UserStore.dispatch("show_editcat", optionts);

      if (UserStore.state.show_editcat.status == 200) {
        this.edit = UserStore.state.show_editcat.data;
        console.log(UserStore.state.show_editcat.data)
      } else if (UserStore.state.show_editcat.status == 400) {
        router.push("/logout");
      }
    },
  },

  async mounted() {
    window.scrollTo(0, 0);
    await this.getUser();
    await this.mycat();
    await this.getFromsearch();
$(document).ready(function () {
        //บนสุด
        window.scrollTo(0, 0);
       setTimeout(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                itemsToScroll: 1,
                animationSpeed: 400,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 3
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 3
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 3
                    }
                }
            });
        },3000);
        
    });
  },

};
 
</script>