<template>
    <div id="restaurant">
        <SideBar></SideBar>
        <div class="main">
            <Orders></Orders>
            <Rooms></Rooms>
        </div>
    </div>
</template>

<script>

import Orders from '@/view/restaurant/Orders.vue'
import Rooms from '@/view/restaurant/Rooms.vue'
import SideBar from '@/view/SideBar.vue'

export default {
    name:'Restaurant',
    components:{
        Orders,
        Rooms,
        SideBar
    },
    data() {
        return {
                
            }
    },
    methods: {
        
    },
    mounted () {
        
    }
}
</script>

<style scoped>

</style>