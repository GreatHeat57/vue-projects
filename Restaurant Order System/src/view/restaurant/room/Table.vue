<template>
    <div class="din-table">
        <span class="t-number">T-10</span>
            <!-- <img :src=src alt="dinner table"> -->
            <img src="../../../assets/images/tables/table-1.png" />
        <span class="t-space">4/6</span>
    </div>
</template>

<script>
export default {
    name:'Table',
    data() {
        return {
            table_number:null,
            table_space:null,
            src: "../../../assets/images/tables/table-" + Math.floor((Math.random() * 3) + 1) + ".png"
        }
    },
    mounted () {
        
    }
}
</script>