<template>
    <div class="modal-orderbox shadow-warning">
        <a href="#" data-toggle="modal" data-target="#modal-1">
            <div class="row">
                <div class="col-3 user_wrap">
                    <div class="user">
                        <img src="../../../assets/images/faces/avatar.jpg">
                    </div>
                </div>
                <div class="col-9">
                    <div class="user-details">
                        <div class="row">
                            <div class="col-12">
                                <p class="uid">{{ order.id }}</p>
                            </div>
                            <div class="col-6">
                                <p>{{ order.username }}</p>
                            </div>
                            <div class="col-6">
                                <p>{{ order.lastname }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <p>{{ order.address }}</p>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </a>
    </div>
</template>

<script>
  export default {
    props: {
      order: Object
    }
  }
</script>