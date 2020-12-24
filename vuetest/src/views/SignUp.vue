<template>
  <div class="profile">
    <h2 v-if="user">Welcome, {{ user.username }}!</h2>
    <h2 v-if="!user">You are not logged in</h2>
    <div class="btn-wrapper">
      <button v-if="user" class="btn-grad" v-on:click="signOut">Sign out</button>
      <button v-if="!user" class="btn-grad" v-on:click="routeToSignIn">Sign In</button>
      <button v-if="!user" class="btn-grad" v-on:click="routeToSignUp">Sign Up</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "SignUp",
  data() {
    return {
      user: null
    }
  }
}
</script>

<style scoped>

</style>