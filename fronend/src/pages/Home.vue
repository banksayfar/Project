<template>
<div>
    <div class="page-header" data-parallax="true" style="background-image: url('assets/img/background/1.jpg');width: 100%;height: 580px;">
            <br><br><br>

    </div>

            <div class="main main-raised">
                    
            <div class="section">
                    
            <div class="container">
                 <div align="right">
                         <button class="btn btn-primary" data-toggle="modal" data-target="#noticeModal">
                             <i class="material-icons">add</i>AddCats
                        </button>
                </div>
                <h2 class="section-title">Find what you need</h2>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-refine card-plain">
                            <div class="card-content">
                                <h4 class="card-title">
                                    Refine
                                    <button class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right" rel="tooltip" title="Reset Filter">
                                        <i class="material-icons">cached</i>
                                    </button>
                                </h4>
                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion" aria-expanded="false" aria-controls="collapseOne">
                                            <h4 class="panel-title">เพศ</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                   
                                     <div id="accordion" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                         <div class="panel-body">
                                             <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    All
                                                </label>
                                                
                                             </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    เพศผู้
                                                </label>
                                                
                                             </div>
                                            <div class="checkbox">
                                            <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" >
                                                    เพศเมีย
                                                </label>
                                                      
                                            </div>
                                        </div>
                                        </div>
                                </div>

                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">สายพันธ์</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" checked >
                                                        All
                                                </label>
                                            </div>
                                            <div class="checkbox" v-for="catbreeds in catbreed" :key="catbreeds.id">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" >
                                                    {{catbreeds.breed_name}}
                                                </label>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <h4 class="panel-title">นิสัย</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    All
                                            </label>
                                            </div>

                                            
                                        </div>
                                    </div>
                                </div> -->
                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">อายุ</h4>
                                            <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" data-toggle="checkbox" checked="">
                                                    All
                                                </label>
                                            </div>
                                    </div>
                                </div>
                            </div>

                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsecolor" aria-expanded="false" aria-controls="collapsecolor">
                                            <h4 class="panel-title">สี</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="collapsecolor" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox" checked="">
                                                    All
                                            </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Black
                                            </label>
                                            </div>

                                            <div class="checkbox">
                                                <label>
                                                <input type="checkbox" value="" data-toggle="checkbox">
                                                Blue
                                        </label>
                                            </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Brown
                                </label>
                                        </div>

                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="" data-toggle="checkbox">
                                            Gray
                                </label>
                                        </div>

                                        <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Green
                                                </label>
                                        </div>

                                        <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Neutrals
                                            </label>
                                        </div>

                                        <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox">
                                                    Purple
                                            </label>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default panel-rose">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#test" aria-expanded="false" aria-controls="collapseFour">
                                            <h4 class="panel-title">จังหวัด</h4>
                                        <i class="material-icons">keyboard_arrow_down</i>
                                        </a>
                                    </div>
                                    <div id="test" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <div class="checkbox">
                                            <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox"  checked>
                                                         All
                                            </label>
                                            </div>
                                            <div class="checkbox"  v-for="province in provinces" :key="province.id">
                                            <label>
                                                    <input type="checkbox" value="" data-toggle="checkbox"  >
                                                          {{province.name_th}}
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card -->
                    </div>

                    <div class="col-md-9">
                        <div class="row">
                        <div class="col-md-4" v-for="showcats in showcat" :key="showcats">
                                <div class="card card-product card-plain no-shadow " data-colored-shadow="false" >
                            <a :href="'/product'+'/'+showcats.cat_id">
                               
                                <div class="card-image">
                                    
                                        <img src="assets/img/cat/1.jpg" />
                                        </div>
                                
                                    </a>
                                    <div class="card-content">
                                
                                        <h4 class="card-title">    {{showcats.cat_name}}</h4>

                                    <p class="description" style="white-space: normal;width:100%;height: 60px;overflow: hidden;">
                                          {{showcats.cat_description}}
                                    </p>
                                    <div class="footer">
                                        <!-- <div class="price-container">
                                            <span class="price"> &euro; 800</span>
                                        </div> -->
                                        <i  v-if="showcats.cat_status=='ไม่ว่าง'" class="material-icons btn pull-right" style="color:red;" data-placement="left">fiber_manual_record</i>
                                        <i  v-if="showcats.cat_status=='ว่าง'" class="material-icons btn-sm pull-right " style="color:green;" data-placement="left">fiber_manual_record</i>
                                    </div>
                                        </div>

                                    
                                    </div>
                                <!-- end card -->
                            </div>
                            
                           
                            
                            
                            <div class="col-md-5 col-md-offset-4">
                                <div class="pagination-area text-center">
                                        <ul class="pagination">
                                            <li><a href="#">«<div class="ripple-container"></div></a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4<div class="ripple-container"></div></a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                         </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <h2 class="section-title">News in fashion</h2>

                <div class="row">
                    <div class="col-md-4">
                    <div class="card card-background" style="background-image: url(assets/img/examples/chris9.jpg)">
                            <div class="card-content">
                                <h6 class="category text-info">Productivy Apps</h6>
                                    <a href="#pablo">
                                        <h3 class="card-title">The best trends in fashion 2017</h3>
                                    </a>
                                <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                                </p>
                                <a href="#pablo" class="btn btn-white btn-round">
                                    <i class="material-icons">subject</i> Read
                                </a>
                            </div>
                    </div> <!-- end card -->
                    </div>

                    <div class="col-md-4">
                    <div class="card card-background" style="background-image: url(assets/img/examples/color3.jpg)">
                        <div class="card-content">
                            <h6 class="category text-info">Fashion News</h6>
                            <h3 class="card-title">Kanye joins the Yeezy team at Adidas</h3>
                            <p class="card-description">
                                Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-white btn-round">
                                <i class="material-icons">subject</i> Read
                            </a>
                        </div>
                    </div> <!-- end card -->
                    </div>

                    <div class="col-md-4">
                    <div class="card card-background" style="background-image: url(assets/img/examples/chris1.jpg)">
                        <div class="card-content">
                            <h6 class="category text-info">Productivy Apps</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">Learn how to use the new colors of 2017</h3>
                                </a>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-white btn-round">
                                <i class="material-icons">subject</i> Read
                            </a>
                        </div>
                    </div> <!-- end card -->
                    </div>

                    <div class="col-md-6">
                    <div class="card card-background" style="background-image: url(assets/img/dg3.jpg)">
                        <div class="card-content">
                            <h6 class="category text-info">Tutorials</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">Trending colors of 2017</h3>
                                </a>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                            <a href="#pablo" class="btn btn-white btn-round">
                                <i class="material-icons">subject</i> Read
                            </a>
                        </div>
                    </div> <!-- end card -->
                    </div>

                    <div class="col-md-6">
                    <div class="card card-background" style="background-image: url(assets/img/dg1.jpg)">
                        <div class="card-content">
                            <h6 class="category text-info">Productivy Style</h6>
                                <a href="#pablo">
                                    <h3 class="card-title">Fashion & Style 2017</h3>
                                </a>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                    </p>
                        <a href="#pablo" class="btn btn-white btn-round">
 <i class="material-icons">subject</i> read</a></div></div> <!-- end card -->
                    </div>
                </div>

            </div>
</div><!-- section -->

    </div> <!-- end-main-raised -->

    <div class="section section-blog">
        <div class="container">
            <h2 class="section-title">Latest Articles</h2>
            <div class="row">
                <div class="col-md-4">

                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="assets/img/dg6.jpg" alt="">
                            </a>
                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/examples/color1.jpg&quot;); opacity: 1;"></div><div class="ripple-container"></div></div>
                        <div class="card-content">
                            <h6 class="category text-rose">Trends</h6>
                            <h4 class="card-title">
                                <a href="#pablo">Learn how to wear your scarf with a floral print shirt</a>
                            </h4>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="assets/img/dg10.jpg" alt="">
                            </a>
                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/examples/color1.jpg&quot;); opacity: 1;"></div><div class="ripple-container"></div></div>
                        <div class="card-content">
                            <h6 class="category text-rose">Fashion week</h6>
                            <h4 class="card-title">
                            <a href="#pablo">Katy Perry was wearing a Dolce & Gabanna arc dress</a>
                            </h4>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
                            </p>
                        </div>
                    </div>

                </div>

                <div class="col-md-4">

                    <div class="card card-blog">
                        <div class="card-image">
                            <a href="#pablo">
                                <img src="assets/img/dg9.jpg" alt="">
                            </a>
                        <div class="colored-shadow" style="background-image: url(&quot;assets/img/examples/color1.jpg&quot;); opacity: 1;"></div><div class="ripple-container"></div></div>
                        <div class="card-content">
                            <h6 class="category text-rose">Fashion week</h6>
                            <h4 class="card-title">
                                <a href="#pablo">Check the latest fashion events and which are the trends</a>
                            </h4>
                            <p class="card-description">
                            Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
 </div><!-- section -->
 <!-- notice modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">

    <div class="modal-content card card-signup ">
      <div class="modal-header">
        <button type="button" to="" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>                       
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
                        <input type="text" class="form-control" placeholder="Name..." v-model="form.cat_name" required>
                   </div>
                   
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                             
                        </span>
									<select class="form-control datetimepicker" v-model="form.cat_sex" data-style="select-with-transition" title="กรุณาเลิอกเพศ" data-size="7" tabindex="-98" >
                                        <option selected disabled>กรุณาเลิอกเพศ</option>
                                        <option value="เพศผู้" @click="form.cat_sex = 'เพศผู้'">เพศผู้</option>
                                        <option value="เพศเมีย" @click="form.cat_sex = 'เพศเมีย'">เพศเมีย</option>                                 
                                    </select>
                          
                     </div>
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>

									<select class="form-control" v-model="form.cat_provinces" data-style="select-with-transition" title="กรุณาเลิอกจังหวัด" data-size="7" tabindex="-98">
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
                        <input type="date" class="form-control datetimepicker"  placeholder="birthdate..." v-model="form.cat_birthdate" >
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        	    <select class="form-control " v-model="form.cat_breed" data-style="select-with-transition" title="กรุณาเลิอกสายพันธ์" data-size="7" tabindex="-98">
                                         <option selected disabled>กรุณาเลิอกสายพันธ์</option>
                                        <option v-for="catbreeds in catbreed" :key="catbreeds" :value="catbreeds.catbreed_id" @click="form.cat_breed">{{catbreeds.breed_name}}</option>                          
                                </select>
                   </div>
                    
                     <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        	
                      <div class="form-group form-file-upload">
								<input type="file" id="inputFile1" multiple="">
								<div class="input-group">
									<input type="text" readonly="" class="form-control" placeholder="Simple chooser..." multiple="">
								</div>
							</div>
                     </div>
                   </div>
                   
                   
                     
        
         
               <div class="col-md-12">
              <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <textarea type="text" class="form-control" placeholder="รายละเอียด..." v-model="form.cat_description" rows="6" required>


                        </textarea>
              </div>
              </div>
            </div>
             
            
        </div>
      </div>
        <div class="modal-footer text-center">
          <button  @click="addCat();" data-dismiss="modal" class="btn btn-primary btn-simple btn-wd btn-lg">Submit</button>
        </div>
    </div>

   
  </div>
</div>
<!-- end notice modal -->
</div>


</template>

<script>
import UserStore from "@/stores/UserStore";
import router from "@/router";
export default {
  name: "Home",
  data() {
    return {
      provinces: [],
      catbreed: [],
      showcat: [],
      user: [],
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
      }
    };
  },
  methods: {
    getFromsearch: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token
      };
      await UserStore.dispatch("getFromsearch", optionts);
      console.log(UserStore.state.fromsearch);
      if (UserStore.state.fromsearch.status == 200) {
        this.provinces = UserStore.state.fromsearch.provinces;
        this.catbreed = UserStore.state.fromsearch.catbreed;
        this.showcat = UserStore.state.fromsearch.showcat;
      } else if (UserStore.state.fromsearch.status == 400) {
        router.push("/logout");
      }
    },

    addCat: async function() {
      if (!localStorage.access_token) router.push("/");
      this.form.member_id = this.user.member_id;

      let optionts = {
        access_token: localStorage.access_token,
        form: this.form
      };
      await UserStore.dispatch("addCat", optionts);
      console.log(UserStore.state.addCat);
      if (UserStore.state.addCat.status == 200) {
        this.getFromsearch();
        this.form={
        cat_provinces: "กรุณาเลิอกจังหวัด",
        cat_name: null,
        cat_sex: "กรุณาเลิอกเพศ",
        cat_birthdate: null,
        cat_breed: "กรุณาเลิอกสายพันธ์",
        cat_img: null,
        cat_habit: null,
        cat_description: null,
        member_id: null
        }
      } else if (UserStore.state.addCat.status == 400) {
        router.push("/logout");
      }
    },
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
    LoadLinklinelogin: async function() {
      await UserStore.dispatch("getLoginLine");
      if (UserStore.state.lineloginline.status) {
        this.linklinelogin = UserStore.state.lineloginline.url;
      }
    }
  },
  async mounted() {
    await this.getFromsearch();
    await this.getUser();
  }
};
</script>