<template>
    <div class="first_wrap tabscon" id="dinner_first">
      <div class="custom-box">
         <div class="b-icon tabshead">
          <a href="javascript:;" class="b-iconbox ttab active" data-target="#orders-take-away">
            <i class="flaticon-take-away">
              <span>6</span>
            </i>
          </a>
          <a href="javascript:;" class="b-iconbox ttab" data-target="#orders-eating">
            <i class="flaticon-eating">
              <span>6</span>
            </i>
          </a>
          <a href="javascript:;" class="b-iconbox ttab" data-target="#orders-hotel">
            <i class="flaticon-hotel">
              <span>6</span>
            </i>
          </a>
          <a href="javascript:;" class="b-iconbox ttab" data-target="#orders-notifications">
            <i class="flaticon-ring">
              <span>6</span>
            </i>
          </a>
        </div>
        <div class="grass-bg orders-filtered tabs in" id="orders-take-away">
          <div class="ofb" data-simplebar data-simplebar-auto-hide="true">
            <div class="order-container">
              <div v-for="(order, index) in orders" :key='index' class="orderbox dinners-order shadow-success">
                  <div class="icon">
                      <div class="user user-icon">
                      <i class="flaticon-parking-sign"></i>
                      </div>
                  </div>
                  <div class="userid">
                      <p class="firstp">{{order.id}}</p>
                      <p class="order-time">{{order.time}}</p>
                  </div>
                  <div class="userprice">
                      <p class="price">{{order.price}}</p>
                      <p class="time">{{order.duration}}</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grass-bg orders-filtered tabs" id="orders-eating">
          <div class="ofb" data-simplebar data-simplebar-auto-hide="true">
            <div class="order-container">
                <div v-for="(order, index) in orders" :key='index' class="orderbox dinners-order shadow-success">
                  <div class="icon">
                      <div class="user user-icon">
                      <i class="flaticon-parking-sign"></i>
                      </div>
                  </div>
                  <div class="userid">
                      <p class="firstp">{{order.id}}</p>
                      <p class="order-time">{{order.label}}</p>
                  </div>
                  <div class="userprice">
                      <p class="price">{{order.price}}</p>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grass-bg orders-filtered tabs" id="orders-hotel">
          <div class="ofb" data-simplebar data-simplebar-auto-hide="true">
            <div class="order-container">
                <div v-for="index in 12" :key="index" class="order-table-icons">
                  <img src="../../assets/images/pos-icons/svg/019-drink.svg" alt="" />
                  <p>Table 1</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grass-bg orders-filtered orderNotifications tabs" id="orders-notifications">
          <div class="ofb" data-simplebar data-simplebar-auto-hide="true">
            <div class="order-container">
                <div v-for="(order, index) in orders" :key='index' class="orderbox shadow-success">
                  <div class="row">
                      <div class="col-4">
                          <div class="user"><img src="../../assets/images/faces/avatar.jpg" /></div>
                      </div>
                      <div class="order-content col-8">
                          <div class="userid">
                              <p class="order-id">{{order.id}}</p>
                              <p class="eta">{{order.duration}}</p>
                          </div>
                          <div class="userprice">
                              <div>
                                  <p class="price">{{order.price}}</p>
                              </div>
                              <div class="worklogo">
                                  <i class="fa fa-lg fa-globe"></i>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="underlined">
                      <div>
                          <span>&nbsp;</span>
                          <span>{{order.time}}</span>
                      </div> 
                  </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
      name:'first',
      mounted() {
          this.$store.dispatch('fetchOrders')
      },
      components:{
        
      },
      data: function () {
          return {
            
          }
      },
      computed: {
          ...mapGetters([
              'orders'
          ])
      },
      methods: {
          // deletOrder(order) {
          //     this.$store.dispatch('deletOrder', order)
          // }
      }
    }
</script>
