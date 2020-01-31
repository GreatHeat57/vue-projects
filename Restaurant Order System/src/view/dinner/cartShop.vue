<template>
    <div class="fourth">
        <div class="custom-box">
            <div style="height: 100vh; padding-bottom:50vh" data-simplebar>
                <div class="abcmenu-list"  id="cartShop">
                    <div v-for="(fourthbox, index) in fourthboxs" :key='index' class="card abcmenucard">
                        <div class="container menucontainer">
                            <div class="row abcitem-bar">
                                <div class="col-md-6 abcitem">
                                    <h5 class="title">
                                        {{fourthbox.title}}
                                    </h5>
                                </div>
                                <div class="col-md-2 abcitem">
                                    <h5 class="title">
                                        {{fourthbox.num}}
                                    </h5>
                                </div>
                                <div class="col-md-4 abcitem">
                                    <h5 class="title">
                                        {{fourthbox.price}}
                                    </h5>
                                </div>
                            </div>
                            <div v-for="(fourthbox_sub, index) in fourthbox.sub" :key='index' class="row abcaddon-bar">
                                <div class="col-md-6 abcaddon">
                                    <h6 class="title">
                                        <label>-</label>
                                        {{fourthbox_sub.title}}
                                    </h6>
                                </div>
                                <div class="col-md-4 abcaddon">
                                    <h6 class="title">
                                        {{fourthbox_sub.price}}
                                    </h6>
                                </div>
                                <div class="col-md-2 abcaddon">
                                    <button class="btn btn-danger">
                                            <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="row abcbutton-bar">
                                <div class="col-md-3 abcbutton">
                                    <button class="btn btn-success">
                                        <i class="fas fa-plus-circle"></i>
                                    </button>
                                </div>  
                                <div class="col-md-3 abcbutton">
                                    <button class="btn btn-warning">
                                        <i class="fas fa-minus-circle text-white"></i>
                                    </button>
                                </div>
                                <div class="col-md-6 abcbutton">
                                    <button class="btn btn-danger">
                                        <i class="fas fa-times-circle "></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="complate-order">
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
                                        29,80 &euro;
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
                                <p>-2,98&euro;</p>
                            </div>
                        </div>
                        <div class="row footer-row">
                            <div class="col-12">
                                <button class="btn btn-success">
                                    Pay Now  28,32&euro;
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
    import {mapGetters} from 'vuex'

	export default {
		name:'fourth',
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