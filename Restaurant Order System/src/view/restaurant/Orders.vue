<template>
    <div class="first_wrap tabscon">
        <div class="custom-box">
            <div class="b-icon tabshead">
                <a style="width: 25%" href="javascript:;" class="b-iconbox ttab active" data-target="#orders-reserved">
                    <i class="flaticon-reserved">
                    <span>6</span>
                    </i>
                </a>
                <a style="width: 25%" href="javascript:;" class="b-iconbox ttab" data-target="#orders-takeway">
                    <i class="flaticon-take-away">
                    <span>6</span>
                    </i>
                </a>
                <a style="width: 25%" href="javascript:;" class="b-iconbox ttab" data-target="#orders-hotel">
                    <i class="flaticon-hotel">
                    <span>6</span>
                    </i>
                </a>
                <a style="width: 25%" href="javascript:;" class="b-iconbox ttab" data-target="#orders-notifications">
                    <i class="flaticon-ring">
                    <span>6</span>
                    </i>
                </a>
            </div>
            <div class="orders-filtered tabs in" id="orders-reserved">
                <OrderFilter></OrderFilter>
            </div>
            <div class="orders-filtered tabs" id="orders-hotel">
                <div class="ofb grass-bg" data-simplebar data-simplebar-auto-hide="true">
                    <div class="order-container">
                        <OrderTable v-for="index in 10" :key="index"/>
                    </div>
                </div>
            </div>

            <div class="orders-filtered tabs" id="orders-takeway">
                <OrderTake></OrderTake>
            </div>

            <div class="orders-filtered tabs" id="orders-notifications">
                <div class="ofb grass-bg" data-simplebar data-simplebar-auto-hide="true">
                    <OrderCard></OrderCard>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import OrderCard from './order/OrderCard.vue'
    import OrderTable from './order/OrderTable.vue'
    import OrderFilter from './order/OrderFilter.vue'
    import OrderTake from './order/OrderTake.vue'

	export default {
        name:'orders',
        components:{
            OrderCard,
            OrderTable,
            OrderFilter,
            OrderTake
        }
	}
</script>