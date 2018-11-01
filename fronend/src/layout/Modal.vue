<template>
<div>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog">
          <div class="modal-content">
               <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                         <i class="material-icons">clear</i>
                    </button>
                    <h4 class="modal-title">Modal title</h4>
               </div>
               <div class="modal-body">
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    </p>
               </div>
               <div class="modal-footer">
                    <button type="button" class="btn btn-simple">Nice Button</button>
                    <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
               </div>
          </div>
     </div>
</div>
<!--  End Modal -->

<!-- notice modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notice">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
        <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
      </div>
      <div class="modal-body">
        <div class="instruction">
            <div class="row">
                <div class="col-md-8">
                     <strong>1. Register</strong>
                     <p>The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                </div>
                <div class="col-md-4">
                    <div class="picture">
                        <img src="assets/img/dg1.jpg" alt="Thumbnail Image"  class="img-rounded img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <div class="instruction">
            <div class="row">
                <div class="col-md-8">
                        <strong>2. Apply</strong>
                        <p>The first step is to create an account at <a href="http://www.creative-tim.com/">Creative Tim</a>. You can choose a social network or go for the classic version, whatever works best for you.</p>
                </div>
                <div class="col-md-4">
                    <div class="picture">
                        <img src="assets/img/dg2.jpg" alt="Thumbnail Image"  class="img-rounded img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <p>If you have more questions, don't hesitate to contact us or send us a tweet @creativetim. We're here to help!</p>
      </div>
      <div class="modal-footer text-center">
            <button type="button" class="btn btn-info btn-round" data-dismiss="modal">Sounds good!</button>
      </div>
    </div>
  </div>
</div>
<!-- end notice modal -->

<!-- small modal -->
<div class="modal fade" id="smallAlertModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-small ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
      </div>
      <div class="modal-body text-center">
        <h5>Are you sure you want to do this? </h5>
      </div>
      <div class="modal-footer text-center">
        <button type="button" class="btn btn-simple" data-dismiss="modal">Never mind</button>
        <button type="button" class="btn btn-success btn-simple">Yes</button>
      </div>
    </div>
  </div>
</div>
<!-- end small modal -->

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-login">
          <div class="modal-content">
               <div class="card card-signup card-plain">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>

                         <div class="header header-primary text-center">
                              <h4 class="card-title">Log in</h4>
                              <div class="social-line">
                                   <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-facebook-square"></i>
                                   </a>
                                   <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-twitter"></i>
                                   </a>
                                   <a href="#pablo" class="btn btn-just-icon btn-simple">
                                        <i class="fa fa-google-plus"></i>
                                   </a>
                              </div>
                         </div>
                    </div>
                    <div class="modal-body">
                         <form class="form" method="" action="">
                              <p class="description text-center">Or Be Classical</p>
                              <div class="card-content">

                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                   </div>

                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="Email...">
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

<!-- Register Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-signup">
          <div class="modal-content">
               <div class="card card-signup card-plain">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                         <h2 class="modal-title card-title text-center" id="myModalLabel">Register</h2>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                              <div class="col-md-5 col-md-offset-1">
                                   <div class="info info-horizontal">
                                        <div class="icon icon-rose">
                                             <i class="material-icons">timeline</i>
                                        </div>
                                        <div class="description">
                                             <h4 class="info-title">Marketing</h4>
                                             <p class="description">
                                                  We've created the marketing campaign of the website. It was a very interesting collaboration.
                                             </p>
                                        </div>
                                   </div>

                                   <div class="info info-horizontal">
                                        <div class="icon icon-primary">
                                             <i class="material-icons">code</i>
                                        </div>
                                        <div class="description">
                                             <h4 class="info-title">Fully Coded in HTML5</h4>
                                             <p class="description">
                                                  We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                                             </p>
                                        </div>
                                   </div>

                                   <div class="info info-horizontal">
                                        <div class="icon icon-info">
                                             <i class="material-icons">group</i>
                                        </div>
                                        <div class="description">
                                             <h4 class="info-title">Built Audience</h4>
                                             <p class="description">
                                                  There is also a Fully Customizable CMS Admin Dashboard for this product.
                                             </p>
                                        </div>
                                   </div>
                              </div>

                              <div class="col-md-5">
                                   <div class="social text-center">
                                        <button class="btn btn-just-icon btn-round btn-twitter">
                                             <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-dribbble">
                                             <i class="fa fa-dribbble"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                             <i class="fa fa-facebook"> </i>
                                        </button>
                                        <h4> or be classical </h4>
                                   </div>

                                   <form class="form" method="" action="">
                                        <div class="card-content">
                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="material-icons">face</i>
                                                  </span>
                                                  <input type="text" class="form-control" placeholder="First Name...">
                                             </div>

                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="material-icons">email</i>
                                                  </span>
                                                  <input type="text" class="form-control" placeholder="Email...">
                                             </div>

                                             <div class="input-group">
                                                  <span class="input-group-addon">
                                                       <i class="material-icons">lock_outline</i>
                                                  </span>
                                                  <input type="password" placeholder="Password..." class="form-control" />
                                             </div>

                                             <!-- If you want to add a checkbox to this form, uncomment this code -->

                                             <div class="checkbox">
                                                  <label>
                                                       <input type="checkbox" name="optionsCheckboxes" checked>
                                                       I agree to the <a href="#something">terms and conditions</a>.
                                                  </label>
                                             </div>
                                        </div>
                                        <div class="modal-footer text-center">
                                             <a href="#pablo" class="btn btn-primary btn-round">Get Started</a>
                                        </div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
   </div>
<!--  End Modal -->
    <div class="modal fade" id="AddcatModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-signup">
          <div class="modal-content">
               <div class="card card-signup card-plain">
                    <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>

                         <div class="header header-primary text-center">
                              <h4 class="card-title">Add Cats</h4>
                              
                         </div>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                              <p class="description text-center">Or Be Classical</p>
                              <div class="card-content">

                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">face</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="First Name...">
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>  
                                        <input type="text" class="form-control datepicker" id="datetimepicker" placeholder="สถานะ...">
                                     </div>
                                   </div>

                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="สถานะ...">
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="เพศ...">
                                   </div>
                                   
                                   <div class="input-group">
                                   
                                        <span class="input-group-addon ">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="สายพันธ์...">
                                   
                                        
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-group form-file-upload">
                                        <input type="file" id="inputFile2" multiple="">
                                             <div class="input-group">
                                             <input type="text" readonly="" class="form-control" placeholder="Single File">
                                             <span class="input-group-btn input-group-s">
                                                  <button type="button" class="btn btn-just-icon btn-round btn-primary">
                                                       <i class="material-icons">attach_file</i>
                                                  </button>
                                             </span>
                                             </div>
                                        </div>
                                   </div>
                            </form>
                                   <div class="input-group">
                                        <span class="input-group-addon">
                                             <i class="material-icons">email</i>
                                        </span>
                                        <input type="text" class="form-control" placeholder="นิสัย...">
                                   </div>
                              </div>
                        
                    </div>
                    <div class="modal-footer text-center">
                         <a href="#pablo" class="btn btn-primary btn-simple btn-wd btn-lg">Get Started</a>
         
                    </div></div>
                    </div>
                    </div>
                    </div>

</template>
<script>
export default {
  name: 'Modal',
  components: {
  }
}
</script>