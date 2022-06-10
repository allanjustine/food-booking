import { createRouter, createWebHistory } from 'vue-router'
import swal from 'sweetalert';
import HomeView from '../views/HomeView.vue'
import ViewFood from '../views/foods/ViewFood.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/about',
      name: 'about',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../views/AboutView.vue')
    },
    {
      path: '/order',
      name: 'all-foods',
      component: () => import('../views/foods/AllFoods.vue')
    },
    {
      path: '/foods/:id',
      name: 'view-food',
      component: ViewFood,
      props: true
    }
  ]
})

export default router
