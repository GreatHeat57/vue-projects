<template>
    <div>
        <div class="modal fade" id="newOrderModal" role="dialog" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content container">
                <div class="row">
                    <div class="col-md-7" style="padding: 0">
                        <div class="card newOd">
                            <div class="card-header" style="padding-top:14px;padding-bottom:0;">
                                <h3 class="title text-center">
                                    Order Details
                                </h3>
                            </div>
                            <div class="card-body">
                                <form action="#">
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
                                    <a href="#" class="btn active">
                                        <img src="../../../assets/images/pos-icons/svg/080-checked.svg" style="width:30px" alt="delivery">
                                    </a>
                                    <a href="#" class="btn">
                                        <img src="../../../assets/images/pos-icons/svg/081-contract.svg" style="width:30px" alt="delivery">
                                    </a>
                                    <a href="#" class="btn" data-toggle="modal" data-target="#durationInfo">
                                        <img src="../../../assets/images/pos-icons/svg/116-wall-calendar.svg" style="width:30px" alt="delivery">
                                    </a>
                                    <a href="#" id="chefPassword_show" class="btn" data-toggle="modal" data-target="#chefPassword" data-dismiss="modal" aria-label="Close">
                                        <img src="../../../assets/images/pos-icons/svg/057-trash.svg" style="width:30px" alt="delivery">
                                    </a> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5" style="padding: 0">
                        <div class="card card-invoice">
                            <div class="card-header" style="padding:0">
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
                            <div class="card-body" data-simplebar  style="padding: 15px;overflow: auto;height:625px;">
                                    <div class="text-center">
                                        <img src="../../../assets/images/logo.png" alt="" style="width: 30%;">
                                        <br>
                                        <label for="#">www.yamiyami.de</label>
                                    </div>
                                    <div class="text-left address">
                                        <h6>Restaurant Name</h6>
                                        <p>
                                            Hase Str. 8 <br>
                                            49088 Osnabrück<br>
                                            Tel.: 0541 123 456 789<br>
                                            Fax: 0541 123 456 780<br>
                                        </p>
                                    </div>
                                    <div class="details">
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
                                    <div class="order">
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
                                    <div class="summary">
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
                                    <div class="greeting text-center">
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
</template>