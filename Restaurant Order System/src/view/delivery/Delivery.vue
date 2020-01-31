<template>
    <div id="delivery">
        <SideBar></SideBar>
        <div class="main">
            <order-wrap></order-wrap>
            <custom-menu></custom-menu>
            <order-box></order-box>
            <cart-shop></cart-shop>
            <!-- <Modals></Modals> -->
        </div>
    </div>
</template>

<script>
    import orderWrap from '@/view/delivery/orderWrap/orderWrap.vue'
    import customMenu from '@/view/delivery/customMenu/customMenu.vue'
    import orderBox from '@/view/delivery/orderBox/orderBox.vue'
    import cartShop from '@/view/delivery/cartShop/cartShop.vue'
    // import Modals from '@/view/delivery/Modals.vue'
    import SideBar from '@/view/SideBar.vue'

    export default {
        name:'orders',
        components:{
            orderWrap,
            customMenu,
            orderBox,
            cartShop,
            // Modals,
            SideBar
        },

        created() {
            
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
