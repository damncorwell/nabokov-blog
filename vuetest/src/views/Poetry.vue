<template>
  <div>
    <h2 class="section-title">Поэзия</h2>
    <hr>
    <h3>Поэмы</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryPoems">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Стихи</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryVerses">
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
    categoryPoems: function () {
      return this.list.filter(post => post.category.name === 'Поэмы')
    },
    categoryVerses: function () {
      return this.list.filter(post => post.category.name === 'Стихи')
    }
  },
  created() {
    this.$http.get('/post/list')
        .then((response) => this.list = response.data)
  }
}
</script>

