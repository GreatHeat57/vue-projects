<template>
    <div>
         <!---modal 15 start --->
    <div class="modal fade" id="modal-15" role="dialog" tabindex="2">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header text-center bg-white">
                        <h3 class="title">
                            Add Your Password
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <input type="password" class="form-control" placeholder="Chef's Password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-white" style="padding:0">
                        <a href="#" data-toggle="modal"  data-target="#driver-options" class="btn" style="width:100%; padding:20px 0">
                            Okay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="driver-options" role="dialog" tabindex="2" style="top:220px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header text-center bg-white">
                        <h3 class="title">
                            Driver Options
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                               <div class="col text-center">
                                   <a href="#" data-toggle="modal" data-target="#sub-total" class="btn btn-outline-secondary py-3">
                                       Sub Total
                                   </a>
                               </div>
                               <div class="col text-center">
                                   <a href="#" class="btn btn btn-outline-secondary py-3">
                                       Cash Up & End Work
                                   </a>
                               </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-white" style="padding:0">
                        <a href="#" class="btn" style="width:100%; padding:20px 0">
                            Okay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="sub-total" role="dialog" tabindex="2" style="">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header text-center bg-white">
                        <h3 class="title">
                            Sub Total
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                            <label for="" class="col px-0 text-left">
                                <strong>Order Total</strong>
                            </label>
                            <label for="" class="col px-0 text-right">
                                <strong>Order Total</strong>
                            </label>
                            </div>
                            <div class="row">   
                                <label for="" class="col px-0 text-left">
                                    <strong>Online Total</strong>
                                </label>
                            
                                <label for="" class="col px-0 text-center">
                                    <strong>Online Payment</strong>
                                </label>
                            
                                <label for="" class="col px-0 text-right">
                                    <strong>599,00 &euro;</strong>
                                </label>
                            </div>
                            <div class="row">
                                <label for="" class="col px-0 text-left">
                                    cancel
                                </label>
                                <label for="" class="col px-0 text-center">
                                    7
                                </label>
                                <label for="" class="col px-0 text-center">
                                    -99,00 &euro;
                                </label>
                                <label for="" class="col px-0 text-right">
                                    -99,00 &euro;
                                </label>
                            </div>
                            <div class="row">
                                <label for="" class="col px-0 text-left">
                                    <strong>Cash Total</strong>
                                </label>
                                <label for="" class="col px-0 text-right">
                                    <strong>500,00 &euro;</strong>
                                </label>
                            </div>
                            <div class="row">
                                <label for="" class="col px-0 text-left">
                                    cancel
                                </label>                               
                                <label for="" class="col px-0 text-center">
                                    7
                                </label>                             
                                <label for="" class="col px-0 text-center">
                                    -99,00 &euro;
                                </label>                               
                                <label for="" class="col px-0 text-right">
                                    -99,00 &euro;
                                </label>
                            </div>
                            <div class="row">
                                <label for="" class="col px-0 text-left">
                                    <strong>Total</strong>
                                </label>
                                <label for="" class="col px-0 text-right">
                                    <strong>500,00 &euro;</strong>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-white" style="padding:0">
                        <a href="#" class="btn" style="width:100%; padding:20px 0">
                            Okay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---modal 15 ends--->
    </div>
</template>