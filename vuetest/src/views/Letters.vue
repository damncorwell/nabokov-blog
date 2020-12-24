<template>
  <div>
    <h2 class="section-title">Письма</h2>
    <hr>
    <h3>Сбоники писем</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryCollections">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Письма Набокова</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryNabokovs">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Письма к Набокову</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryToNabokov">
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
    categoryCollections: function () {
      return this.list.filter(post => post.category.name === 'Сборники писем')
    },
    categoryNabokovs: function () {
      return this.list.filter(post => post.category.name === 'Письма Набокова')
    },
    categoryToNabokov: function () {
      return this.list.filter(post => post.category.name === 'Письма к Набокову')
    }
  },
  created() {
    this.$http.get('/post/list')
        .then((response) => this.list = response.data)
  }
}
</script>

