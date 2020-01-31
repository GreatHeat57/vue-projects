<template>
    <div>
        <div class="modal fade" id="paymentModal" role="dialog" tabindex="2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card payment-card">
                    <div class="card-header">
                        <h3 class="card-title text-center">
                            Please Select
                        </h3>
                    </div>
                    <div class="card-body">
                       <div class="container-fluid">
                            <div class="row">
                                <div class="col-4">
                                    <a href="#" class="pay-option">
                                        <img src="../../../assets/images/pos-icons/svg/077-payment-method.svg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#" data-toggle="modal" data-target="#cash-pay" class="pay-option">
                                        <img src="../../../assets/images/pos-icons/svg/051-pay.svg" alt="" class="img-fluid">
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#" class="pay-option">
                                        <img src="../../../assets/images/pos-icons/svg/wrong-red.svg" alt="" class="img-fluid">
                                    </a>
                                </div>
                            </div>
                            <div class="row spe">
                                <div class="col-12">
                                    <h6>Select</h6>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                    <div class="mini-card">
                                        <!-- <div class="mini-head">
                                            <small>Driver</small>
                                        </div> -->
                                        <div class="mini-body">
                                            <img src="../../../assets/images/pos-icons/svg/078-human.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                    <div class="mini-card">
                                        <!-- <div class="mini-head">
                                            <small>Driver</small>
                                        </div> -->
                                        <div class="mini-body">
                                            <img src="../../../assets/images/pos-icons/svg/green-parking-sign.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="#">
                                    <div class="mini-card">
                                        <!-- <div class="mini-head">
                                            <small>Paypal</small>
                                        </div> -->
                                        <div class="mini-body">
                                            <img src="../../../assets/images/pos-icons/svg/054-point-of-service.svg" alt="" class="img-fluid">
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            </div>
                       </div>
                    </div>
                    <div class="card-footer">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-6 text-left">
                                    <a href="#" class="btn">Back</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="#" class="btn">Next</a>
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