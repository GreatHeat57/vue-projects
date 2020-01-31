<template>
  <div id="home_wrap">
    <div class="forgetpasspopup">
      <div class="sendmsgsec">
        <div class="send">
          <div class="loginsec-left">
            <div class="logosec">
              <div class="logo">
                <img src="../../assets/images/logo.png">
              </div>
            </div>
            <div class="form">
              <div class="first">
                <input type="text" name="" placeholder="Username or Email">
              </div>
              <div class="first">
                <input type="text" name="" placeholder="Phone Number">
              </div>
              <div class="loginbutton sendmessage">Send</div>
            </div>
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