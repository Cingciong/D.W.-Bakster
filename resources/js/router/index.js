import { createRouter, createWebHistory } from 'vue-router'

// Import page components
import Home from '../pages/Home.vue'
import About from '../pages/About.vue'
import Rooms from '../pages/Rooms.vue'
import RoomDetail from '../pages/RoomDetail.vue'
import Gallery from '../pages/Gallery.vue'
import Contact from '../pages/Contact.vue'
import Regulamin from '../pages/Regulamin.vue'
import NotFound from '../pages/404.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/o-nas',
    name: 'About',
    component: About
  },
  {
    path: '/pokoje',
    name: 'Rooms',
    component: Rooms
  },
  {
    path: '/pokoj/:slug',
    name: 'RoomDetail',
    component: RoomDetail
  },
  {
    path: '/galeria',
    name: 'Gallery',
    component: Gallery
  },
  {
    path: '/kontakt',
    name: 'Contact',
    component: Contact
  },
  {
    path: '/regulamin',
    name: 'Regulamin',
    component: Regulamin
  },
  {
    path: '/404',
    name: 'NotFound',
    component: NotFound
  },
  {
    path: '/:pathMatch(.*)*',
    redirect: '/404'
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (savedPosition) {
      return savedPosition
    } else {
      return { top: 0 }
    }
  }
})

export default router
