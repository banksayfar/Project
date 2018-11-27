import Vue from 'vue'
import VueRouter from 'vue-router'
import Header from '@/layout/Header'
import Footer from '@/layout/Footer'

import showcat from '@/pages/showcat'
import addcat from '@/pages/addcat'
import Home from '@/pages/Home'
import Profile from '@/pages/user/Profile' 
import Product from '@/pages/Product'
import callback from '@/pages/callback'

Vue.use(VueRouter)

const routes = [
    // { 
    //     path: '/',
    //     name: 'Hello',
    //     component: HelloWorld
    // }

    { 
        path: '/',
        name: 'Home',
        components: {
            header: Header,
            default: Home,
            footer: Footer
        }
    },
    { 
        path: '/Profile',
        name: 'Profile',
        components: {
         
            header: Header,
            default: Profile,
            footer: Footer
        },
      
    },
    { 
        path: '/product/:id',
        name: 'product',
        components: {
            header: Header,
            default: Product,
            footer: Footer
        }
    },
    { 
        path: '/showcat',
        name: 'showcat',
        components: {
            header: Header,
            default: showcat,
            footer: Footer
        }
    },
    { 
        path: '/addcat',
        name: 'addcat',
        components: {
            header: Header,
            default: addcat,
            footer: Footer
        }
    },
    { 
        path: '/callback',
        name: 'callback',
        components: {
            default: callback,
        }
    },
    { 
        path: '/logout',
        name: 'logout',
        beforeEnter: (to, from, next) => {
            localStorage.clear()
            next('/')
        }
    },
    

    

]

// 3. Create the router instance and pass the `routes` option
// You can pass in additional options here, but let's
// keep it simple for now.
const router = new VueRouter({
    mode: 'history',
    routes // short for `routes: routes`
})

export default router