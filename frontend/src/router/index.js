import { createRouter, createWebHistory } from 'vue-router'
import SigninView from '../views/SigninView.vue'
import SignupView from '../views/SignupView.vue'
import HotelView from '../views/HotelView.vue'

const routes = [
  {
    path: '/',
    name: 'Signin',
    component: SigninView
  },
  {
    path: '/Signup',
    name: 'Signup',
    component: SignupView
  },
  {
    path: '/Hotel',
    name: 'Hotel',
    component: HotelView
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
