<template>
  <div>
    <h2 class="section-title">Поиск</h2>
    <!-- Search form -->
    <input class="form-control" v-model="search" type="text" placeholder="Введите запрос" aria-label="Search">
    <ol class="list-unstyled" v-if="search">
      <li v-for="post in searchList">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
  </div>
</template>

<script>
import PostsList from "@/components/PostsList";
export default {
  name: "Search",
  components: {PostsList},
  data() {
    return {
      search: '',
      list: []
    }
  },
  computed: {
    searchList: function () {
      return this.list.filter(post => {return post.title.toLowerCase()
          .includes(this.search.toLowerCase())})
    }
  },
  created() {
    this.$http.get('/post/list')
        .then((response) => this.list = response.data)
  }
}
</script>

<style scoped>
  input {
    margin-bottom: 2.5rem;
  }
</style>