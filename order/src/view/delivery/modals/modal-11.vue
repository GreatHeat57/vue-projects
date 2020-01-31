<template>
        <!---modal number 11 starts-->
    <div class="modal fade" id="modal-11" role="dialog" tabindex="-1">
        <div class="modal-dialog custom-dialog">
            <div class="popups odpopup modal-content" id="orderDeatils" role="dialog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 px-0 first_part">
                            <div class="card od-card">
                                <div class="card-header" style="padding:12px;">
                                   <select class="selectpicker form-control">
                                       <option selected value="">Select Year</option>
                                   </select>
                                   <select class="selectpicker form-control">
                                        <option selected value="">Select Date</option>
                                    </select>
                                    <select class="selectpicker form-control">
                                        <option selected value="">Select Date</option>
                                    </select>
                                </div>
                                <div class="card-body" >
                                    <div class="row" stlye="padding: 10px 0; background: #fff;">
                                        <div class="col text-left">
                                            <select name="" id="" class="selectpicker form-control">
                                                <option value="" selected>Sort By</option>
                                            </select>
                                        </div>
                                        <div class="col text-right">
                                            <input type="text" class="form-control" placeholder="Search Order ID">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="order-id-box" data-simplebar style="height:55vh">
                                        <div v-for="(order, index) in orders" :key='index' class="oidbox" style="display: grid; grid-template-columns: 1fr 1fr; background: #f7f7f7; padding: 12px; margin: 5px 0">
                                            <p class="mb-2" style="font-weight: bold; font-size:20px">{{order.id}}</p>
                                            <div class="text-right mb-3">
                                                <span style="padding: 0 10px;">
                                                    <i class="flaticon-delivery"></i>
                                                </span>
                                                <span style="padding: 0 10px;">
                                                    <i class="flaticon-approve-circular-button text-success"></i>
                                                </span>
                                                <span style="padding: 0 10px; font-weight:bold" class="text-success" >{{order.price}}</span>
                                            </div>
                                            <p class="mb-1" style=" border-top: 1px solid #d0d0d0; padding-top: 8px;">
                                                #23 - #34  - #45 - #120 - #167
                                            </p>
                                            <div class="dates text-right mb-1" style="border-top: 1px solid #d0d0d0; padding-top: 8px;">
                                                {{order.time}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-5" style="padding: 0">
                            <div class="card card-invoice">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <button class="btn btn-secondary">
                                            <h3 class="cart-title">
                                                Print
                                            </h3>
                                        </button>
                                        <button class="btn btn-primary" style="background: #70ad47;">
                                            <h3 class="cart-title">
                                                Email
                                            </h3>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body" data-simplebar>
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <img src="../../../assets/images/logo.png" alt="" style="width:30%;">
                                            <br>
                                            <label for="#">www.yamiyami.de</label>
                                        </div>
                                        <div class="col-12 text-left address">
                                            <h6>Restaurant Name</h6>
                                            <p>
                                                Hase Str. 8 <br>
                                                49088 Osnabrück<br>
                                                Tel.: 0541 123 456 789<br>
                                                Fax: 0541 123 456 780<br>
                                            </p>
                                        </div>
                                        <div class="col-12 details">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                                        Bestellungsart	
                                                    </td>
                                                    <td>
                                                        <span>:</span>Delivery
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Lieferungszeit	</td>
                                                    <td><span>:</span>Now / Pre Order T/D</td>
                                                </tr>
                                                <tr>
                                                    <td>Bestellungsdatum</td>
                                                    <td><span>:</span>12.10.2018 / 17:30</td>
                                                </tr>
                                                <tr>
                                                    <td>Zahlungsart</td>
                                                    <td><span>:</span>Online</td>
                                                </tr>
                                                <tr>
                                                    <td>Bestellungsnummer</td>
                                                    <td><span>:</span>BE - 12021254</td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="col-12 order">
                                            <div class="row">
                                                <div class="col-2 text-left">
                                                    <strong>123</strong>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <strong>Pizza Salami</strong>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <strong>28cm</strong>
                                                </div>
                                                <div class="col-2 text-right">
                                                    <strong>9,50&euro;</strong>
                                                </div>
                                            </div>
                                            <div class="row addons">
                                                <div class="col-6 text-left">
                                                    <span>-</span>
                                                    Onions
                                                </div>
                                                <div class="col-6 text-right">
                                                    0,00&euro;
                                                </div>
                                            </div>
                                            <div class="row addons">
                                                <div class="col-6 text-left">
                                                    <span>+</span>
                                                    Tomatos
                                                </div>
                                                <div class="col-6 text-right">
                                                    0,50&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 text-left">
                                                    <strong>125</strong>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <strong>Pizza Cheese</strong>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <strong>28cm</strong>
                                                </div>
                                                <div class="col-2 text-right">
                                                    <strong>10,00&euro;</strong>
                                                </div>
                                            </div>
                                            <div class="row addons">
                                                <div class="col-6 text-left">
                                                    <span>+</span>
                                                    Tomatos
                                                </div>
                                                <div class="col-6 text-right">
                                                    0,50&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-2 text-left">
                                                    <strong>125</strong>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <strong>CocaCola</strong>
                                                </div>
                                                <div class="col-2 text-center">
                                                    <strong>0,5l</strong>
                                                </div>
                                                <div class="col-2 text-right">
                                                    <strong>3,00&euro;</strong>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 summary">
                                            <div class="row bold">
                                                <div class="col-6 text-left">
                                                    Total
                                                </div>
                                                <div class="col-6 text-right">
                                                    20,00&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 text-left">
                                                    Discount
                                                </div>
                                                <div class="col-4 text-center">
                                                    -10%
                                                </div>
                                                <div class="col-4 text-right">
                                                    -2,00&euro;
                                                </div>
                                            </div>
                                            <div class="row bold">
                                                <div class="col-6 text-left">
                                                    Subtotal
                                                </div>
                                                <div class="col-6 text-right">
                                                    18,00&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Davon 7%
                                                </div>
                                                <div class="col-6 text-right">
                                                    0,20&euro;
                                                </div>
                                                <div class="col-6 text-left">
                                                    Davon 19%
                                                </div>
                                                <div class="col-6 text-right">
                                                    0,49&euro;
                                                </div>
                                            </div>
                                            <div class="row bold">
                                                <div class="col-6 text-left">
                                                    Subtotal
                                                </div>
                                                <div class="col-6 text-right">
                                                    18,00&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Delivery Cost
                                                </div>
                                                <div class="col-6 text-right">
                                                    + 1,00&euro;
                                                </div>
                                            </div>
                                            <div class="row bold">
                                                <div class="col-6 text-left">
                                                    To Pay
                                                </div>
                                                <div class="col-6 text-right">
                                                    19,00&euro;
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6 text-left">
                                                    Bar
                                                </div>
                                                <div class="col-6 text-right">
                                                    50,45&euro;
                                                </div>
                                            </div>
                                            <div class="row bold larger">
                                                <div class="col-6 text-left">
                                                    Zurück
                                                </div>
                                                <div class="col-6 text-right">
                                                    41,00&euro;
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 greeting text-center">
                                            <strong>Thank you for Your Order</strong>
                                            <br>
                                            <small>
                                                Steuer-Nr.: 123 / 456 / tzeA
                                            </small>
                                        </div>
                                    </div>
                                </div>
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
        components:{
            
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