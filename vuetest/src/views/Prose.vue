<template>
  <div>
    <h2 class="section-title">Проза</h2>
    <hr>
    <h3>Романы</h3>
    <ol class="list-unstyled">
      <li v-for="post in novels_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Рассказы</h3>
    <ol class="list-unstyled">
      <li v-for="post in stories_list">
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
      novels_list: [],
      stories_list: []
    }
  },
  computed: {
    categoryNovels: function () {
      return this.list.filter(post => post.category.name === 'Романы')
    },
    categoryStories: function () {
      return this.list.filter(post => post.category.name === 'Рассказы')
    }
  },
  created() {
    this.$http.get('/post/list?id=3')
        .then((response) => this.novels_list = response.data)
    this.$http.get('/post/list?id=4')
        .then((response) => this.stories_list = response.data)
  }
}
</script>

