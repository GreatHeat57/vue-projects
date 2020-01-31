<template>
    <div>
        <div class="modal fade" id="newOrderModal1" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content container">
                <div class="row">
                    <div class="col-md-7" style="padding: 0">
                        <div class="card newOd">
                            <div class="card-header" style="padding-bottom:9px;">
                                <h3 class="title text-center">
                                    New Order
                                </h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col text-left">
                                        <div class="dropdown bootstrap-select btn">
                                        <select name="gender" class="btn selectpicker" id="" tabindex="-98">
                                            <option selected="" value="">Select Gender</option>
                                            <option value="m">Male</option>
                                            <option value="f">female</option>
                                        </select>
                                        <div class="dropdown-menu " role="combobox">
                                            <div class="inner show" role="listbox" aria-expanded="false" tabindex="-1">
                                                <ul class="dropdown-menu inner show"></ul>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                                <hr>
                                <form action="#" style="font-size:14px;">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="odName">Name:</label>
                                            <input type="text" class="form-control odName" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odLastName">Last Name:</label>
                                            <input type="text" class="form-control odLastName" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odAddress">Address:</label>
                                            <input type="text" class="form-control odAddress" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odHno">House Number:</label>
                                            <input type="text" class="form-control odHno" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odCity">City:</label>
                                            <input type="text" class="form-control odCity" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odZip">Zip Code:</label>
                                            <input type="text" class="form-control odZip" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odMobile">Mobile:</label>
                                            <input type="text" class="form-control odMobile" placeholder="Restaurant Name">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="odEmail">Email:</label>
                                            <input type="text" class="form-control odEmail" placeholder="Restaurant Name">
                                        </div>
                                    </div>
                                </form>
                                <div class="d-flex" id="bottomNav">
                                    <a href="#" class="btn" data-toggle="modal" data-target="#orderDuration">
                                        <img src="../../../assets/images/pos-icons/svg/076-transport.svg" style="width:30px" alt="delivery">
                                    </a>
                                    <a href="#" class="btn" data-toggle="modal" data-target="#orderDuration">
                                        <img src="../../../assets/images/pos-icons/svg/075-bag.svg" style="width:30px" alt="delivery">
                                    </a>
                                    <a href="#" class="btn">
                                        <img src="../../../assets/images/pos-icons/svg/057-trash.svg" style="width:30px" alt="delivery">
                                    </a> 
                                    <a href="#" class="btn" style="background: white;">
                                        <img src="../../../assets/images/pos-icons/svg/083-add-to-cart-1.svg" style="width:30px" alt="delivery">
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="padding: 0">
                        <div class="card newOd">
                            <div class="card-header">
                                <input type="text" placeholder="Search Client" class="form-control">
                            </div>
                            <div class="card-body" id="card-body-r" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: -20px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 20px;">
                                                    <div v-for="(order, index) in orders" :key='index'>
                                                        <Modalorder :order="order"></Modalorder>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none; height: 239px;"></div></div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    import Modalorder from './modalorder.vue'
    import {mapGetters} from 'vuex'

    export default {
        name:'newOrderModal1',
        components:{
            Modalorder
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