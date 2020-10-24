<template>
  <div class="blog-post">
    <h2 class="post-title">{{post.title}}</h2>
    <p class="post-meta">
      <router-link v-if="post.section === 'publicism'"
                   v-bind:to="{name: 'Publicism'}">Публицистика <br>
      </router-link>
      <router-link class="text-success"
                   v-if="post.section === 'interview'"
                   v-bind:to="{name: 'Interviews'}">Интервью <br>
      </router-link>
      {{post.meta}}
    </p>
    <div class="post-text">
      {{post.text}}
    </div>
  </div>
</template>

<script>
export default {
  name: "Post",
  data() {
    return {
      post: {}
    }
  },
  created() {
    const url =this.$route.params.url
    // send ajax request
    this.post = {
      title: 'Анкета о Прусте',
      url: url,
      section: 'publicism',
      category: 'critical articles',
      meta: 1930,
      text: 'Текст поста "Анкета о Прусте"'
    }
  }
}
</script>
