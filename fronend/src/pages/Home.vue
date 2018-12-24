<template>
  <div>
    <div
      class="page-header"
      data-parallax="true"
      style="background-image: url('assets/img/background/1.jpg');wid"
    >
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div align="center">
        <h1 style="color:white;">สวัสดีครับ ยินดีต้อนรับสู่เว็บหาคู่แมว</h1>
      </div>
    </div>

    <div class="main main-raised">
      <div class="section">
        <div class="container">
          
          <div v-if="isLogin" align="right">
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
                    <button
                      class="btn btn-default btn-fab btn-fab-mini btn-simple pull-right"
                      type="reset"
                      rel="tooltip"
                      title="Reset Filter"
                      @click="reset();"
                    >
                   
                      <i class="material-icons">cached</i>
                    </button>
                  </h4>
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#accordion"
                        aria-expanded="false"
                        aria-controls="collapseOne"
                      >
                        <h4 class="panel-title">เพศ</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>

                    <div
                      id="accordion"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input
                              type="checkbox"
                              v-model="search.cat_sex"
                              value="all"
                              data-toggle="checkbox"
                              checked
                            >
                            All
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="เพศผู้" v-model="search.cat_sex">
                            เพศผู้
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"  value="เพศเมีย" v-model="search.cat_sex" data-toggle="checkbox">
                            เพศเมีย
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingTwo">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                      >
                        <h4 class="panel-title">สายพันธ์</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapseTwo"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingTwo"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_breed" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox" v-for="catbreeds in catbreed" :key="catbreeds.id">
                          <label>
                            <input type="checkbox" v-model="search.cat_breed" :value="catbreeds.catbreed_id" data-toggle="checkbox">
                            {{catbreeds.breed_name}}
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapseThree"
                        aria-expanded="false"
                        aria-controls="collapseThree"
                      >
                        <h4 class="panel-title">อายุ</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapseThree"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingThree"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"  data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapsecolor"
                        aria-expanded="false"
                        aria-controls="collapsecolor"
                      >
                        <h4 class="panel-title">สถานะ</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapsecolor"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_status" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ว่าง" v-model="search.cat_status" data-toggle="checkbox">
                            ว่าง
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ไม่ว่าง" v-model="search.cat_status" data-toggle="checkbox">
                            ไม่ว่าง
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="กำลังจับคู่" v-model="search.cat_status" data-toggle="checkbox">
                            กำลังจับคู่
                          </label>
                        </div>
                      </div>
                      <div></div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapsecolorvaccine"
                        aria-expanded="false"
                        aria-controls="collapsecolor"
                      >
                        <h4 class="panel-title">การฉีดวัคซีน</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapsecolorvaccine"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_vaccine" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ฉีด" v-model="search.cat_vaccine" data-toggle="checkbox">
                            ฉีด
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ไม่ฉีด" v-model="search.cat_vaccine" data-toggle="checkbox">
                            ไม่ฉีด
                          </label>
                        </div>
                      </div>
                      <div></div>
                    </div>
                  </div>
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapsecolorregispet"
                        aria-expanded="false"
                        aria-controls="collapsecolor"
                      >
                        <h4 class="panel-title">ใบรับรองพันธุ์ประวัติ</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapsecolorregispet"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_regispet" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="มี" v-model="search.cat_regispet" data-toggle="checkbox">
                            มี
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ไม่" v-model="search.cat_regispet" data-toggle="checkbox">
                            ไม่มี
                          </label>
                        </div>
                      </div>
                      <div></div>
                    </div>
                  </div>   
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#collapsecolorexpenses"
                        aria-expanded="false"
                        aria-controls="collapsecolor"
                      >
                        <h4 class="panel-title">ข้อตกลงในการจับคู่</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="collapsecolorexpenses"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_expenses" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="ฟรี" v-model="search.cat_expenses" data-toggle="checkbox">
                            ฟรี
                          </label>
                        </div>

                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="จ่ายเงิน" v-model="search.cat_expenses" data-toggle="checkbox">
                           จ่ายเงิน
                          </label>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="แบ่งลูก" v-model="search.cat_expenses" data-toggle="checkbox">
                            แบ่งลูก
                          </label>
                        </div>
                      </div>
                      <div></div>
                    </div>
                  </div>   
                  <div class="panel panel-default panel-rose">
                    <div class="panel-heading" role="tab" id="headingFour">
                      <a
                        class="collapsed"
                        role="button"
                        data-toggle="collapse"
                        data-parent="#accordion"
                        href="#test"
                        aria-expanded="false"
                        aria-controls="collapseFour"
                      >
                        <h4 class="panel-title">จังหวัด</h4>
                        <i class="material-icons">keyboard_arrow_down</i>
                      </a>
                    </div>
                    <div
                      id="test"
                      class="panel-collapse collapse"
                      role="tabpanel"
                      aria-labelledby="headingOne"
                    >
                      <div class="panel-body">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="all" v-model="search.cat_provinces" data-toggle="checkbox" checked>
                            All
                          </label>
                        </div>
                        <div class="checkbox" v-for="province in provinces" :key="province.id">
                          <label>
                            <input type="checkbox" v-model="search.cat_provinces" :value="province.id" data-toggle="checkbox">
                            {{province.name_th}}
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div align="center">
                     <button type="submit" class="btn btn-info"  @click="addsearch(1);">search</button>
                     </div>
                </div>
              </div>
            </div>

            <div class="col-md-9">
              <div class="row">
                <div class="col-md-4" v-for="showcats in showcat" :key="showcats.id">
                  <div class="card card-product card-plain no-shadow" data-colored-shadow="false">
                    <router-link :to="'/product'+'/'+showcats.cat_id">
                      <div class="card-image">
                        <img :src="showcats.base64">
                      </div>
                    </router-link>
                    <div class="card-content">
                      <h4 class="card-title">{{showcats.cat_name}}</h4>
                      <p
                        class="description"
                        style="white-space: normal;width:100%;height: 60px;overflow: hidden;"
                      >{{showcats.cat_description}}</p>
                      <div class="footer">
                        <!-- <div class="price-container">
                                            <span class="price"> &euro; 800</span>
                        </div>-->
                        <i
                          v-if="showcats.cat_status=='ไม่ว่าง'"
                          class="material-icons btn pull-right"
                          style="color:red;"
                          data-placement="left"
                        >fiber_manual_record</i>
                        <i
                          v-if="showcats.cat_status=='ว่าง'"
                          class="material-icons btn-sm pull-right"
                          style="color:green;"
                          data-placement="left"
                        >fiber_manual_record</i>
                      </div>
                    </div>
                  </div>
                  <!-- end card -->
                </div>
              <div id="progress">
                <div class="col-md-5 col-md-offset-4">
                  <div class="pagination-area text-center">
                    <ul class="pagination pagination-primary">
                         <li><span @click="addsearch(page_now-1);">prev</span></li>
                      <li
                        v-for="page in page_all"
                        :key="page"
                        :class="page_now == page ? 'active':''"
                      >
                        <span @click="addsearch(page);">{{page}}</span>
                      </li>
                      <li>
                        <span  v-on:click="addsearch(page_next);">next</span></li>
                    </ul>
                  </div>
                </div>
                </div>
              </div>
            </div>
          </div>

          <br>
          <!-- <h2 class="section-title">News in Review</h2> -->

          <!-- <div class="row">
            <div class="col-md-4">
              <div
                class="card card-background"
                style="background-image: url(assets/img/examples/chris9.jpg)"
              >
                <div class="card-content">
                  <h6 class="category text-info">Productivy Apps</h6>
                  <a href="#pablo">
                    <h3 class="card-title">The best trends in fashion 2017</h3>
                  </a>
                  <a href="#pablo" class="btn btn-white btn-round">
                    <i class="material-icons">subject</i> Read
                  </a>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>
    <!-- section -->
    <!-- end-main-raised -->
    <!-- <div class="section section-blog">
      <div class="container">
        <h2 class="section-title">HOT CAT</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="card card-blog">
              <div class="card-image">
                <a href="#pablo">
                  <img src="assets/img/dg6.jpg" alt>
                </a>
                <div
                  class="colored-shadow"
                  style="background-image: url(&quot;assets/img/examples/color1.jpg&quot;); opacity: 1;"
                ></div>
                <div class="ripple-container"></div>
              </div>
              <div class="card-content">
                <h6 class="category text-rose">Trends</h6>
                <h4 class="card-title">
                  <a href="#pablo">Learn how to wear your scarf with a floral print shirt</a>
                </h4>
                <p
                  class="card-description"
                >Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- section -->
    <!-- notice modal -->
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
                      class="form-control datetimepicker"
                      v-model="form.cat_regispet"
                      data-style="select-with-transition"
                      title="แมวคุณมีใบเพ็ดหรือไม่ !!"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>แมวคุณมีใบเพ็ดหรือไม่ !!</option>
                      <option value="มี" @click="form.cat_regispet = 'เพศผู้'">มี</option>
                      <option value="ไม่มี" @click="form.cat_regispet = 'เพศเมีย'">ไม่มี</option>
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
                      class="form-control datetimepicker"
                      v-model="form.cat_vaccine"
                      data-style="select-with-transition"
                      title="แมวคุณฉีดวัคซีนหรือไม่ !!"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>แมวคุณฉีดวัคซีนหรือไม่ !!</option>
                      <option value="ฉีด" @click="form.cat_vaccine = 'ฉีด'">ฉีดวัคซีน</option>
                      <option value="ไม่ฉีด" @click="form.cat_vaccine = 'ไม่ฉีด'">ไม่ฉีดวัคซีน</option>
                    </select>
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
                    <select
                      class="form-control datetimepicker"
                      v-model="form.cat_expenses"
                      data-style="select-with-transition"
                      title="ข้อตกลงในการจับคู่ !!"
                      data-size="7"
                      tabindex="-98"
                    >
                      <option selected disabled>ข้อตกลงในการจับคู่ !!</option>
                      <option value="ฟรี" @click="form.cat_expenses = 'ฟรี'">ฟรี</option>
                      <option value="จ่ายเงิน" @click="form.cat_expenses = 'จ่ายเงิน'">จ่ายเงิน</option>
                      <option value="แบ่งลูก" @click="form.cat_expenses = 'แบ่งลูก'">แบ่งลูก</option>
                    </select>
                  </div>
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
      page_all: 0,
      page_now: 0,
      page_next:0,
      user: [],
      search :{
        cat_provinces: ["all"],
        cat_sex: ["all"],
        cat_breed:["all"],
        cat_status:["all"],
         cat_vaccine:["all"],
          cat_regispet:["all"],
           cat_expenses:["all"],
      },
      form: {
        cat_provinces: "กรุณาเลิอกจังหวัด",
        cat_name: null,
        cat_sex: "กรุณาเลิอกเพศ",
        cat_birthdate: null,
        cat_breed: "กรุณาเลิอกสายพันธ์",
        cat_vaccine :"แมวคุณฉีดวัคซีนหรือไม่ !!",
        cat_regispet:"แมวคุณมีใบเพ็ดหรือไม่ !!",
        cat_expenses:"ข้อตกลงในการจับคู่ !!",
        cat_img: [],
        cat_description: null,
        member_id: null
      },
      isLogin:false
    };
  },
  // props: {
  //     // Support Multiple File?
  //     multiple: {
  //       type: Boolean,
  //       default: false
  //     },
  //     // Pass the files info when it's done
  //     done: {
  //       type: Function,
  //       default: () => {}
  //     }
  //   },
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
    getFromsearch: async function() {
      if (!localStorage.access_token) router.push("/");
      let optionts = {
        access_token: localStorage.access_token
      };
      await UserStore.dispatch("getFromsearch", optionts);
      console.log(UserStore.state.fromsearch);
        this.provinces = UserStore.state.fromsearch.provinces;
        this.catbreed = UserStore.state.fromsearch.catbreed;
    },
    addCat: async function() {
      if (!localStorage.access_token) router.push("/");
      this.form.member_id = this.user.member_id;
      console.log(this.form);
      if(this.form.cat_provinces=='กรุณาเลิอกจังหวัด'||
      this.form.cat_sex== 'กรุณาเลิอกเพศ' ||
      this.form.cat_breed== 'กรุณาเลิอกสายพันธ์'
      
      ){
          alert('กรุณากรอกข้อมูลให้ครบถ้วน!!');
      }
      let optionts = {
        access_token:localStorage.access_token,
        form: this.form
      };
      await UserStore.dispatch("addCat", optionts);
      console.log(UserStore.state.addCat);
      if (UserStore.state.addCat.status == 200) {
        this.addsearch(1);
        this.form = {
          cat_provinces: "กรุณาเลิอกจังหวัด",
          cat_name: null,
          cat_sex: "กรุณาเลิอกเพศ",
          cat_birthdate: null,
          cat_breed: "กรุณาเลิอกสายพันธ์",
          cat_vaccine :"แมวคุณฉีดวัคซีนหรือไม่ !!",
          cat_regispet:"แมวคุณมีใบรับรองพันธุ์ประวัติหรือไม่ !!",
          cat_expenses:"ข้อตกลงในการจับคู่ !!",
          cat_img: null,
          cat_habit: null,
          cat_description: null,
          member_id: null
        };
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
        this.isLogin = true
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
    },
    addsearch: async function(id) {
      if(this.page_now<this.page_all){
        this.page_next = this.page_now+1
      }
      let optionts = {
        search: this.search,
        id: id
      };
      
      await UserStore.dispatch("search", optionts);
      this.page_all = UserStore.state.search.page_all;
      this.page_now = UserStore.state.search.page_now;
      this.showcat = UserStore.state.search.showcat;
     
    },
    
     reset: async function() {
     this.search ={
        cat_provinces: ["all"],
        cat_sex: ["all"],
        cat_breed:["all"],
        cat_status:["all"],
      }
    },
  },
  async mounted() {
    await this.getFromsearch();
    await this.getUser();
    await this.addsearch(1);
    
  }
};
</script>