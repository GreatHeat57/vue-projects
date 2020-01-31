<template>
    <div class="fourth_container">
        <div class="custom-box">
            <div class="add-cart" id="add-cart">
                <div class="shopping-cart">
                    <div id="badge">
                        0
                    </div>
                    <i class="fa fa-shopping-cart shopping-cart-icon" aria-hidden="true"></i>
                </div>
            </div>
            <div class="final-cart" id="final-cart">
                <div style="position: absolute;height: 950px;right: 0.4%;width: 23.4%;" data-simplebar="init">
                    <div class="simplebar-wrapper" style="margin: 0px 0px -318.5px;">
                        <div class="simplebar-height-auto-observer-wrapper">
                            <div class="simplebar-height-auto-observer">
                            </div>
                        </div>
                        <div class="simplebar-mask">
                            <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                    <div class="simplebar-content" style="padding: 0px 0px 318.5px;">
                                        <div class="abcmenu-list" id="cartShop">
                                            <div v-for="(fourthbox, index) in fourthboxs" :key='index'>
                                                <cart-shop-item :fourthbox="fourthbox"></cart-shop-item>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                    </div>
                </div>
                <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                    </div>
                </div>
                <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                    <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                    </div>
                </div>
            </div>
        <div class="complate-order" id="complate-order">
            <div class="abctotal-box">
                <div class="abccheck-card">
                    <div class="row">
                        <div class="col-6 text-left">
                            <p>
                                <strong>
                                    Total Price
                                </strong>
                            </p>
                        </div>
                        <div class="col-6 text-right">
                            <p>
                                <strong>
                                    29,80 €
                                </strong>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5 text-left">
                            <p><label>-</label> Discount</p>
                        </div>
                        <div class="col-2 text-center">
                            <p>-10%</p>
                        </div>
                        <div class="col-5 text-right">
                            <p>-2,98€</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-left">
                            <p><label>+</label> Delivery</p>
                        </div>
                        <div class="col-6 text-right">
                            <p>-2,98€</p>
                        </div>
                    </div>
                    <div class="row footer-row" style="padding: 0">
                        <div class="col-12">
                            <button class="btn btn-success" data-toggle="modal" data-target="#paymentModal" style="font-size: 1.5em;font-weight: bold;border-radius: 0;">
                                Pay Now  28,32€
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
    import cartShopItem from '@/view/delivery/cartShop/cartShopItem.vue'
    import {mapGetters} from 'vuex'

    export default {
        name:'CustomBox',
        components:{
            cartShopItem
        },
        data: function () {
            return {
                
            }
        },
        mounted() {
          this.$store.dispatch('fetchFourthbox')
		},
		computed: {
			...mapGetters([
				'fourthboxs'
			])
		}
    }
</script>