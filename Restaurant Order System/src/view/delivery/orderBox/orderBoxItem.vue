<template>
    <!-- <div class="order-container">
    <a href="#" class="thirdbtnAdd" onclick="document.getElementById('complate-order').style.display = 'block';document.getElementById('final-cart').style.display = 'block';document.getElementById('add-cart').style.display = 'none'"> -->
        <div class="third-subbox">
            <p class="thirdname">{{thirdbox.name}}</p>
            <p class="thirdprice">{{thirdbox.price}}</p>
            <span>{{thirdbox.sign}}</span>
        </div>
    <!-- </a>
    </div> -->
</template>

<script>
  export default {
    props: {
      thirdbox: Object
    }
  }
</script>