<template>
    <div class="card abcmenucard">
        <div class="container menucontainer">
            <div class="row abcitem-bar">
                <div class="col-md-6 abcitem">
                    <h5 class="title">
                        {{fourthbox.title}}
                    </h5>
                </div>
                <div class="col-md-2 abcitem">
                    <h5 class="title">
                        {{fourthbox.num}}
                    </h5>
                </div>
                <div class="col-md-4 abcitem">
                    <h5 class="title">
                        {{fourthbox.price}}
                    </h5>
                </div>
            </div>
            <div class="row abcaddon-bar" v-for="(fourthbox_sub, index) in fourthbox.sub" :key='index'>
                <div class="col-md-6 abcaddon">
                    <h6 class="title">
                        <label>-</label>
                        {{fourthbox_sub.title}}
                    </h6>
                </div>
                <div class="col-md-4 abcaddon">
                    <h6 class="title">
                        {{fourthbox_sub.price}}
                    </h6>
                </div>
                <div class="col-md-2 abcaddon">
                    <button class="btn btn-danger">
                            <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <div class="row abcbutton-bar">
                <div class="col-md-3 abcbutton">
                    <button class="btn btn-success">
                        <i class="fas fa-plus-circle"></i>
                    </button>
                </div>  
                <div class="col-md-3 abcbutton">
                    <button class="btn btn-warning">
                        <i class="fas fa-minus-circle text-white"></i>
                    </button>
                </div>
                <div class="col-md-6 abcbutton">
                    <button class="btn btn-danger">
                        <i class="fas fa-times-circle "></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    props: {
      fourthbox: Object
    }
  }
</script>