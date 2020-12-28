<template>
  <div>
    <h2 class="section-title">Письма</h2>
    <hr>
    <h3>Сбоники писем</h3>
    <ol class="list-unstyled">
      <li v-for="post in collections_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Письма Набокова</h3>
    <ol class="list-unstyled">
      <li v-for="post in nabokovs_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Письма к Набокову</h3>
    <ol class="list-unstyled">
      <li v-for="post in tonabokov_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
  </div>
</template>

<script>
import PostsList from "@/components/PostsList";
export default {
  name: "Interviews",
  components: {PostsList},
  data() {
    return {
      collections_list: [],
      nabokovs_list: [],
      tonabokov_list: []
    }
  },
  created() {
    this.$http.get('/post/list?id=7')
        .then((response) => this.collections_list = response.data)
    this.$http.get('/post/list?id=8')
        .then((response) => this.nabokovs_list = response.data)
  }
}
</script>

