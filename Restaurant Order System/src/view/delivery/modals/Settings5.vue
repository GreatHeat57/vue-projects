<template>
    <div class="reciept-box">
        <div class="r-date">
            <span>Today</span>
            <span>{{cash.today}}</span>
        </div>
        <div class="r-dec">
            <span>{{cash.cash1}}</span>
            <span>{{cash.from}}</span>
        </div>
        <div class="r-inc">
            <span>{{cash.cash2}}</span>
            <span>{{cash.to}}</span>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      cash: Object
    }
  }
</script>