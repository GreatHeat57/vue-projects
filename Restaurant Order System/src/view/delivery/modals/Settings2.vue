<template>
    <div class="reciept-box">
        <img src="../../../assets/images/faces/avatar.jpg" alt="user image" class="left-user-image">
        <div>
            <span>{{order.name}}</span>
            <span>{{order.time}}</span>
        </div>
        <i class="fa fa-3x fa-edit right-icon"></i>
    </div>
</template>

<script>
  export default {
    props: {
      order: Object
    }
  }
</script>