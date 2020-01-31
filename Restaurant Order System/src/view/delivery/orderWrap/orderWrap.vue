<template>
    <div>
        <div class="first_wrap tabscon">
            <div class="custom-box">
                <div class="b-icon tabshead">
                    <a href="javascript:;" class="b-iconbox ttab active" data-target="#orders-delivery">
                        <i class="flaticon-delivery">
                            <span>6</span>
                        </i>
                    </a>
                    <a href="javascript:;" class="b-iconbox ttab" data-target="#orders-takeway">
                        <i class="flaticon-take-away">
                        <span>6</span>
                        </i>
                    </a>
                    <a href="javascript:;" class="b-iconbox ttab" data-target="#orders-notifications">
                        <i class="flaticon-ring">
                        <span>6</span>
                        </i>
                    </a>
                </div>
                <div class="orders-filtered tabs in" id="orders-delivery">
                    <div class="inner-tabscon">
                        <div class="s-icon inner-tabshead">
                            <div class="s-iconbox inner-ttab active" data-target=".orders-filtered-by-all">
                                <i class="flaticon-download"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-success">
                                <i class="flaticon-approve-circular-button"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-danger">
                                <i class="flaticon-deny"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-warning">
                                <i class="flaticon-logout"></i>
                            </div>
                        </div>
                        <div class="all-orders grass-bg">
                            <div class="inner-tabs ofb in orders-filtered-by-all"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderall :order="order"></orderall>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-success"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <ordersuccess :order="order"></ordersuccess>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-danger"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderdanger :order="order"></orderdanger>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-warning"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderwarning :order="order"></orderwarning>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="orders-filtered tabs in" id="orders-takeway">
                    <div class="inner-tabscon">
                        <div class="s-icon inner-tabshead">
                            <div class="s-iconbox inner-ttab active" data-target=".orders-filtered-by-all">
                                <i class="flaticon-download"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-success">
                                <i class="flaticon-approve-circular-button"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-danger">
                                <i class="flaticon-deny"></i>
                            </div>
                            <div class="s-iconbox inner-ttab" data-target=".orders-filtered-by-warning">
                                <i class="flaticon-logout"></i>
                            </div>
                        </div>
                        <div class="all-orders grass-bg">
                            <div class="inner-tabs ofb in orders-filtered-by-all"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderall :order="order"></orderall>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-success"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <ordersuccess :order="order"></ordersuccess>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-danger"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderdanger :order="order"></orderdanger>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                            <div class="inner-tabs ofb orders-filtered-by-warning"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                                <div class="simplebar-wrapper" style="background-color: white;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer">
                                        </div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <orderwarning :order="order"></orderwarning>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                                    </div>
                                </div>
                                <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                    <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="orders-filtered tabs in" id="orders-notifications">
                    <div class="inner-tabs ofb in orders-filtered-by-all"  style="background-color: white;" data-simplebar="init" data-simplebar-auto-hide="true">
                        <div class="simplebar-wrapper" style="background-color: white;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer">
                                </div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                        <div class="simplebar-content" style="padding: 20px;">
                                            <div v-for="(order, index) in orders" :key='index'>
                                                <orderall :order="order"></orderall>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: auto; height: 1816px;">
                            </div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                            </div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                            <div class="simplebar-scrollbar" style="height: 168px; transform: translate3d(0px, 0px, 0px); display: block;">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</template>
<script>
    import orderall from './orderall.vue'
    import ordersuccess from './ordersuccess.vue'
    import orderdanger from './orderdanger.vue'
    import orderwarning from './orderwarning.vue'
    import {mapGetters} from 'vuex'

    export default {
        components:{
            orderall,
            orderwarning,
            orderdanger,
            ordersuccess
        },
        data: function () {
            return {
                
            }
        },
        mounted() {
          this.$store.dispatch('fetchOrders')
		},
		computed: {
			...mapGetters([
				'orders'
			])
		}
    }
</script>