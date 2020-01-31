import Vue from "vue";
import Router from "vue-router";

import Home from "@/view/home/Home.vue";
import Fogot from "@/view/home/ForgetPasswordPopup.vue";
import Login from "@/view/home/Login.vue";

import Dinner from "@/view/dinner/Dinner.vue";

import Restaurant from "@/view/restaurant/Restaurant.vue";

import Delivery from "@/view/delivery/Delivery.vue";

Vue.use(Router);

const routerApp = new Router({
  mode: "history",

  routes: [
    
    {
      name: "home",
      path: "/",
      component: Home,
      meta:{
        title:'Home'
      }
    },
    {
      path: "/fogot",
      name: "fogot",
      component: Fogot
    },
    {
      path: "/login",
      name: "login",
      component: Login
    },
    {
      name: "dinners",
      path: "/dinners",
      component: Dinner,
      meta:{
        title:'dinners',
        sidebar:true,
      }
    },
    {
      name: "restaurants",
      path: "/restaurants",
      component: Restaurant,
      meta:{
        title:'restaurants',
        sidebar:true,
      }
    },
    {
      path: "/delivery",
      name: "delivery",
      component: Delivery,
      meta:{
        title:'deliverys',
        sidebar:true,
      }
    }
  ]
});

export default routerApp;
