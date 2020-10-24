<template>
  <div>
    <h2 class="section-title">Интервью</h2>
    <hr>
    <h3>Интервью на русском и в переводе на русский</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryRu">
        <PostsList v-bind:post="post"></PostsList>
      </li>
    </ol>
    <h3>Интервью на английском</h3>
    <ol class="list-unstyled">
      <li v-for="post in categoryEn">
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
      list: PostsList
    }
  },
  computed: {
    categoryRu: function () {
      return this.list.data().posts.filter(post => post.category === 'interview ru')
    },
    categoryEn: function () {
      return this.list.data().posts.filter(post => post.category === 'interview en')
    }
  }
}
</script>

