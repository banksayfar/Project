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
                              <!-- <div class="tab-pane active " id="product-page2">
                                  <img src="/assets/img/cat/A2.jpg" class="catimgs"/>
                             </div>
                              <div class="tab-pane " id="product-page3">
                                  <img src="/assets/img/cat/A3.jpg"   class="catimgs"/>
                              </div>
                              <div class="tab-pane " id="product-page4">
                                  <img src="/assets/img/cat/A4.jpg"  class="catimgs"/>
                              </div> -->
                        </div>
                        <ul class="nav flexi-nav " role="tablist" id="flexiselDemo1">
                            <li v-for="viewcat in viewcat_s.cat_imgs" :key="viewcat.id" :class="(viewcat_s.cat_imgs[0].id == viewcat.id ? 'active':'')">
                                <a :href="'#product-page'+viewcat.id" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img :src="viewcat.base64" class="catimg"/>
                                </a>
                            </li>
                            <!-- <li class="active">
                                <a href="#product-page2" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="/assets/img/cat/A2.jpg" class="catimg"/>
                                </a>
                            </li>
                            <li>
                                <a href="#product-page3" role="tab" data-toggle="tab" aria-expanded="false">
                                    <img src="/assets/img/cat/A3.jpg" class="catimg" />
                                </a>
                            </li>
                            <li>
                                <a href="#product-page4" role="tab" data-toggle="tab" aria-expanded="true">
                                    <img src="/assets/img/cat/A4.jpg" class="catimg"/>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h2 class="title"> {{viewcat_s.cat_name}} </h2>
                        <!-- <h3 class="main-price">$335</h3> -->
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
                                        {{viewcat_s.cat_description}}</p>
                              </div>
                            </div>
                          </div>
                          
                            <div id="collapseTwo" class="panel-collapse collapse">
                              <div class="panel-body">
                              
                              </div>
                            </div>
                          </div>
                          <div class="panel panel-border panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-controls="collapseOne">
                                    <h4 class="panel-title">
                                    Review
                                    <i class="material-icons">keyboard_arrow_down</i>
                                    </h4>
                                </a>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul>
                                     <li>Storm and midnight-blue stretch cotton-blend</li>
                                     <li>Notch lapels, functioning buttoned cuffs, two front flap pockets, single vent, internal pocket</li>
                                     <li>Two button fastening</li>
                                     <li>84% cotton, 14% nylon, 2% elastane</li>
                                     <li>Dry clean</li>
                                </ul>
                              </div>
                            </div>
                          </div>

                        </div>
                        </div><!--  end acordeon -->
                    <div class="row pick-size">
                            <div class="col-md-3 col-sm-3">
                              <label>สายพันธ์</label>
                            <p type="text" class="form-control">{{viewcat_s.breed_name}}</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <label>จังหวัด</label>
                                   <p type="text" class="form-control">{{viewcat_s.name_th}}</p>
                            </div>
                           
                            <div class="col-md-3 col-sm-3">
                                 <br>
                                 <label>อายุ</label>
                               <p type="text" class="form-control">{{viewcat_s.age}}</p>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                 <br>
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

            <!-- <div class="features text-center">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">local_shipping</i>
                            </div>
                            <h4 class="info-title">2 Days Delivery </h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Refundable Policy</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-rose">
                                <i class="material-icons">favorite</i>
                            </div>
                            <h4 class="info-title">Popular Item</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
                        </div>
                    </div>

                </div>
            </div> -->
<!-- 
            <div class="related-products">
                <h3 class="title text-center">You may also be interested in:</h3>

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card card-product">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="/assets/img/examples/card-product1.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-rose">Trending</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Dolce & Gabbana</a>
                                </h4>
                                <div class="card-description">
                                    Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
                                </div>
                                <div class="footer">
                                    <div class="price">
                                        <h4>$1,459</h4>
                                    </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> -->

                    <!-- <div class="col-sm-6 col-md-3">
                        <div class="card card-product">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="/assets/img/examples/card-product3.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-muted">Popular</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Balmain</a>
                                </h4>
                                <div class="card-description">
                                    Balmain's mid-rise skinny jeans are cut with stretch to ensure they retain their second-skin fit but move comfortably.
                                </div>
                                <div class="footer">
                                    <div class="price">
                                        <h4>$459</h4>
                                    </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> -->

                    <!-- <div class="col-sm-6 col-md-3">
                        <div class="card card-product">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="/assets/img/examples/card-product4.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-muted">Popular</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Balenciaga</a>
                                </h4>
                                <div class="card-description">
                                    Balenciaga's black textured-leather wallet is finished with the label's iconic 'Giant' studs. This is where you can...
                                </div>
                                <div class="footer">
                                    <div class="price">
                                        <h4>$590</h4>
                                    </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="Saved to Wishlist" class="btn btn-just-icon btn-simple btn-rose">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!-- <div class="col-sm-6 col-md-3">
                        <div class="card card-product">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="/assets/img/examples/card-product2.jpg" />
                                </a>
                            </div>

                            <div class="card-content">
                                <h6 class="category text-rose">Trending</h6>
                                <h4 class="card-title">
                                    <a href="#pablo">Dolce & Gabbana</a>
                                </h4>
                                <div class="card-description">
                                    Dolce & Gabbana's 'Greta' tote has been crafted in Italy from hard-wearing red textured-leather.
                                </div>
                                <div class="footer">
                                    <div class="price">
                                        <h4>$1,459</h4>
                                    </div>
                                    <div class="stats">
                                        <button type="button" rel="tooltip" title="Save to Wishlist" class="btn btn-just-icon btn-simple btn-default">
                                            <i class="material-icons">favorite</i>
                                        </button>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div> -->

               
            
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
        this.viewcat_s = UserStore.state.viewcat.viewcat;
        
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
