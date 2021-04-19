<template>
  <div class="">
    <div class="w-full bg-white">
        <div class="flex TopBar flex-row mx-auto pl-4 pr-4">
            <img class="mx-auto logo" src="/img/Logo_XFG_FRANCHISE.png" alt="">
        </div>
    </div>
    <div class="w-full min-h-full h-auto">
      <router-view />
    </div>
  </div>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';
export default{
  data() {
    return {
      show: true,
    }
  },
  computed: {
      user(){
          if(localStorage.getItem("authToken")){
              return true;
          }
          else{
              return false;
          }
      }
  },
  watch: {
      user(){
          if(localStorage.getItem("authToken")){
              return true;
          }
          else{
              return false;
          }
      }
  },
  mounted(){
    if(!localStorage.getItem("authToken")){
        this.$router.push({name: 'login'});
        this.show = false;
    }
    else{
        this.$router.push({name: 'main'});
    }
  }
} 
</script>

<style>

</style>
