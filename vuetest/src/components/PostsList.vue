<template>
  <div>
    <span>
      <router-link v-bind:to="{name: 'Post', params: {url: post.url}}">
        {{post.title}} ({{post.meta}})
      </router-link>
    </span>
  </div>

</template>

<script>
import Post from "@/components/PostFull"

export default {
  name: "PostsList",
  components: {Post},
  props: ['post'],
  data() {
    return {
      // posts: [
      //   {
      //     title: 'Анкета о Прусте',
      //     url: 'anketa-o-pruste',
      //     section: 'publicism',
      //     category: 'critical articles',
      //     meta: 1930,
      //     text: 'Текст поста "Анкета о Прусте"'
      //   },
      //   {
      //     title: 'Лекции о драме',
      //     url: 'lekcii-o-drame',
      //     section: 'publicism',
      //     category: 'monograph',
      //     meta: null,
      //     text: ''
      //   },
      //   {
      //     title: 'Что каждый должен знать?',
      //     url: 'cto-kazhdiy-dolzhen-znat',
      //     section: 'publicism',
      //     category: 'essay',
      //     meta: 1931,
      //     text: 'Текст поста "Что каждый должен знать?"'
      //   },
      //   {
      //     title: 'Интервью перед премьерой фильма «Лолита»',
      //     url: 'interview-pered-premieroi-loliti',
      //     section: 'interview',
      //     category: 'interview ru',
      //     meta: 1962,
      //     text: 'Текст поста "Интервью перед премьерой фильма «Лолита»"'
      //   }
      // ]
      posts: []
    }
  }
}
</script>
