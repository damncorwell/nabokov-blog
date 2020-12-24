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
export default {
  name: "Profile",
  data() {
    return {
      user: null
    }
  },
  created() {
    if (localStorage.getItem('userData') === null) {
      return
    }

    const userData = JSON.parse(localStorage.getItem('userData'))
    this.user = {...userData}
  },
  methods: {
    logout() {
      localStorage.removeItem('userData')
      this.user = null
      location.href = '/'
    }
  }
}
</script>

<style scoped>

</style>