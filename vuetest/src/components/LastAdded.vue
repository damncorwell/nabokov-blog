<template>
  <div class="col-md-8 blog-main">
    <h3 class="pb-4 mb-4 font-italic border-bottom">
      Последнее добавленное
    </h3>

    <div class="blog-post">
      <h2 class="blog-post-title">
        <router-link class="blog-post-link"
                     v-bind:to="{name: 'Post', params: {url: post.url}}">
          Анкета о Прусте
        </router-link>
      </h2>
      <div class="blog-post-meta">
        <router-link v-if="post.section === 'publicism'"
                     v-bind:to="{name: 'Publicism'}">Публицистика
        </router-link>
        {{post.meta}}
      </div>
      <div class="post-text">
        {{post.text}}
      </div>
    </div><!-- /.blog-post -->

  </div><!-- /.blog-main -->
</template>

<script>
import PostList from "@/components/PostsList"

export default {
  name: "LastAdded",
  components: {PostList},
  data() {
    return {
      post: {
        title: 'Анкета о Прусте',
        url: 'anketa-o-pruste',
        section: 'publicism',
        category: 'critical articles',
        meta: 1930,
        text: 'Текст поста "Анкета о Прусте"'
      }
    }
  }
}
</script>

