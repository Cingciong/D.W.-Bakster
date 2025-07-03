import { createRouter, createWebHistory } from 'vue-router'

// Import page components
import Home from '../pages/Home.vue'
import Rooms from '../pages/Rooms.vue'
import Contact from '../pages/Contact.vue'
import About from '../pages/About.vue'
import Gallery from '../pages/Gallery.vue'
import Regulamin from '../pages/Regulamin.vue'
import NotFound from '../pages/404.vue'
import RoomDetail from '../pages/RoomDetail.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/pokoje',
    name: 'Rooms',
    component: Rooms
  },
  {
    path: '/kontakt',
    name: 'Contact',
    component: Contact
  },
  {
    path: '/o-nas',
    name: 'About',
    component: About
  },
  {
    path: '/galeria',
    name: 'Gallery',
    component: Gallery
  },
  {
    path: '/regulamin',
    name: 'Regulamin',
    component: Regulamin
  },
  // Dynamic room routes
  {
    path: '/pokoj/:slug',
    name: 'RoomDetail',
    component: RoomDetail,
    props: true
  },
  {
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    component: NotFound
  }
]

const router = createRouter({
  history: createWebHistory('/'),
  routes
})

export default router
