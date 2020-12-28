<template>
  <div class="profile">
    <h2 class="section-title">Профиль</h2>
    <p>Привет! Это твой профиль.</p>
    <div class="btn-wrapper">
      <button v-if="user" class="btn btn-danger" v-on:click="logout">Выйти</button>
    </div>
  </div>
</template>

<script>
import user from "@/components/user";
export default {
  name: "Profile",
  data() {
    return {
      user: user
    }
  },
  methods: {
    logout() {
      user.logout()
      location.href = '/'
    }
  }
}
</script>

<style scoped>

</style>