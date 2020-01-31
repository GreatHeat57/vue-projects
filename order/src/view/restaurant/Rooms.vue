<template>
     <div class="second_wrap tabscon">
        <div class="custom-box">
            <div class="b-icon b-icon-ext tabshead">
                <a href="javascript:;" class="ttab active" data-target="#all">
                    All
                </a>
                <a href="javascript:;" class="ttab" data-target="#room1">
                    Room1
                </a>
                <a href="javascript:;" class="ttab" data-target="#room2">
                    Room2
                </a>
                <a href="javascript:;" class="ttab" data-target="#room3">
                    Room3
                </a>
                <a href="javascript:;" style="background: #28a745; color: #fff !important; height:46px !important;" class="ttab" data-target="#kitchen">
                    Kitchen
                </a>
            </div>

            <div class="tablesec" data-simplebar data-simplebar-auto-hide="true">
                <div class="tabs in" id="all">
                    <div class="items-container">
                        <Table v-for="index in 20" :key="index"/>
                    </div>
                </div>
                <div class="tabs" id="room1">
                    <div class="items-container">
                        <Table v-for="index in 20" :key="index"/>
                    </div>
                </div>
                <div class="tabs" id="room2">
                    <div class="items-container">
                        <Table v-for="index in 20" :key="index"/>
                    </div>
                </div>
                <div class="tabs" id="room3">
                    <div class="items-container">
                        <Table v-for="index in 20" :key="index"/>
                    </div>
                </div>
                <div class="tabs" id="kitchen">
                    <div class="items-container">
                        <Tablekitchen v-for="index in 20" :key="index"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
import Table from './room/Table.vue'
import Tablekitchen from './room/Tablekitchen.vue'

export default {
    name:'orders',
    components:{
        Table,
        Tablekitchen
    },
    data() {
        return {
            
        }
    },
}
</script>