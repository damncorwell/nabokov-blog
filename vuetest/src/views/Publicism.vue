<template>
  <div>
    <h2 class="section-title">Публицистика</h2>
    <hr>
    <h3>Критические статьи</h3>
    <ol class="list-unstyled">
      <li v-for="post in crit_articles_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Монографии</h3>
    <ol class="list-unstyled">
      <li v-for="post in monographs_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Эссе</h3>
    <ol class="list-unstyled">
      <li v-for="post in essay_list">
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
      crit_articles_list: [],
      monographs_list: [],
      essay_list: []
    }
  },
  created() {
      this.$http.get('/post/list?id=1')
          .then((response) => this.crit_articles_list = response.data)
  }
}
</script>
