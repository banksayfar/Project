import Vue from 'vue'
import Vuex from 'vuex'
import axios from '@/axios'
Vue.use(Vuex)

const userstore = new Vuex.Store({
    state: {
        // posts : [],

        access_token: [],
        lineloginline: [],
        fromsearch: [],
        addCat: [],
        update: [],
        showuser: [],
        viewcat :[],
        mycat :[],
        EditCat:[],
        show_editcat:[],
        search:[],
        delete:[]

    },
    mutations: {
        // setPosts(state,posts) {
        //     state.posts = posts
        // },

        getLoginLine(state, lineloginline) {
            state.lineloginline = lineloginline
        },
        getTokenLine(state, data) {
            state.access_token = data
        },
        getUser(state, data) {
            state.user = data
        },
        getFromsearch(state, data) {
            state.fromsearch = data
        },
        getEditCat(state, data) {
            state.EditCat = data
        },
        addCat(state, data) {
            state.addCat = data
        },
        UpdateProfile(state, data) {
            state.update = data
        },
        showUser(state, data) {
            state.showuser = data
        },
        viewcat(state, data) {
            state.viewcat = data
        },
        mycat(state, data) {
            state.mycat = data
        },
        show_editcat(state, data) {
            state.show_editcat = data
        },
        getsearch(state, data){
            state.search = data
        },
        getdelete(state, data){
            state.delete = data
        }

    },
    actions: {
        async loadShowcat(context) {
            let data = await axios.get("http://localhost/Project/api/showcat.php").then((r) => {
                return r.data
            })
            context.commit("setShowcat", data)
        },
        async getLoginLine(context) {
            let data = await axios.get("http://localhost/Project/api/line/getlinklogin").then((r) => {
                return r.data
            })
            context.commit("getLoginLine", data)
        },
        async getTokenLine(context, options) {
            let data = await axios.get("http://localhost/Project/api/line/callback?code=" + options.code + "&state=" + options.state).then((r) => {
                return r.data
            })
            context.commit("getTokenLine", data)
        },
        async getUser(context, options) {
            let data = await axios.post("http://localhost/Project/api/line/getUser", options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("getUser", data)
        },
        async getFromsearch(context, options) {
            let data = await axios.post("http://localhost/Project/api/from/showfrom", options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("getFromsearch", data)
        },
        async getEditCat(context, options) {
            let data = await axios.post("http://localhost/Project/api/cat/EditCat/"+options.cat_id, options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("EditCat", data)
        },
        async getdelete(context, options) {
            let data = await axios.post("http://localhost/Project/api/cat/delete/"+options.cat_id, options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("delete", data)
        },
        async addCat(context, options) {
            let data = await axios.post("http://localhost/Project/api/cat/addCat", options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("addCat", data)
        },
        async UpdateProfile(context, options) {
            let data = await axios.post("http://localhost/Project/api/user/update/"+options.id, options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("UpdateProfile", data)
        },
        async showUser(context) {
            let data = await axios.get("http://localhost/Project/api/user/showuser", { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("showUser", data)
        },
        async viewcat(context,options) {
            let data = await axios.post("http://localhost/Project/api/cat/viewcat/"+options.id,options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("viewcat", data)
        },
        async mycat(context,options) {
            let data = await axios.post("http://localhost/Project/api/cat/mycat",options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("mycat", data)
        },
        async show_editcat(context,options) {
            let data = await axios.post("http://localhost/Project/api/cat/show_editcat/"+options.cat_id,options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("show_editcat", data)
        },
        async search(context,options) {
            let data = await axios.post("http://localhost/Project/api/cat/search/"+options.id,options, { headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' } }).then((r) => {
                return r.data
            })
            context.commit("getsearch", data)
        },
    }
})

export default userstore