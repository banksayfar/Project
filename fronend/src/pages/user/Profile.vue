<template>
<div>
<div class="profile-page">
    <div>

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('assets/img/examples/city.jpg');"></div>

    <div class="main main-raised">
        <div class="profile-content">
            <div class="container">

                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                       <div class="profile">
                            <div class="avatar">
                                <img :src="user.member_pictureurl" alt="Circle Image" class="img-circle img-responsive img-raised">
                            </div>
                            <div class="">
                                <h3 class="title">{{user.member_displayname}}</h3>
                                <h6>Designer</h6>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
                                <a href="#pablo" class="btn btn-just-icon btn-simple btn-pinterest"><i class="fa fa-pinterest"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-2 follow">
                       <button class="btn btn-fab btn-primary"  data-toggle="modal" data-target="#updateprofile" >
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
                                                 MA_Cat
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
                                <h4 class="title">Latest Collections</h4>
                                <div class="row collections">
                                    <div class="col-md-6">
                                        <div class="card card-background" style="background-image: url('assets/img/examples/chris4.jpg')">
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
                                        <div class="card card-background" style="background-image: url('assets/img/examples/chris6.jpg')">
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
                                        <div class="card card-background" style="background-image: url('assets/img/examples/chris5.jpg')">
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
                                        <div class="card card-background" style="background-image: url('assets/img/examples/chris1.jpg')">
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
                                    <li><b>60</b> Products</li>
                                    <li><b>4</b> Collections</li>
                                    <li><b>331</b> Influencers</li>
                                    <li><b>1.2K</b> Likes</li>
                                </ul>
                                <hr />
                                <h4 class="title">About his Work</h4>
                                <p class="description">French luxury footwear and fashion. The footwear has incorporated shiny, red-lacquered soles that have become his signature.</p>
                                <hr />
                                <h4 class="title">Focus</h4>
                                <span class="label label-primary">Footwear</span>
                                <span class="label label-rose">Luxury</span>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane connections" id="connections">
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="assets/img/cat/1.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">   Polo</h4>
                                            <h6 class="category text-muted"></h6>

                                            <p class="card-description">
                                          

 น้องแมวที่มีนิสัยแบบนี้จะติดคน และติดบ้านมาก ชอบนอนบนตักอุ่นๆ หรือบนหมอนเดียวกันกับเราเวลานอน ไม่ว่ามนุษย์ขยับไปไหนจะมีเจ้าเหมียวน้อยติดสอยห้อยตามไปทุกที่ น้องแมวจะคอยอยู่เคียงข้างเสมอ เรียกว่าตัวติดกันเป็นปาท่องโก๋ ไปไหนไปด้วยทั่วบ้านอย่างแน่นอน
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="assets/img/faces/marc.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Marc Jacobs</h4>
                                            <h6 class="category text-muted">Designer</h6>

                                            <p class="card-description">
                                                Don't be scared of the truth because we need to restart the human foundation in truth...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="assets/img/faces/kendall.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">Kendall Jenner</h4>
                                            <h6 class="category text-muted">Model</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye. Don't be scared of the truth.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="card card-profile card-plain">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <a href="#pablo">
                                                <img class="img" src="assets/img/faces/card-profile2-square.jpg" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="card-content">
                                            <h4 class="card-title">George West</h4>
                                            <h6 class="category text-muted">Model/DJ</h6>

                                            <p class="card-description">
                                                I love you like Kanye loves Kanye.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane text-center gallery" id="media">
                        <div class="row">
                            <div class="col-md-3 col-md-offset-3">
                                <img src="assets/img/examples/chris4.jpg" class="img-rounded" />
                                <img src="assets/img/examples/chris6.jpg" class="img-rounded" />
                            </div>
                            <div class="col-md-3">
                                <img src="assets/img/examples/chris7.jpg" class="img-rounded" />
                                <img src="assets/img/examples/chris5.jpg" class="img-rounded" />
                                <img src="assets/img/examples/chris9.jpg" class="img-rounded" />
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
<div class="modal fade" id="updateprofile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">

    <div class="modal-content card card-signup ">
      <div class="modal-header">
        <button type="button" to="" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>                       
         <div class="header header-primary text-center">
            <h4 class="card-title">Edit Profile</h4>
            
       </div>
      </div>
      <div class="modal-body">
        <div class="instruction" >
            <div class="row"  >
                 <div class="col-md-1" >

                 </div>
                <div class="col-md-9" >
                   
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" style="color:red"  v-model="user.member_userid" value="user.member_userid" disabled required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control"  v-model="user.member_displayname" value="user.member_displayname"  required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control"  v-model="user.member_phone" value="user.member_phone" required>
                   </div>
                   <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <textarea type="text" class="form-control" rows="4"  v-model="user.member_status" value="user.member_status" required></textarea>
                   </div>
                </div>
                
            </div>
            
            
        </div>
      </div>
        <div class="modal-footer text-center">
          <button  @click="UpdateProfile();" class="btn btn-primary btn-simple btn-wd btn-lg "  data-dismiss="modal" aria-hidden="true">Submit</button>
        </div>
    </div>
   
  </div>
</div>
<!-- end notice modal -->
</div>
</template>
<script>
import UserStore from '@/stores/UserStore'
import router from '@/router'
export default {
    name: 'profile',
    components: {
        
    },
    data(){
      return {
          user : [],
      }
    },
    methods: {
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
                this.getUser('Header');
            } else if (UserStore.state.update.status == 400) {
                router.push("/logout");
            }
        }
       
    
    
        
    },
    async mounted () {
        await this.getUser()
    },
}
</script>