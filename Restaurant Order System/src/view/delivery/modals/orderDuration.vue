<template>
    <div>
        <div class="modal fade" id="orderDuration" role="dialog" tabindex="1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="card order-duration-card">
                        <div class="card-header text-center">
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
                            <div class="order-duration-box text-center">
                                <h3 class="title">
                                    Preorder
                                </h3>
                                <div class="img">
                                    <a href="#" class="btn" id="preTime">
                                        <img src="../../../assets/images/pos-icons/svg/116-wall-calendar.svg" style="width:3em" alt="delivery">
                                    </a>
                                </div>
                                <div id="datePicker" class="calendar" style="display: none;">
                                    <div class="row">
                                        <div class="col-md-12 py-1 text-center">
                                            <div class="dropdown bootstrap-select"><select name="day" class="selectpicker" tabindex="-98">
                                                <option value="" selected="">Please Select</option>
                                                <option value="today">Today</option>
                                                <option value="tomorrow">Tomorrow</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="button" title="Please Select"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Please Select</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                        </div>
                                        <div class="col-md-12 py-1 text-center">
                                            <div class="dropdown bootstrap-select"><select name="time" class="selectpicker" tabindex="-98">
                                                <option value="" selected="">Select Time</option>
                                                <option value="00:00">00:00</option>
                                                <option value="00:15">00:15</option>
                                                <option value="00:30">00:30</option>
                                                <option value="00:45">00:45</option>
                                                <option value="01:00">01:00</option>
                                                <option value="01:15">01:15</option>
                                                <option value="01:30">01:30</option>
                                                <option value="01:45">01:45</option>
                                                <option value="02:00">02:00</option>
                                                <option value="02:15">02:15</option>
                                                <option value="02:30">02:30</option>
                                                <option value="02:45">02:45</option>
                                                <option value="03:00">03:00</option>
                                                <option value="03:15">03:15</option>
                                                <option value="03:30">03:30</option>
                                                <option value="03:45">03:45</option>
                                                <option value="04:00">04:00</option>
                                                <option value="04:15">04:15</option>
                                                <option value="04:30">04:30</option>
                                                <option value="04:45">04:45</option>
                                                <option value="05:00">05:00</option>
                                                <option value="05:15">05:15</option>
                                                <option value="05:30">05:30</option>
                                                <option value="05:45">05:45</option>
                                                <option value="06:00">06:00</option>
                                                <option value="06:15">06:15</option>
                                                <option value="06:30">06:30</option>
                                                <option value="06:45">06:45</option>
                                                <option value="07:00">07:00</option>
                                                <option value="07:15">07:15</option>
                                                <option value="07:30">07:30</option>
                                                <option value="07:45">07:45</option>
                                                <option value="08:00">08:00</option>
                                                <option value="08:15">08:15</option>
                                                <option value="08:30">08:30</option>
                                                <option value="08:45">08:45</option>
                                                <option value="09:00">09:00</option>
                                                <option value="09:15">09:15</option>
                                                <option value="09:30">09:30</option>
                                                <option value="09:45">09:45</option>
                                                <option value="10:00">10:00</option>
                                                <option value="10:15">10:15</option>
                                                <option value="10:30">10:30</option>
                                                <option value="10:45">10:45</option>
                                                <option value="11:00">11:00</option>
                                                <option value="11:15">11:15</option>
                                                <option value="11:30">11:30</option>
                                                <option value="11:45">11:45</option>
                                                <option value="12:00">12:00</option>
                                                <option value="12:15">12:15</option>
                                                <option value="12:30">12:30</option>
                                                <option value="12:45">12:45</option>
                                                <option value="13:00">13:00</option>
                                                <option value="13:15">13:15</option>
                                                <option value="13:30">13:30</option>
                                                <option value="13:45">13:45</option>
                                                <option value="14:00">14:00</option>
                                                <option value="14:15">14:15</option>
                                                <option value="14:30">14:30</option>
                                                <option value="14:45">14:45</option>
                                                <option value="15:00">15:00</option>
                                                <option value="15:15">15:15</option>
                                                <option value="15:30">15:30</option>
                                                <option value="15:45">15:45</option>
                                                <option value="16:00">16:00</option>
                                                <option value="16:15">16:15</option>
                                                <option value="16:30">16:30</option>
                                                <option value="16:45">16:45</option>
                                                <option value="17:00">17:00</option>
                                                <option value="17:15">17:15</option>
                                                <option value="17:30">17:30</option>
                                                <option value="17:45">17:45</option>
                                                <option value="18:00">18:00</option>
                                                <option value="18:15">18:15</option>
                                                <option value="18:30">18:30</option>
                                                <option value="18:45">18:45</option>
                                                <option value="19:00">19:00</option>
                                                <option value="19:15">19:15</option>
                                                <option value="19:30">19:30</option>
                                                <option value="19:45">19:45</option>
                                                <option value="20:00">20:00</option>
                                                <option value="20:15">20:15</option>
                                                <option value="20:30">20:30</option>
                                                <option value="20:45">20:45</option>
                                                <option value="21:00">21:00</option>
                                                <option value="21:15">21:15</option>
                                                <option value="21:30">21:30</option>
                                                <option value="21:45">21:45</option>
                                                <option value="22:00">22:00</option>
                                                <option value="22:15">22:15</option>
                                                <option value="22:30">22:30</option>
                                                <option value="22:45">22:45</option>
                                                <option value="23:00">23:00</option>
                                                <option value="23:15">23:15</option>
                                                <option value="23:30">23:30</option>
                                                <option value="23:45">23:45</option>
                                            </select><button type="button" class="btn dropdown-toggle btn-light bs-placeholder" data-toggle="dropdown" role="button" title="Select Time"><div class="filter-option"><div class="filter-option-inner"><div class="filter-option-inner-inner">Select Time</div></div> </div></button><div class="dropdown-menu " role="combobox"><div class="inner show" role="listbox" aria-expanded="false" tabindex="-1"><ul class="dropdown-menu inner show"></ul></div></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6 text-center">
                                        <a href="#" class="btn">Back</a>
                                    </div>
                                    <div class="col-6 text-center">
                                        <a href="#" data-toggle="modal" data-target="#paymentModal" role="button" class="btn">Next</a>
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