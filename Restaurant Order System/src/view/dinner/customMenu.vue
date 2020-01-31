<template>
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
		<div id="bar-slider" class="third-sec-container" data-simplebar data-simplebar-auto-hide="true" >
			<div class="menu-box">
				<div v-for="(secondbox, index) in secondboxs" :key='index' class="second-box">
					<div class="second-text">{{secondbox.name}}</div>
				</div>
			</div>
		</div>
    </div>
</template>

<script>
	import {mapGetters} from 'vuex'

	export default {
		name:'second',
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