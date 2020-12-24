import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Interviews from "@/views/Interviews"
import Publicism from "@/views/Publicism";
import Post from "@/views/Post";
import Prose from "@/views/Prose";
import Poetry from "@/views/Poetry";
import Letters from "@/views/Letters";
import Entomology from "@/views/Entomology";
import Memories from "@/views/Memories";
import SignIn from "@/views/SignIn";
import Profile from "@/views/Profile";
import SignUp from "@/views/SignUp";
import Search from "@/views/Search";

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
    path: '/post/:url',
    name: 'Post',
    component: Post
  },
  {
    path: '/post/interview-pered-premieroi-filma-lolita',
    name: 'Interview pered premieroi filma Lolita',
    component: Post
  },
  {
    path: '/prose',
    name: 'Prose',
    component: Prose
  },
  {
    path: '/poetry',
    name: 'Poetry',
    component: Poetry
  },
  {
    path: '/letters',
    name: 'Letters',
    component: Letters
  },
  {
    path: '/entomology',
    name: 'Entomology',
    component: Entomology
  },
  {
    path: '/memories',
    name: 'Memories',
    component: Memories
  },
  {
    path: 'sign-in',
    name: 'SignIn',
    component: SignIn,
    meta: {
      layout: 'login-layout'
    }
  },
  {
    path: 'profile',
    name: 'Profile',
    component: Profile
  },
  {
    path: 'sign-up',
    name: 'SignUp',
    component: SignUp
  },
  {
    path: 'search',
    name: 'Search',
    component: Search
  }
]

const router = new VueRouter({
  mode: 'history',
  base: process.env.BASE_URL,
  routes
})

export default router
