<template>
    <div>
        <div class="second tabscon">
            <div class="custom-menu sticky">
                <div class="head-icon" style="border: none;height: auto;">
                    <div class="b-icon tabshead">
                        <div class="b-iconbox ttab" data-target=".third-sec4">
                            <i class="fa fa-search fa-sm" style="margin-bottom: 3px;"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div id="bar-slider" class="third-sec-container" data-simplebar="init" data-simplebar-auto-hide="true" style="height: 950px;">
                <div class="simplebar-wrapper" style="margin: 0px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 0px;">
                                    <div class="menu-box">
                                        <div v-for="(secondbox, index) in secondboxs" :key='index'>
                                            <custom-menu-box :secondbox="secondbox"></custom-menu-box>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="simplebar-placeholder" style="width: auto; height: 1575px;"></div>
            </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar simplebar-visible" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar simplebar-visible" style="height: 221px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
    import customMenuBox from './customMenuBox.vue'
    import {mapGetters} from 'vuex'

    export default {
        components:{
            customMenuBox
        },
        data: function () {
            return {
                
            }
        },
        mounted() {
          this.$store.dispatch('fetchSecondbox')
		},
		computed: {
			...mapGetters([
				'secondboxs'
			])
		}
    }
</script>