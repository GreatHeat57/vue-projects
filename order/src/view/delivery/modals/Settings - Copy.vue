<template>
    <div>
        <div class="modal fade" id="settings-main-modal" tabindex="-1" role="dialog" aria-labelledby="Settings popup" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                <div class="modal-content" style="padding-left:115px;">
                    <div id="settings-modal-v-tab" class="v-pills-tab" data-simplebar="init" data-simplebar-auto-hide="true">
                        <div class="simplebar-wrapper" style="margin: -5px -5px -5px -10px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer">
                                </div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 5px 5px 5px 10px;">
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
                    <div class="modal-body">
                        <div class="tab-content v-pills-tabContent">
                            <div class="tab-pane show active" id="settings-modal-main" role="tabpanel" aria-labelledby="settings-modal-main-tab">
                                <div class="asdf">
                                    <div class="w-100">
                                        <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">About Shop</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="profile" aria-selected="false">Delivery Time</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home3" role="tab" aria-controls="contact" aria-selected="false">Owner information</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="settings-modal-main-inner-tab-content">
                                            <div class="tab-pane show active" style="height:100%" id="home1" data-simplebar="init" data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                <form class="w-100" acton="#">
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">Shop Name</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Shop Name</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">Address</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">House Number</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">City</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Zip Code</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">Phone</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Fax</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">Web</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">E-Mail</label>
                                                            <input type="email" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                    <section class="settings-modal-addon-section">
                                                        <div class="form-group">
                                                            <label for="">Steuer-nr</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">UMST</label>
                                                            <input type="text" class="form-control" placeholder="">
                                                        </div>
                                                    </section>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: 0px; height: 0px;">
                                </div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane show " style="height:100%" id="home2" data-simplebar="init" data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab">
                        <div class="simplebar-wrapper" style="margin: 0px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 0px;">
                                            <div class="delivery-time w-100 py-5">
                                                <div class="container-fluid">
                                                    <div class="row mb-4">
                                                        <div class="col-2 d-flex justify-content-center align-items-center">
                                                            <div class="heading">montang</div>
                                                        </div>
                                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                                            <label class="switch">
                                                                <input type="checkbox" checked="">
                                                                <span class="slider round"></span>
                                                            </label>
                                                            <div class="heading ">
                                                                geoffnet
                                                            </div>
                                                        </div>
                                                        <div class="col-4">
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>
                                                                <button type="button" class="close" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>
                                                                <button type="button" class="close" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-end">
                                                                <a href="#">
                                                                    OFFNUNGSZEITEN
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>

                                                                </div>
                                                                <div class="col-4 d-flex align-items-end">
                                                                <a href="#">
                                                                    OFFNUNGSZEITEN HINZUFUGEN
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-end">
                                                                <a href="#">
                                                                    OFFNUNGSZEITEN
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-center justify-content-center">
                                                                <div class="time-field">
                                                                    <input class="" type="text" name="time">
                                                                    <span>-</span>
                                                                    <input class="" type="text" name="time">
                                                                </div>
                                                            </div>
                                                            <div class="col-4 d-flex align-items-end">
                                                                <a href="#">
                                                                    OFFNUNGSZEITEN
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row mb-4">
                                                            <div class="col-2 d-flex justify-content-center align-items-center">
                                                                <div class="heading">
                                                                    montang
                                                                </div>
                                                            </div>
                                                            <div class="col-2 d-flex align-items-center justify-content-center">
                                                                <label class="switch">
                                                                    <input type="checkbox" checked="">
                                                                    <span class="slider round"></span>
                                                                </label>
                                                                <div class="heading ">
                                                                    geoffnet
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">save</button>
                                            <button type="button" class="btn btn-outline-secondary">edit</button>
                                        </div> -->
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                            <div class="tab-pane show " style="height:100%" id="home3" data-simplebar="init" data-simplebar-auto-hide="true" role="tabpanel" aria-labelledby="home-tab"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">

                                            <form class="w-100" acton="#">
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">Owner Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Owner Last Name</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">Address</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">House Number</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">City</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Zip Code</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">Mobile</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">E-Mail</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">Bank NAme</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">IBAN</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                                <section class="settings-modal-addon-section">
                                                <div class="form-group">
                                                    <label for="">BIC</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Birthday</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                </section>
                                            </form>
                                            <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">save</button>
                                            <button type="button" class="btn btn-outline-secondary">edit</button>
                                        </div> -->
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
                                    <button type="button" class="btn btn-outline-secondary">Edit</button>
                                </div>
                            </div>
                                <div class="tab-pane show " id="settings-modal-waiter" role="tabpanel" aria-labelledby="settings-modal-waiter-tab">
                                    <div class="asdf">
                                        <div class="modal-tab-first-half">

                                            <div class="all-printer-container" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                                <div class="reciept-box">
                                                    <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
                                                    <div>
                                                        <span>John Doe</span>
                                                        <span>22.12.2018</span>
                                                    </div>
                                                    <i class="fa fa-3x fa-edit right-icon"></i>
                                                </div>
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

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
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-outline-secondary">Save And Close</button>
                                    </div>
                                </div>
                                <div class="tab-pane show" id="settings-modal-print" role="tabpanel" aria-labelledby="settings-modal-print-tab">
                                    <div class="asdf">
                                        <div class="all-printer">
                                            <div class="all-printer-container" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                                <div class="reciept-box">
                                                    <i class="flaticon-printer left-icon"></i>
                                                    <div>
                                                        <span>Printer Kitchen / Drinks</span>
                                                        <span>192.168.21.21</span>
                                                    </div>
                                                </div>
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

                                            <div class="add-printer">
                                                <button class="btn btn-block btn-outline-secondary">+ Add Printer</button>
                                            </div>
                                        </div>
                                        <div class="print-view">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-outline-secondary">Save and Close</button>
                                    </div>
                                </div>
                                <div class="tab-pane show" data-simplebar="init" data-simplebar-auto-hide="true" id="settings-modal-addon" role="tabpanel" aria-labelledby="settings-modal-addon-tab"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
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
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary w-100" data-dismiss="modal">Close</button>
                                </div> -->
                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                <div class="tab-pane show" id="settings-modal-reciept" role="tabpanel" aria-labelledby="settings-modal-reciept-tab">
                                    <div class="asdf">
                                        <div class="w-100">
                                        <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="home" aria-selected="true">Daily Cash Up</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="profile" aria-selected="false">Monthly Cash Up</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home1" role="tab" aria-controls="contact" aria-selected="false">Yearly Cash Up</a>
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
                                            <div class="modal-tab-first-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>
                                                </div>

                                                <div class="knob-container">
                                                <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input type="text" value="35" class="knob-dial" data-fgcolor="#00acc1" data-thickness=".15" data-displayinput="false" data-linecap="round" style="display: none; width: 0px; visibility: hidden;"></div>
                                                <div class="knob-inner-text">
                                                    <p>350,00 €</p>
                                                    <span>Dine In</span>
                                                </div>
                                                </div>
                                                <div class="knob-container">
                                                <div style="display:inline;width:200px;height:200px;"><canvas width="200" height="200"></canvas><input type="text" value="35" class="knob-dial" data-fgcolor="#00acc1" data-thickness=".15" data-displayinput="false" data-linecap="round" style="display: none; width: 0px; visibility: hidden;"></div>
                                                <div class="knob-inner-text">
                                                    <p>82,00 €</p>
                                                    <span>Take Away</span>
                                                </div>
                                                </div>

                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

                                            <div class="modal-tab-last-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                                <div class="reciept-box">
                                                <div class="r-date">
                                                    <span>Today</span>
                                                    <span>17.12.2018</span>
                                                </div>
                                                <div class="r-dec">
                                                    <span>- 150,00 €</span>
                                                    <span>10:00 - 15:00</span>
                                                </div>
                                                <div class="r-inc">
                                                    <span>+ 350,00 €</span>
                                                    <span>17:00 - 18:00</span>
                                                </div>

                                                </div>
                                            </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                            <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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
                                        <div class="modal-tab-first-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">

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

                                        </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                        <div class="modal-tab-last-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                            <div class="upload-info gradient-box-shadow">
                                                <i class="flaticon-data"></i>
                                                <span>12.10.208</span>
                                                <span>00:15h</span>
                                                <span>2MB</span>
                                            </div>
                                        </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                    </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-outline-secondary W-100" data-dismiss="modal">Close</button>
                                </div> -->
                                </div>
                                <div class="tab-pane show" id="settings-modal-settings" role="tabpanel" aria-labelledby="settings-modal-settings-tab">
                                    <div class="asdf">
                                        <div class="w-100">
                                            <ul class="nav nav-tabs settings-modal-inner-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Security</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#home" role="tab" aria-controls="profile" aria-selected="false">Start</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#home" role="tab" aria-controls="contact" aria-selected="false">Backup</a>
                                                </li>
                                            </ul>
                                        <div class="tab-content" id="settings-modal-settings-inner-tab-content">
                                            <div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                <div class="modal-tab-first-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">

                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>
                                                    <div class="allow-multi-devices">
                                                    <i class="flaticon-settings-gears"></i>
                                                    <p>Allow Multi Devices</p>
                                                    </div>

                                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>

                                                <div class="modal-tab-last-half" data-simplebar="init" data-simplebar-auto-hide="true"><div class="simplebar-wrapper" style="margin: -10px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 10px;">
                                                    <div class="box-with-checkboxes">
                                                        <div class="checkbox-container">
                                                            <input type="radio" name="yes-no-1" id="yes-1">
                                                            <label for="yes-1">Yes</label>
                                                        </div>
                                                        <div class="checkbox-container">
                                                            <input type="radio" checked="" name="yes-no-1" id="no-1">
                                                            <label for="no-1">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="box-with-checkboxes">
                                                        <div class="checkbox-container">
                                                            <input type="radio" name="yes-no-2" id="yes-2">
                                                            <label for="yes-2">Yes</label>
                                                        </div>
                                                        <div class="checkbox-container">
                                                            <input type="radio" checked="" name="yes-no-2" id="no-2">
                                                            <label for="no-2">No</label>
                                                        </div>
                                                    </div>
                                                    <div class="box-with-checkboxes">
                                                        <div class="checkbox-container">
                                                            <input type="radio" name="yes-no-3" id="yes-3">
                                                            <label for="yes-3">Yes</label>
                                                        </div>
                                                        <div class="checkbox-container">
                                                            <input type="radio" checked="" name="yes-no-3" id="no-3">
                                                            <label for="no-3">No</label>
                                                        </div>
                                                    </div>
                                                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div></div></div>
                                            </div>
                                            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                                            <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
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