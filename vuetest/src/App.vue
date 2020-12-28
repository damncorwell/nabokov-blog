<template>
    <div id="app" class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1" v-if="!user.isAuth()">
            <router-link class="btn btn-sm btn-outline-secondary" v-bind:to="{name: 'SignIn'}">Войти</router-link>
          </div>
          <div class="col-4 pt-1" v-else>
            <router-link class="btn btn-sm btn-outline-secondary" v-bind:to="{name: 'Profile'}">Профиль</router-link>
          </div>
          <div class="col-4 text-center">
            <router-link class="blog-header-logo text-dark" v-bind:to="{name: 'Home'}">Владимир Набоков</router-link>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <router-link class="text-muted" v-bind:to="{name: 'Search'}" aria-label="Search">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
            </router-link>

          </div>
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Prose'}">Проза</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Poetry'}">Поэзия</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Interviews'}">Интервью</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Letters'}">Письма</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Publicism'}">Публицистика</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Entomology'}">Энтомология</router-link>
          <router-link class="p-2 text-muted" v-bind:to="{name: 'Memories'}">Воспоминания</router-link>
        </nav>
      </div>

      <main role="main">
        <router-view/>
      </main>

      <footer class="blog-footer">
        <img class="footer-image"
             src="https://raw.githubusercontent.com/damncorwell/nabokov-blog/main/img/autograph.png"
             alt="Autograph">
        <p>
          <a href="#">В начало</a>
        </p>
      </footer>
    </div>
</template>

<script>
import user from "@/components/user";
export default {
  name: "default-layout",
  data() {
    return {
      user: user
    }
  }
}
</script>