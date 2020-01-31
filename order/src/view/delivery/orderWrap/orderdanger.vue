<template>
  <div class="orderbox shadow-warning">
    <a href="#" data-toggle="modal" data-target="#modal-1">
      <div class="user">
        <img src="../../../assets/images/faces/avatar.jpg" />
      </div>
      <div class="order-content">
        <div class="userid">
          <p class="order-id">{{order.id}}</p>
          <p class="eta">{{order.duration}}</p>
        </div>
        <div class="userprice">
          <div>
            <p class="price">{{order.price}}</p>
          </div>
          <div class="worklogo">
            <i class="flaticon-delivery"></i>
          </div>
        </div>
      </div>
      <div class="underlined">
        <div>
          <span>&nbsp;</span>
          <span>{{order.time}}</span>
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