<template>
 <div>
<!----modal 14 starts--->
    <div class="modal fade" id="modal-14" role="dialog" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card">
                    <div class="card-header bg-white text-center">
                        <h4 class="card-title">
                            Encash Coupon
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid px-0 py-0">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="couponCode">Coupon Code: </label>
                                        <input type="text" placeholder="Enter Coupon Code" value="" class="form-control mb-2" name="coupon">
                                        <div class="alert alert-success" role="alert">
                                            Coupon code is Accepted
                                        </div>
                                        <div class="alert alert-danger" role="alert">
                                            Coupon code has Expired
                                        </div>
                                    </div>
                                </div>
                                <div class="col text-left mt-2 mb-2">
                                    <h5 class="font-weight-bold">
                                        Coffee 0.33l
                                    </h5>
                                </div>
                                <div class="col text-right mt-2 mb-2">
                                    <h5 class="font-weight-bold">
                                        1,00 &euro;
                                    </h5>
                                </div>
                                <div class="col-12">
                                    <a href="#" data-toggle="modal" data-target="#addItem3" class="btn btn-success" style="width:100%; font-size: 24px; margin-top: 12px;"> 
                                        + Add Extras
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex" style="padding:0">
                        <a href="#" class="btn btn-success" style="width:100%;font-size:28px; border-radius:0; padding:10px 0">Add To Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="addItem3" role="dialog" tabindex="2">
        <div class="modal-dialog custom-dialog">
            <div class="modal-content" style="border: none;">
                <div class="container-fluid px-0">
                    <div class="card" style="border: none">
                        <div class="card-header d-flex justify-content-between bg-white">
                            <h4 class="font-weight-bold text-default">123. Pizza Salami</h4>
                            <h4 class="font-weight-bold text-warning">Extras: 2,50 &euro;</h4>
                            <h4 class="font-weight-bold text-success">Total: 2,50 &euro;</h4>
                        </div>
                        <div class="card-body px-0 py-0" >
                            <div style="display:grid; grid-template-columns: 1fr 9fr">
                                <div class="side-list" style="height: 75vh" data-simplebar>
                                    <ul class="list-group">
                                        <li class="list-group-item active">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/041-cheese-1.svg"  class="img-fluid" alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/042-fish-1.svg"  class="img-fluid" alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/049-carrot.svg" class="img-fluid"  alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/048-ketchup.svg"  class="img-fluid" alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/046-chicken.svg" class="img-fluid"  alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/045-cow.svg" class="img-fluid"  alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/044-pork.svg"  class="img-fluid" alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/047-turkey.svg" class="img-fluid"  alt="">
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">
                                                <img src="../../../assets/images/pos-icons/svg/050-salt-and-pepper.svg"  class="img-fluid" alt="">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="extras-list" >
                                    <div class="extras">
                                        <div class="text-center">
                                            <h4 style="padding: 10px; Margin: 0; background: #e6e6e6">Your Extras</h4>
                                        </div>
                                        <div class="food-items" style="background: #e6e6e6">
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foode1">
                                                <label class="lab" for="foode1">Onion</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foode2">
                                                <label class="lab" for="foode2">Chicken</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foode3">
                                                <label class="lab" for="foode3">Onion</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foode4">
                                                <label class="lab" for="foode4">Chicken</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foode5">
                                                <label class="lab" for="foode5">Onion</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="extras-added">
                                        <div class="text-center">
                                            <h4 style="padding: 20px; Margin: 0;">Cheese Extras</h4>
                                        </div>
                                        <div class="food-items bg-default" style="grid-template-columns: 1fr 1fr 1fr" >
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foodex1">
                                                <label class="lab" for="foodex1">Extra Cheese 1,00 &euro;</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foodex2">
                                                <label class="lab" for="foodex2">Extra Cheese 1,00 &euro;</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foodex3">
                                                <label class="lab" for="foodex3">Extra Cheese 1,00 &euro;</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foodex4">
                                                <label class="lab" for="foodex4">Extra Cheese 1,00 &euro;</label>
                                            </div>
                                            <div class="item-group">
                                                <input type="checkbox" class="item-toggle" name="asd" id="foodex5">
                                                <label class="lab" for="foodex5">Extra Cheese 1,00 &euro;</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer d-flex" style="padding:0">
                            <a href="#" class="btn btn-success" style="width:50%;font-size:28px; border-radius:0; padding:10px 0">Add To Cart</a>
                            <a href="#" class="btn btn-danger" style="width:50%;font-size:28px; border-radius:0; padding:10px 0">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   
    <!---modal 14 ends--->
    </div>
    </template>
