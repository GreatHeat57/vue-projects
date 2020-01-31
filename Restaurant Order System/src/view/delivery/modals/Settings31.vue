<template>
    <div class="reciept-box">
        <i class="flaticon-printer left-icon"></i>
        <div>
            <span>{{printer.title}}</span>
            <span>{{printer.ip}}</span>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      printer: Object
    }
  }
</script>