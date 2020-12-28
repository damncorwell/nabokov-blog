<template>
  <div>
    <h2 class="section-title">Интервью</h2>
    <hr>
    <h3>Интервью на русском и в переводе на русский</h3>
    <ol class="list-unstyled">
      <li v-for="post in ru_list">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Интервью на английском</h3>
    <ol class="list-unstyled">
      <li v-for="post in en_list">
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
      ru_list: [],
      en_list: []
    }
  },
  created() {
    this.$http.get('/post/list?id=2')
        .then((response) => this.ru_list = response.data)
  }
}
</script>

