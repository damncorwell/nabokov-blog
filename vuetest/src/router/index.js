import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Interviews from "@/views/Interviews"
import Publicism from "@/views/Publicism";
import AnketaOPruste from "@/components/AnketaOPruste";
import InterviewPeredPremieroiLoliti from "@/components/InterviewPeredPremieroiLoliti";
import Post from "@/views/Post";

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },
  {
    path: '/interviews',
    name: 'Interviews',
    component: Interviews
  },
  {
    path: '/publicism',
    name: 'Publicism',
    component: Publicism
  },
  {
    path: '/anketa-o-pruste',
    name: 'Anketa o Pruste',
    component: AnketaOPruste
  },
  {
    path: '/interview-pered-premieroi-loliti',
    name: 'Interview pered premieroi Loliti',
    component: InterviewPeredPremieroiLoliti
  },
  {
    path: '/post/:url',
    name: 'Post',
    component: Post
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
