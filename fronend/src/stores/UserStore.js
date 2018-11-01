import Vue from 'vue'
import Vuex from 'vuex'
import axios from '@/axios'
Vue.use(Vuex)

const userstore  = new Vuex.Store({
    state: {
        // posts : [],
        
        access_token : [],
        lineloginline: [],
        fromsearch:[],
        addCat:[],
        update:[]

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
        addCats(state, data) {
            state.addCat = data
        },
        UpdateProfile(state, data) {
            state.update = data
        }
        
    },
    actions: {
        async loadShowcat(context){
            let data = await axios.get("http://localhost/Project/api/showcat.php").then((r) => {
                return r.data
            })
            context.commit("setShowcat",data)
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
            let data = await axios.post("http://localhost/Project/api/line/getUser",options,{headers : {'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'}}).then((r) => {
                return r.data
            })
            context.commit("getUser", data)
        },
        async getFromsearch(context, options) {
            let data = await axios.post("http://localhost/Project/api/from/showfrom",options,{headers : {'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'}}).then((r) => {
                return r.data
            })
            context.commit("getFromsearch", data)
        },
        async getFromsearch(context, options) {
            let data = await axios.post("http://localhost/Project/api/from/showfrom",options,{headers : {'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'}}).then((r) => {
                return r.data
            })
            context.commit("getFromsearch", data)
        },
        async addCat(context, options) {
            let data = await axios.post("http://localhost/Project/api/cat/addCat",options,{headers : {'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'}}).then((r) => {
                return r.data
            })
            context.commit("addCat", data)
        },
        async UpdateProfile(context, options) {
            let data = await axios.post("http://localhost/Project/api/user/update",options,{headers : {'Content-Type' : 'application/x-www-form-urlencoded; charset=UTF-8'}}).then((r) => {
                return r.data
            })
            context.commit("UpdateProfile", data)
        },
        
        
        
    }
})

export default userstore