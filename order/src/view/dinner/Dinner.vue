<template>
    <div id="dinner">
        <SideBar></SideBar>
        <div class="main">
            <orders-wrap></orders-wrap>
            <custom-menu></custom-menu>
            <orders-box></orders-box>
            <cart-shop></cart-shop>
        </div>
    </div>
</template>

<script>
    import SideBar from '@/view/SideBar.vue'
    import ordersWrap from '@/view/dinner/ordersWrap.vue'
    import customMenu from '@/view/dinner/customMenu.vue'
    import ordersBox from '@/view/dinner/ordersBox.vue'
    import cartShop from '@/view/dinner/cartShop.vue'
    import JQuery from 'jquery'
    window.$ = window.JQuery = JQuery

    export default {
        name:'Dinner',
        components:{
            SideBar,
            ordersWrap,
            customMenu,
            ordersBox,
            cartShop
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
