<template>
  <div id="home_wrap">
    <div class="forgetpasspopup">
      <div class="loginsec">
        <div class="loginsec-left">
          <div class="logosec">
            <div class="logo">
              <img src="../../assets/images/logo.png">
            </div>
          </div>
          <div class="form">
            <div class="first">
              <input type="text" name="" placeholder="Email">
            </div>
            <div class="first">
              <input type="Password" placeholder="Password" style="width: 90%;" class="passshow" id="myInput"><i class="fas fa-eye"></i>
            </div>
            <div class="remmesec">
              <div class="check">
                <input type="checkbox" name=""><span style="vertical-align: top;">Remember me</span>
              </div>
              <router-link :to="{ name:'fogot' }" class="fprgetright">Forgot Password?</router-link>
            </div>
            <div class="loginbutton">Login</div>
          </div>
        </div>
      </div>
    </div>
    <Footer></Footer>
    <LangSection></LangSection>
  </div>
</template>

<script>
  import Footer from '../home/Footer.vue'
  import LangSection from '../home/LangSection.vue'

  export default {
    name: 'forgot',
    components: {
      Footer,
      LangSection
    },
    methods: {
      
    },
    mounted () {
      
    },
  }
</script>

<style>
    #home_wrap{
        background-image: url("../../assets/images/background.png");
        background-size: cover;
        height: 100%;
    }
</style>