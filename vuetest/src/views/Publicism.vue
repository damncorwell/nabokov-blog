<template>
  <div>
    <h2 class="section-title">Публицистика</h2>
    <hr>
    <h3>Критические статьи</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryCritArticles">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Монографии</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryMonograph">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Эссе</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryEssay">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
  </div>
</template>

<script>
import PostsList from "@/components/PostsList";
export default {
  name: "Publicism",
  components: {PostsList},
  data() {
    return {
      list: PostsList
    }
  },
  computed: {
    categoryCritArticles: function() {
      return this.list.data().posts.filter(post => post.category === 'critical articles')
    },
    categoryMonograph: function() {
      return this.list.data().posts.filter(post => post.category === 'monograph')
    },
    categoryEssay: function() {
      return this.list.data().posts.filter(post => post.category === 'essay')
    }
  }
}
</script>
