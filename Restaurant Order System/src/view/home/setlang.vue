<template>
    <div>
        <div class="modal fade" id="durationInfo" role="dialog" tabindex="1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog custom-dialog">
                <div class="modal-content">
                    <div class="container-fluid duration-info">
                        <div class="row">
                            <div class="col-md-6" style="padding:0">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h3 class="title">
                                            Duration Info
                                        </h3> 
                                    </div>
                                    <div class="card-body">
                                        <div class="order-info" style="display:grid; grid-template-columns: 1fr 1fr;">
                                            <label class="text-left">
                                                <strong>Order Time: </strong>
                                            </label>
                                            <label class="text-right">
                                                15.12.2018  - 20:00
                                            </label>
                                            <label class="text-left">
                                                <strong>Order Type: </strong>
                                            </label>
                                            <label class="text-right">
                                                Delivery For Now
                                            </label>
                                            <label class="text-left">
                                                <strong>Delivery Time: </strong>
                                            </label>
                                            <label class="text-right text-success">
                                                90 min
                                            </label>
                                            <label class="text-left">
                                                <strong>Remaining Time: </strong>
                                            </label>
                                            <label class="text-right">
                                                40 min
                                            </label>
                                            <label class="text-left">
                                                <strong>Order Status: </strong>
                                            </label>
                                            <label class="text-right text-danger">
                                                In Progress
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn">
                                            Save Time
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6" style="padding: 0">
                                <div class="card h-100">
                                    <div class="card-header">
                                        <h3 class="title">
                                            Order Duration
                                        </h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="time-box">
                                            <div class="time-card">
                                                20
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                30
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                40
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                50
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                60
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                70
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                80
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                90
                                                <span>min</span>
                                            </div>
                                            <div class="time-card">
                                                120
                                                <span>min</span>
                                            </div>
                                        </div>
                                        <div class="order-duration-box">
                                            <h3 class="title">
                                                Preorder
                                            </h3>
                                            <div class="img">
                                                <a href="#" class="btn" id="preTime-2">
                                                    <img src="../../../assets/images/pos-icons/svg/116-wall-calendar.svg" style="width:3em" alt="delivery">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn">
                                            Edit Time
                                        </button>
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