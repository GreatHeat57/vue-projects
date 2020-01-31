<template>
    <div>
        <div class="modal fade" id="settings-main-modal" tabindex="-1" role="dialog" aria-labelledby="Settings popup" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div id="settings-modal-v-tab" class="v-pills-tab" data-simplebar="init" data-simplebar-auto-hide="true">
                        <div class="simplebar-wrapper" style="margin: -5px -5px -5px -10px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer">
                                </div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 15px 5px 5px 10px;">
                                            <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link popup-tabs gradient-box-shadow active" data-toggle="pill" href="#settings-modal-main" role="tab" aria-controls="settings-modal-main" aria-selected="false">
                                                    <i class="flaticon-shop-store-frontal-building"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow " data-toggle="pill" href="#settings-modal-waiter" role="tab" aria-controls="settings-modal-waiter" aria-selected="false">
                                                    <i class="flaticon-waiter"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow" data-toggle="pill" href="#settings-modal-print" role="tab" aria-controls="settings-modal-print" aria-selected="false">
                                                    <i class="flaticon-printer"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow" data-toggle="pill" href="#settings-modal-addon" role="tab" aria-controls="settings-modal-addon" aria-selected="false">
                                                    <i class="flaticon-paragraph"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow " data-toggle="pill" href="#settings-modal-reciept" role="tab" aria-controls="settings-modal-reciept" aria-selected="false">
                                                    <i class="flaticon-receipt-1"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow" data-toggle="pill" href="#settings-modal-data" role="tab" aria-controls="settings-modal-data" aria-selected="true">
                                                    <i class="flaticon-data"></i>
                                                </a>
                                                <a class="nav-link popup-tabs gradient-box-shadow" data-toggle="pill" href="#settings-modal-settings" role="tab" aria-controls="settings-modal-data" aria-selected="false">
                                                    <i class="flaticon-settings-gears"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                        </div>
                    </div>
                    <div class="modal-header">
                        <h5 class="modal-title text-center">Settings</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="tab-content v-pills-tabContent">
                            <div class="tab-pane show active" id="settings-modal-main" role="tabpanel" aria-labelledby="settings-modal-main-tab">
                                <div class="asdf">
                                    <div class="w-100">
                                        <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home1" role="tab"
                                                aria-controls="home" aria-selected="true">About Shop</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home2" role="tab"
                                                aria-controls="profile" aria-selected="false">Delivery Time</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home3" role="tab"
                                                aria-controls="contact" aria-selected="false">Owner information</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="settings-modal-main-inner-tab-content">
                                            <div class="tab-pane show active" style="height:100%" id="home1" data-simplebar data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab">
                                                <Settings11></Settings11>
                                            </div>
                                            <div class="tab-pane show" style="height:100%" id="home2" data-simplebar data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab">
                                                <Settings12></Settings12>
                                            </div>
                                            <div class="tab-pane show" style="height:100%" id="home3" data-simplebar data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab">
                                                <Settings13></Settings13>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">save</button>
                                    <button type="button" class="btn btn-outline-secondary">edit</button>
                                </div>
                            </div>
                            <div class="tab-pane show" id="settings-modal-waiter" role="tabpanel" aria-labelledby="settings-modal-main-tab">
                                <div class="asdf">
                                    <div class="modal-tab-first-half">
                                        <div class="all-printer-container" data-simplebar data-simplebar-auto-hide="true">
                                            <div v-for="(order, index) in orders" :key='index'>
                                                <Settings2 :order="order"></Settings2>
                                            </div>
                                        </div>
                                        <div class="add-printer">
                                            <button class="btn btn-block btn-outline-secondary">+ Add User</button>
                                        </div>
                                    </div>
                                    <div class="modal-tab-last-half">
                                        <div class="waiter-config-box">
                                            <div class="checkbox-container">
                                                <input type="checkbox" name="yes-no-1" id="yes-1">
                                                <label for="yes-1">&nbsp;</label>
                                            </div>
                                            <span style="margin-left: 5px"><strong>Remove Order</strong></span>
                                            <span class="permission" style="color: red">Not Allowed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">save</button>
                                    <button type="button" class="btn btn-outline-secondary">Save and Close</button>
                                </div>
                            </div>
                            <div class="tab-pane show" id="settings-modal-print" role="tabpanel" aria-labelledby="settings-modal-main-tab">
                                <div class="asdf">
                                    <div class="all-printer">
                                        <div class="all-printer-container" data-simplebar data-simplebar-auto-hide="true">
                                            <div v-for="(printer, index) in printers" :key='index'>
                                                <Settings31 :printer="printer"></Settings31>
                                            </div>
                                        </div>
                                        <div class="add-printer">
                                            <button class="btn btn-block btn-outline-secondary">+ Add User</button>
                                        </div>
                                    </div>
                                    <div class="print-view card-invoice-setting">
                                        <Settings32></Settings32>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">save</button>
                                    <button type="button" class="btn btn-outline-secondary">Save and Close</button>
                                </div>
                            </div>
                            <div class="tab-pane show" data-simplebar data-simplebar-auto-hide="true" id="settings-modal-addon" role="tabpanel" aria-labelledby="settings-modal-addon-tab">
                                <div class="asdf">
                                    <div class="w-100">
                                        <section class="settings-modal-addon-section">
                                            <div class="form-group">
                                                <label for="">Take Away Drinks</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Take Away Drinks</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="section-actions">
                                                <button class="btn btn-outline-secondary">Save</button>
                                                <button class="btn btn-outline-secondary">Edit</button>
                                            </div>
                                        </section>
                                        <section class="settings-modal-addon-section">
                                            <div class="form-group">
                                                <label for="">Dine In Drinks</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Dine In Foods</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="section-actions">
                                                <button class="btn btn-outline-secondary">Save</button>
                                                <button class="btn btn-outline-secondary">Edit</button>
                                            </div>
                                        </section>
                                        <section class="settings-modal-addon-section">
                                            <div class="form-group">
                                                <label for="">Food Deals / Offer / Coupon Drinks</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Food Deals / Offer / Coupon Foods</label>
                                                <input type="text" class="form-control" placeholder="Please Select 7%-19%">
                                            </div>
                                            <div class="section-actions">
                                                <button class="btn btn-outline-secondary">Save</button>
                                                <button class="btn btn-outline-secondary">Edit</button>
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show" id="settings-modal-reciept" role="tabpanel" aria-labelledby="settings-modal-reciept-tab">
                                <div class="asdf">
                                    <div class="w-100">
                                        <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home1" role="tab"
                                                aria-controls="home" aria-selected="true">Daily Cash Up</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home1" role="tab"
                                                aria-controls="profile" aria-selected="false">Monthly Cash Up</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home1" role="tab"
                                                aria-controls="contact" aria-selected="false">Yearly Cash Up</a>
                                            </li>
                                        </ul>
                                        <ul class="nav sort-by-nav">
                                            <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">Sort By Select</a>
                                            </li>
                                            <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">Sort By Select</a>
                                            </li>
                                            <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">Sort By Date</a>
                                            </li>
                                            <li class="nav-item">
                                            <a href="javascript:;" class="nav-link">Sort By Date</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="settings-modal-reciept-inner-tab-content">
                                            <div class="tab-pane show active" style="height:100%" id="home1" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="modal-tab-first-half" data-simplebar data-simplebar-auto-hide="true">
                                                    <Settings5 :cash="cash"></Settings5>
                                                    <div class="knob-container">
                                                        <div style="display:inline;width:200px;height:200px;">
                                                            <canvas width="200" height="200" id="myCanvas1"></canvas>
                                                            <input type="text" value="35" class="knob-dial" data-fgcolor="#00acc1" data-thickness=".15" data-displayinput="false" data-linecap="round" style="display: none; width: 0px; visibility: hidden;">
                                                        </div>
                                                        <div class="knob-inner-text">
                                                            <p>350,00 &euro;</p>
                                                            <span>Dine In</span>
                                                        </div>
                                                    </div>
                                                    <div class="knob-container">
                                                        <div style="display:inline;width:200px;height:200px;">
                                                            <canvas width="200" height="200" id="myCanvas2"></canvas>
                                                            <input type="text" value="35" class="knob-dial" data-fgcolor="#00acc1" data-thickness=".15" data-displayinput="false" data-linecap="round" style="display: none; width: 0px; visibility: hidden;">
                                                        </div>
                                                        <div class="knob-inner-text">
                                                            <p>82,00 &euro;</p>
                                                            <span>Take Away</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-tab-last-half" data-simplebar data-simplebar-auto-hide="true">
                                                    <div v-for="(cash, index) in cashs" :key='index'>
                                                        <Settings5 :cash="cash"></Settings5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-outline-secondary">Save</button>
                                </div>
                            </div>
                            <div class="tab-pane show" id="settings-modal-data" role="tabpanel" aria-labelledby="settings-modal-data-tab">
                                <div class="asdf">
                                    <div class="modal-tab-first-half" data-simplebar data-simplebar-auto-hide="true">
                                        <div class="upload-type" data-toggle="modal" data-target="#backUpConfig">
                                            <i class="flaticon-data"></i>
                                            <div>
                                                <p>Local/Cloud/Drive Backup</p>
                                                <span>Auto Start</span>
                                            </div>
                                        </div>

                                        <div class="upload-type" data-toggle="modal" data-target="#backUpConfig">
                                            <i class="flaticon-data"></i>
                                            <div>
                                                <p>Local/Cloud/Drive Backup</p>
                                                <span>Manuell Start</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-tab-last-half" data-simplebar data-simplebar-auto-hide="true">
                                        <Settings6 v-for="index in 10" :key="index"></Settings6>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane show" id="settings-modal-settings" role="tabpanel" aria-labelledby="settings-modal-settings-tab">
                                <div class="asdf">
                                    <div class="w-100">
                                        <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab"
                                                    aria-controls="home" aria-selected="true">Security</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home" role="tab"
                                                    aria-controls="profile" aria-selected="false">Start</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home" role="tab"
                                                    aria-controls="contact" aria-selected="false">Backup</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="settings-modal-settings-inner-tab-content">
                                            <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="modal-tab-first-half" data-simplebar data-simplebar-auto-hide="true">
                                                    <Settings71 v-for="index in 10" :key="index"></Settings71>
                                                </div>
                                                <div class="modal-tab-last-half" data-simplebar data-simplebar-auto-hide="true">
                                                    <Settings72 :index="index" v-for="index in 3" :key="index"></Settings72>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
                                    <button type="button" class="btn btn-outline-secondary">Edit</button>
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
    import Settings11 from '../modals/Settings11.vue'
    import Settings12 from '../modals/Settings12.vue'
    import Settings13 from '../modals/Settings13.vue'
    import Settings2 from '../modals/Settings2.vue'
    import Settings31 from '../modals/Settings31.vue'
    import Settings32 from '../modals/Settings32.vue'
    import Settings5 from '../modals/Settings5.vue'
    import Settings6 from '../modals/Settings6.vue'
    import Settings71 from '../modals/Settings71.vue'
    import Settings72 from '../modals/Settings72.vue'
    import {mapGetters} from 'vuex'

    export default {
        components:{
            Settings11,
            Settings12,
            Settings13,
            Settings2,
            Settings31,
            Settings32,
            Settings5,
            Settings6,
            Settings71,
            Settings72
        },
        methods: {
            updateCanvas: function (){
                var c = document.getElementById("myCanvas1");
                var ctx = c.getContext("2d");
                ctx.beginPath();
                ctx.arc(100,100,100,0,2*Math.PI);
                ctx.fillStyle = "#21b0c9";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,85,0,2*Math.PI);
                ctx.fillStyle = "white";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,100,2*Math.PI/10,1.5*Math.PI);
                ctx.fillStyle = "#dddddd";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,85,0,2*Math.PI);
                ctx.fillStyle = "white";
                ctx.fill();

                c = document.getElementById("myCanvas2");
                ctx = c.getContext("2d");
                ctx.beginPath();
                ctx.arc(100,100,100,0,2*Math.PI);
                ctx.fillStyle = "#21b0c9";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,85,0,2*Math.PI);
                ctx.fillStyle = "white";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,100,2*Math.PI/10,1.5*Math.PI);
                ctx.fillStyle = "#dddddd";
                ctx.fill();
                ctx.beginPath();
                ctx.arc(100,100,85,0,2*Math.PI);
                ctx.fillStyle = "white";
                ctx.fill();
            },
            getOrders() {
                this.orders = this.$store.getters.orders;
            },
            getPrinters() {
                this.printers = this.$store.getters.printers;
            },
            getCashs() {
                this.cashs = this.$store.getters.cash;
            }
        },
        watch: {
            exampleContent: function() {
                this.updateCanvas();
            }
        },
        mounted: function (){
            this.updateCanvas();
            this.$store.dispatch('fetchOrders');
            this.$store.dispatch('fetchPrinters');
            this.$store.dispatch('fetchCash');
        },
        data: function () {
            return {
                // orders: [],
                // printers: [],
                // cashs: [],
                cash: {
                    today: "06.10.2019",
                    cash1: "- 150,00 &euro;",
                    cash2: "+ 350,00 &euro;",
                    from: "10:00 - 15:00",
                    to: "17:00 - 18:00"
                }
            }
        },
        created: function() {
            // this.getOrders();
            // this.getPrinters();
            // this.getCashs();
        },
		computed: {
			...mapGetters([
				'orders'
            ]),
            ...mapGetters([
				'printers'
            ]),
            ...mapGetters([
				'cashs'
			])
		}
    }

</script>