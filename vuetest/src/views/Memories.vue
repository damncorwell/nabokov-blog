<template>
  <div>
    <h2 class="section-title">Воспоминания</h2>
    <hr>
    <h3>Воспоминания Набокова</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryNabokovsMemories">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Воспоминания о Набокове</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryAboutNabokov">
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
    categoryNabokovsMemories: function () {
      return this.list.filter(post => post.category.name === 'Воспоминания Набокова')
    },
    categoryAboutNabokov: function () {
      return this.list.filter(post => post.category.name === 'Воспоминания о Набокове')
    }
  },
  created() {
    this.$http.get('/post/list')
        .then((response) => this.list = response.data)
  }
}
</script>

