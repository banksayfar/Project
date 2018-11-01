
<template>
    <div>กรุณารอสักครู่...</div>
</template>


<script>
import UserStore from '@/stores/UserStore'
import router from '@/router'
export default {
  name: 'callback',
  components: {
  },
  data(){
      return {
        
      }
  },
  methods: {
    getTokenLine: async function() {
      if(
        (this.$route.query.code == undefined || this.$route.query.code == "")
        &&
        (this.$route.query.state == undefined || this.$route.query.state == "")
      ){
        return false;
      }
      let optionts = {
        code : this.$route.query.code,
        state : this.$route.query.state
      }
      
      await UserStore.dispatch('getTokenLine',optionts)
      console.log(UserStore.state.access_token);
      if(UserStore.state.access_token.status == 200){
          localStorage.access_token = UserStore.state.access_token.access_token;
      }else{
        router.push('/')
      }
    },
    
  },
  async mounted () {
    await this.getTokenLine()
    if(localStorage.access_token) router.push('/')
    else router.push('/')
    await this.getUser()
  },
}
</script>
