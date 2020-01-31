<template>
    <div class="inner-tabscon">
        <div class="s-icon inner-tabshead">
            <div class="s-iconbox inner-ttab active" style="width:50%;" data-target=".orders-filtered-by-all">
                <i class="flaticon-download"></i>
            </div>
            <div class="s-iconbox inner-ttab" style="width:50%;" data-target=".orders-filtered-by-success">
                <i class="flaticon-approve-circular-button"></i>
            </div>
        </div>
        <div class="all-orders grass-bg">
            <div class="inner-tabs ofb in orders-filtered-by-all" data-simplebar data-simplebar-auto-hide="true">
                <OrderCard></OrderCard>
            </div>
            <div class="inner-tabs ofb orders-filtered-by-success" data-simplebar data-simplebar-auto-hide="true">
                <OrderCard></OrderCard>
            </div>
        </div>
    </div>
</template>

<script>
    import OrderCard from './OrderCard.vue'

	export default {
        name:'orders',
        components:{
            OrderCard
        }
	}
</script>