<template>
    <div class="third tabscon">
      <div class="custom-box">
        <div class="head-icon" style="border: none;height: auto;">
          <div class="b-icon tabshead">
            <div class="b-iconbox ttab active" data-target=".third-sec">
              <i class="fas fa-medal fa-sm"></i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec2">
              <i class="flaticon-hot-coffee-rounded-cup-on-a-plate-from-side-view">
              </i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec3">
              <i class="flaticon-park"> </i>
            </div>
            <div class="b-iconbox ttab" data-target=".third-sec4">
              <i class="flaticon-menu" style="margin-bottom: 3px;"></i>
            </div>
          </div>
        </div>
        <div class="third-sec-container grass-bg" data-simplebar data-simplebar-auto-hide="true">
          <div class="third-sec tabs in">
            <div class="order-container">
                <div v-for="(thirdbox, index) in thirdboxs" :key='index' class="third-subbox">
                  <p class="thirdname">{{thirdbox.name}}</p>
                  <p class="thirdprice">{{thirdbox.price}}</p>
                  <span>{{thirdbox.sign}}</span>
              </div>
            </div>
          </div>

          <div class="third-sec2 tabs">
            <div class="order-container">
              <div v-for="(thirdbox, index) in thirdboxs" :key='index' class="third-subbox">
                  <p class="thirdname">{{thirdbox.name}}</p>
                  <p class="thirdprice">{{thirdbox.price}}</p>
                  <span>{{thirdbox.sign}}</span>
              </div>
            </div>
          </div>
          <div class="third-sec3 tabs">
            <div class="order-container">
                <div v-for="(thirdbox, index) in thirdboxs" :key='index' class="third-subbox">
                  <p class="thirdname">{{thirdbox.name}}</p>
                  <p class="thirdprice">{{thirdbox.price}}</p>
                  <span>{{thirdbox.sign}}</span>
              </div>
            </div>
          </div>
          <div class="third-sec4 tabs">
            <div class="order-container">
                <div v-for="(thirdbox, index) in thirdboxs" :key='index' class="third-subbox">
                  <p class="thirdname">{{thirdbox.name}}</p>
                  <p class="thirdprice">{{thirdbox.price}}</p>
                  <span>{{thirdbox.sign}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
  import {mapGetters} from 'vuex'

	export default {
		name:'third',
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
