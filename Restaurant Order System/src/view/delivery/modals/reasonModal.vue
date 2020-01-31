<template>
    <div>
         <div class="modal fade" id="reasonModal" role="dialog" tabindex="2">
        <div class="modal-dialog">
            <div class="modal-content" style="top:300px">
                <div class="card">
                    <div class="card-header text-center bg-white">
                        <h3 class="title">
                            Select Reason
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col text-center">
                                    <select name="reason" id="reason" class="selectpicker form-control">
                                        <option value="">Select Reason</option>
                                        <option selected value="1">Option 1</option>
                                        <option value="2">Option 2</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center bg-white" style="padding:0">
                        <a href="#" role="button" class="btn" style="width:100%; padding:20px 0">
                            Okay
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</template>