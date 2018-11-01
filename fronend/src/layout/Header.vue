<template>
<div>
<nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" color-on-scroll=" " id="sectionsNav">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <router-link to="/" class="navbar-brand" >CatMeCatMai </router-link>
            </div>

            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                            <router-link to="/">
                                 <i class="material-icons">apps</i> Home
                             </router-link>
                    </li>

                    <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">view_day</i> Sections
                                 <b class="caret"></b>
                             </a>
                             <ul class="dropdown-menu dropdown-with-icons">
                                 <li>
                                     <a href="sections.html#headers">
                                         <i class="material-icons">dns</i> Headers
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#features">
                                         <i class="material-icons">build</i> Features
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#blogs">
                                         <i class="material-icons">list</i> Blogs
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#teams">
                                         <i class="material-icons">people</i> Teams
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#projects">
                                         <i class="material-icons">assignment</i> Projects
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#pricing">
                                         <i class="material-icons">monetization_on</i> Pricing
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#testimonials">
                                         <i class="material-icons">chat</i> Testimonials
                                     </a>
                                 </li>
                                 <li>
                                     <a href="sections.html#contactus">
                                         <i class="material-icons">call</i> Contacts
                                     </a>
                                 </li>

                             </ul>
                    </li>
                    

                    <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <i class="material-icons">view_carousel</i> Examples
                                 <b class="caret"></b>
                             </a>
                             <ul class="dropdown-menu dropdown-with-icons">
                                 <li>
                                     <a href="examples/about-us.html">
                                         <i class="material-icons">account_balance</i> About Us
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/blog-post.html">
                                         <i class="material-icons">art_track</i> Blog Post
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/blog-posts.html">
                                         <i class="material-icons">view_quilt</i> Blog Posts
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/contact-us.html">
                                         <i class="material-icons">location_on</i> Contact Us
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/landing-page.html">
                                         <i class="material-icons">view_day</i> Landing Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/login-page.html">
                                         <i class="material-icons">fingerprint</i> Login Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/pricing.html">
                                         <i class="material-icons">attach_money</i> Pricing Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/ecommerce.html">
                                         <i class="material-icons">shop</i> Ecommerce Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/product-page.html">
                                         <i class="material-icons">beach_access</i> Product Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/profile-page.html">
                                         <i class="material-icons">account_circle</i> Profile Page
                                     </a>
                                 </li>
                                 <li>
                                     <a href="examples/signup-page.html">
                                         <i class="material-icons">person_add</i> Signup Page
                                     </a>
                                 </li>
                             </ul>
                    </li>
                    
                    
                        
                                    <li>
                                       <router-link to="/Profile">
                                                 <i class="material-icons">account_circle</i>
                                            Profile
                                       </router-link>
                                    </li>
                                    <li>
                                        <a href="#pablo">
                                                 <i class="material-icons">settings</i>
                                                 Settings
                                        </a>
                                         </li>
                    
                  
                      <li class="button-container" v-if="user.member_id != null" >
                            <a href="" class="profile-photo dropdown-toggle btn btn-cray btn-round" data-toggle="dropdown"  > 
                                 <img :src="user.member_pictureurl" alt="Circle Image" class="img-circle profile-photo-small"  style="height:25px"> 
                                     {{ user.member_displayname }}
                                <i class="material-icons">keyboard_arrow_down</i>
                            </a>
                                
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">
                                            Dropdown header
                                        </li>
                                        <li>
                                            <router-link to="/profile">Me</router-link>
                                        </li>
                                        <li>
                                            <a href="">Settings and other stuff</a>
                                        </li>
                                        <li class="dividerdivider"></li>
                                        <li><a href="/logout">Sign out</a></li>
                                    </ul>

                    </li>
                    
                    <li v-else>
                    
                            <button  target="_blank" class="btn btn-rose btn-round" data-toggle="modal" data-target="#loginModal">
                               <i class="material-icons">lock</i> login
                            </button>

                    </li>
                    
                </ul>
                
            </div>
            
        </div>
    </nav>
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-login">
          <div class="modal-content">
               <div class="card card-signup card-plain">
                    <div class="modal-header">
                    
                         <button type="button" to="" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>                       
                         <div class="header header-primary text-center">
                              <h4 class="card-title">Log in</h4>
                                    <a :href="linklinelogin" >
                                        เข้าสู่ระบบ
                                        <img src="https://www.donelike.com/images/lineicon.png" style="width: 12% !important;" alt=""> 
                              
                                    </a>
                         </div>
                    </div>
                
                    <div class="modal-body">
                         <form class="form" method="" action="">
                              <p class="description text-center">
                                  <!-- Or Be Classical -->
                              </p>
                              <div class="card-content">

                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                   </div>
                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">lock_outline</i>
                                        </span>
                                        <input type="password" placeholder="Password..." class="form-control" />
                                   </div>

                                   <!-- If you want to add a checkbox to this form, uncomment this code

                                   <div class="checkbox">
                                        <label>
                                             <input type="checkbox" name="optionsCheckboxes" checked>
                                             Subscribe to newsletter
                                        </label>
                                   </div> -->
                              </div>
                         </form>
                    </div>
                    <div class="modal-footer text-center">
                         <a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</a>
                    </div>
               </div>
          </div>
     </div>
</div>
<!--  End Modal -->
<!-- notice modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
<form action="">
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
                        <input type="text" class="form-control" placeholder="Name..." name="cat_name" required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="sex..." required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="breed.." required>
                   </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="birthdate..." required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="status..." required>
                   </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="habit..." required>
                   </div>
                </div>
            </div>
             <div class="input-group">
                        <span class="input-group-addon">
                             <i class="material-icons">face</i>
                        </span>
                        <input type="text" class="form-control" placeholder="img..." required>
                   </div>
            
        </div>
      </div>
        <div class="modal-footer text-center">
          <button type="submit" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</button>
        </div>
    </div>
    </form>
  </div>
</div>
<!-- end notice modal -->
</div>
</template>

<script>
import UserStore from '@/stores/UserStore'

export default {
    name: 'header',
    components: {

    },
    data(){
      return {
          user : [],
          linklinelogin:null,
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
        LoadLinklinelogin: async function() {
            await UserStore.dispatch('getLoginLine')
            if(UserStore.state.lineloginline.status){
                this.linklinelogin = UserStore.state.lineloginline.url;
            }
        },
    
    
        
    },
    async mounted () {
        await this.LoadLinklinelogin()
        await this.getUser()
        
    },
}
</script>

