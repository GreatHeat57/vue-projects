<template>
  <div>
    <div class="third tabscon">
      <div class="custom-box">
        <div class="head-icon" style="border: none;height: auto;">
          <div class="b-icon tabshead">
            <div class="b-iconbox ttab active" data-target=".third-sec4">
              <i class="fas fa-medal fa-sm" style="margin-bottom: 3px;"></i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec2">
              <i class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view"></i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec3">
              <i class="flaticon-park"></i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec1">
              <i class="flaticon-menu"></i>
            </div>
          </div>
        </div>
        <div class="third-sec-container grass-bg" data-simplebar="init" data-simplebar-auto-hide="true" style="background-color:white;height:950px;">
          <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
              <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
              <div class="simplebar-offset" style="right: -15px; bottom: 0px;">
                <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;">
                  <div class="simplebar-content" style="padding: 0px;">
                    <div class="third-sec1 third-sec tabs in">
                      <div class="order-container">
                        <a href="#" class="thirdbtnAdd" onclick="document.getElementById('complate-order').style.display = 'block';document.getElementById('final-cart').style.display = 'block';document.getElementById('add-cart').style.display = 'none'">
                          <order-box-item :thirdbox="thirdbox" v-for="(thirdbox, index) in thirdboxs" :key='index'></order-box-item>
                        </a>
                      </div>
                    </div>
                    <div class="third-sec2 third-sec tabs">
                      <div class="order-container">
                        <a href="#" class="thirdbtnAdd" onclick="document.getElementById('complate-order').style.display = 'block';document.getElementById('final-cart').style.display = 'block';document.getElementById('add-cart').style.display = 'none'">
                          <order-box-item :thirdbox="thirdbox" v-for="(thirdbox, index) in thirdboxs" :key='index'></order-box-item>
                        </a>
                      </div>
                    </div>
                    <div class="third-sec3 third-sec tabs">
                      <div class="order-container">
                        <a href="#" class="thirdbtnAdd" onclick="document.getElementById('complate-order').style.display = 'block';document.getElementById('final-cart').style.display = 'block';document.getElementById('add-cart').style.display = 'none'">
                          <order-box-item :thirdbox="thirdbox" v-for="(thirdbox, index) in thirdboxs" :key='index'></order-box-item>
                        </a>
                      </div>
                    </div>
                    <div class="third-sec4 third-sec tabs">
                      <div class="order-container">
                        <a href="#" class="thirdbtnAdd" onclick="document.getElementById('complate-order').style.display = 'block';document.getElementById('final-cart').style.display = 'block';document.getElementById('add-cart').style.display = 'none'">
                          <order-box-item :thirdbox="thirdbox" v-for="(thirdbox, index) in thirdboxs" :key='index'></order-box-item>
                        </a>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 670px;"></div>
          </div>
          <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
          </div>
          <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar" style="height: 521px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>

  import orderBoxItem from './orderBoxItem.vue'
  import {mapGetters} from 'vuex'

  export default {
      components:{
          orderBoxItem
      },
      data: function () {
          return {
            
          }
      },
      mounted() {
          this.$store.dispatch('fetchThirdbox')
      },
      computed: {
        ...mapGetters([
          'thirdboxs'
        ])
      }
}
</script>