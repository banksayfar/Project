<template>
    <div>
<div class="product-page">
    <div class="page-header header-filter" data-parallax="true" filter-color="rose" style="background-image: url('/assets/img/bg6.jpg');">
    </div>
    <div class="section section-gray">
        <div class="container">
            <div class="main main-raised main-product ">
                <div class="row">
                    <div class="col-md-6 col-sm-6 ">
                       <div class="tab-content">
                            <div v-for="viewcat in viewcat_s.cat_imgs" :key="viewcat.id" :class="'tab-pane '+(viewcat_s.cat_imgs[0].id == viewcat.id ? 'active':'')"  :id="'product-page'+viewcat.id">
                                <img :src="viewcat.base64" class="catimgs"/>
                            </div>
                        </div>
                        <ul class="nav flexi-nav " role="tablist" id="flexiselDemo1">
                            <li v-for="viewcat in viewcat_s.cat_imgs" :key="viewcat.id" :class="(viewcat_s.cat_imgs[0].id == viewcat.id ? 'active':'')">
                                <a :href="'#product-page'+viewcat.id" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img :src="viewcat.base64" class="catimg"/>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h2 class="title"> {{viewcat_s.cat_name}} </h2>
                        <div id="acordeon">
                            <div class="panel-group" id="accordion">
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    รายละเอียด
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <p>
                                        {{viewcat_s.cat_description}} </p>
                                        
                                <div class="col-md-4 col-sm-6">
                              <label>การฉีดวัคซีน</label>
                            <p type="text" class="form-control">{{viewcat_s.cat_vaccine}}</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                              <label>ใบรับรองพันธุ์ประวัติ</label>
                            <p type="text" class="form-control">{{viewcat_s.cat_regispet}}</p>
                            </div>
                            <div class="col-md-4 col-sm-4">
                              <label>ข้อตกลงในการจับคู่</label>
                            <p type="text" class="form-control">{{viewcat_s.cat_expenses}}</p>
                            </div>
                               
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="heading">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse" aria-expanded="true" aria-controls="collapse">
                                    <h4 class="panel-title">
                                    ประวัติการจับคู่
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapse" class="panel-collapse collapse in">
                                <div class="panel-body" v-for="viewcat1 in viewcat_s.catmatch1" :key="viewcat1.id">
                               <div class="panel-body" v-for="viewcat in viewcat_s.catmatch0" :key="viewcat.id">
                                <p>
                        
                                        <a :href="'/product/'+viewcat.cat_id" target="_blank">{{viewcat.cat_name}}</a>
                                        จับคู่กับ
                                        <a :href="'/product/'+viewcat1.cat_id" target="_blank"> {{viewcat1.cat_name}}</a>
                                </p>
                              </div>
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="heading">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseuser" aria-expanded="true" aria-controls="collapse">
                                    <h4 class="panel-title">
                                    รายละเอียดเจ้าของ
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseuser" class="panel-collapse collapse in">
                              <div class="panel-body">
                                <p>
                                       ชื่อ : {{viewcat_s.member_displayname}}</p>
                                       <p> โทร :{{viewcat_s.member_phone}}</p>
                                     <p>   Line :{{viewcat_s.line}}</p>
                                
                                       <a :href="viewcat_s.urlfacebook">Facebook :{{viewcat_s.facebook}}</a> 
                                        
                              </div>
                            </div>
                          </div>
                           </div>
                            </div>
                        </div>
                    <div class="row pick-size " style="height 100%">
                               
                            <div class="col-md-3 col-sm-3">
                              <label>สายพันธ์</label>
                            <p type="text" class="form-control">{{viewcat_s.breed_name}}</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label>จังหวัด</label>
                                   <p type="text" class="form-control">{{viewcat_s.name_th}}</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                 <label>อายุ</label>
                               <p type="text" class="form-control">{{viewcat_s.age}}</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                 <label>เพศ</label>
                               <p type="text" class="form-control">{{viewcat_s.cat_sex}}</p>
                            </div>
                            </div>
                        </div>
                        <div class="row text-right">
                            <button class="btn btn-rose btn-round"   @click="catmatch(viewcat_s.cat_id,viewcat_s.cat_sex)"  data-toggle="modal" data-target="#match">จับคู่</button>
                        </div>
                    </div>
                </div>
            </div>
  

        </div>
        <div class="modal fade" id="match" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
        <h5 class="modal-title" id="myModalLabel">แมวที่สามารถจับคู่ได้!!</h5>
      </div>
      <div class="modal-body">
        <div class="instruction">
            <div class="row" v-for="catmatchs in catmatchs" :key="catmatchs.id">
                <div class="col-md-4">
                    <div class="picture">
                        <img :src="catmatchs.base64" alt="Thumbnail Image"  class="img-rounded img-responsive">
                    </div>
                </div>
                <div class="col-md-7">
                     <h3>{{catmatchs.cat_name}}</h3>
                     <p>รายละเอียด : {{catmatchs.cat_description}}</p>
                     <p></p>
                </div>
                <div  align="center">
                    <button type="button" @click="linebots(viewcat_s.cat_id,catmatchs.cat_id)"  class="btn btn-info btn-round" data-dismiss="modal">submit</button>
                </div>
            </div>
        </div>
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
  name: "product",
  components: {},
  data() {
    return {
      viewcat_s: [],
      catmatchs:[],
      viewcat_catmatch :[]

    };
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
    viewcat: async function() {
      let optionts = {
        id : this.$route.params.id,
        access_token: localStorage.access_token
      };
      await UserStore.dispatch("viewcat", optionts);
      if (UserStore.state.viewcat.status == 200) {
        this.viewcat_s = UserStore.state.viewcat.viewcat
        this.viewcat_catmatch= UserStore.state.viewcat.catmatch;
        
      } else if (UserStore.state.viewcat.status == 400) {
        router.push("/");
      }
    },
    linebots: async function(cat_id,catmatch_id) {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
          access_token: localStorage.access_token,
          cat_id : cat_id,
          catmatch_id :catmatch_id
      };
      await UserStore.dispatch("linebot", optionts);
    },
     catmatch: async function(cat_id,cat_sex) {
      if (!localStorage.access_token) {
          
            alert('กรุณาเข้าสู้ระบบเพื่อจับคู่!!')
            window.location="/product/"+cat_id
            return;
        }
      let optionts = {
           access_token: localStorage.access_token,
          cat_id : cat_id,
          cat_sex : cat_sex  
      };
      await UserStore.dispatch("catmatch", optionts);
      if (UserStore.state.catmatch.status == 200) {
        this.catmatchs = UserStore.state.catmatch.catmatch;
      }else if (UserStore.state.viewcat.status == 400) {
          
      }
    },
  }, 
   async mounted() {
    await this.viewcat();
    $(document).ready(function () {
        //บนสุด
        window.scrollTo(0, 0);
        // setTimeout(function () {
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
        // },3000);
        
    });
  },

};
    
</script>
