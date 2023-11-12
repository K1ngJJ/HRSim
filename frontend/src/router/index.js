import { createRouter, createWebHistory } from 'vue-router'

import Home from '../views/Home.vue'
import HotelResults from "../views/HotelResults.vue";
import HotelDetails from "../views/HotelDetails.vue";
import Reservation from "../views/Reservation.vue";
import Payment from "../views/Payment.vue";

const routes = [
  {
    path: '/',
    component: Home
  },
  {
    path: "/hotels",
    name: "HotelResults",
    component: HotelResults
  },
  {
    path: "/hotels",
    name: "HotelDetails",
    component: HotelDetails
  },
  {
    path: "/reservation",
    name: "Reservation",
    component: Reservation
  },
  {
    path: "/payment",
    name: "Payment",
    component: Payment
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
  },
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
