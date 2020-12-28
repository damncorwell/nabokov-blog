<template>
  <div>
    <h2 class="section-title">Поэзия</h2>
    <hr>
    <h3>Поэмы</h3>
    <ol class="list-unstyled">
      <li v-for="post in poems_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Стихи</h3>
    <ol class="list-unstyled">
      <li v-for="post in verses_list">
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
      poems_list: [],
      verses_list: []
    }
  },
  created() {
    this.$http.get('/post/list?id=5')
        .then((response) => this.poems_list = response.data)
    this.$http.get('/post/list?id=6')
        .then((response) => this.poems_list = response.data)
  }
}
</script>

