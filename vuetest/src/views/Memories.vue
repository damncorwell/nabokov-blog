<template>
  <div>
    <h2 class="section-title">Воспоминания</h2>
    <hr>
    <h3>Воспоминания Набокова</h3>
    <ol class="list-unstyled">
      <li v-for="post in nabokovs_memories_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Воспоминания о Набокове</h3>
    <ol class="list-unstyled">
      <li v-for="post in about_nabokov_list">
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
      nabokovs_memories_list: [],
      about_nabokov_list: []
    }
  },
  created() {
    this.$http.get('/post/list?id=10')
        .then((response) => this.nabokovs_memories_list = response.data)
    this.$http.get('/post/list?id=11')
        .then((response) => this.about_nabokov_list = response.data)
  }
}
</script>

