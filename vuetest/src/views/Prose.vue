<template>
  <div>
    <h2 class="section-title">Проза</h2>
    <hr>
    <h3>Романы</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryNovels">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Рассказы</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryStories">
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
      list: []
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
    this.$http.get('/post/list')
        .then((response) => this.list = response.data)
  }
}
</script>

