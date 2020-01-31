<template>
    <div class="box-with-checkboxes">
        <div class="checkbox-container">
            <label for="yes-1">Yes</label>
            <input type="radio" checked :name=index id="yes-1">
        </div>
        <div class="checkbox-container">
            <label for="no-1">No</label>
            <input type="radio" :name=index id="no-1">
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      index: ''
    }
  }
</script>