<template>
    <div id="home_wrap">
        <div class="home-main home-bg">
            <div class="box1">
                <div class="imgsec">
                    <img src="../../assets/images/grass.jpg">
                </div>
                <div class="namesec">
                    <router-link :to="{ name:'delivery' }" tag="button" class="d-button" style="padding: 15px 75px;">Delivery</router-link>
                </div>
                <div class="signsec">
                    <router-link :to="{ name:'login' }" class="signin">Sign In</router-link>
                </div>
                <div class="img_box1">
                    <img src="../../assets/images/delivery.png">
                </div>
            </div>
            <div class="box2">
                <div class="imgsec">
                    <img src="../../assets/images/grass.jpg">
                </div>
                <div class="namesec">
                    <router-link :to="{ name:'restaurants' }" tag="button" class="d-button" style="padding: 15px 50px;">Reservation</router-link>
                </div>
                <div class="signsec">
                    <router-link :to="{ name:'login' }" class="signin">Sign In</router-link>
                </div>
                <div class="img_box2">
                    <img src="../../assets/images/reservation.png">
                </div>
            </div>
            <div class="box3">
                <div class="imgsec">
                    <img src="../../assets/images/grass.jpg">
                </div>
                <div class="namesec">
                    <router-link :to="{ name:'dinners' }" tag="button" class="d-button" style="padding: 15px 81px;">Dinner</router-link>
                </div>
                <div class="signsec">
                    <router-link :to="{ name:'login' }" class="signin">Sign In</router-link>
                </div>
                <div class="img_box3">
                    <img src="../../assets/images/dinner.png">
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
        name:'Home',
        components:{
            Footer,
            LangSection
        },
        data() {
            return {
                
            }
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