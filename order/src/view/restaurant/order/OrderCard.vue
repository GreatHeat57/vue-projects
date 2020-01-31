<template>
    <div>
        <div class="orderbox shadow-danger" v-for="(order, index) in orders" :key='index'>
            <div class="row">
                <div class="col-4">
                    <div class="user"><img src="../../../assets/images/faces/avatar.jpg" /></div>
                </div>
                <div class="order-content col-8">
                    <div class="userid">
                        <p class="order-id">{{order.id}}</p>
                        <p class="eta">{{order.duration}}</p>
                    </div>
                    <div class="userprice">
                        <div>
                            <p class="price">{{order.price}}</p>
                        </div>
                        <div class="worklogo">
                            <i class="fa fa-lg fa-globe"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="underlined">
                <div>
                    <span>&nbsp;</span>
                    <span>{{order.time}}</span>
                </div> 
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

	export default {
        name:'orders',
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