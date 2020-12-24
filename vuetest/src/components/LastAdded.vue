<template>
  <div class="col-md-8 blog-main">
    <h3 class="pb-4 mb-4 font-italic border-bottom">
      Последнее добавленное
    </h3>

    <div class="blog-post">
      <h2 class="blog-post-title">
        <router-link class="blog-post-link"
                     v-bind:to="{name: 'Post', params: {url: post.url}}">
          {{ post.title }}
        </router-link>
      </h2>
      <div class="blog-post-meta">
        <router-link v-if="post.category.section.name === 'Публицистика'"
                     v-bind:to="{name: 'Publicism'}">Публицистика <br>
        </router-link>
        <router-link class="text-success"
                     v-if="post.category.section.name === 'Интервью'"
                     v-bind:to="{name: 'Interviews'}">Интервью <br>
        </router-link>
        <router-link class="text-info"
                     v-if="post.category.section.name === 'Проза'"
                     v-bind:to="{name: 'Prose'}">Проза <br>
        </router-link>
        <router-link class="text-danger"
                     v-if="post.category.section.name === 'Поэзия'"
                     v-bind:to="{name: 'Poetry'}">Поэзия <br>
        </router-link>
        <router-link class="text-warning"
                     v-if="post.category.section.name === 'Письма'"
                     v-bind:to="{name: 'Letters'}">Письма <br>
        </router-link>
        <router-link class="text-secondary"
                     v-if="post.category.section.name === 'Воспоминания'"
                     v-bind:to="{name: 'Memories'}">Воспоминания <br>
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
        'id': 0,
        'title': '',
        'meta': 0,
        'text': '',
        'url': '',
        'createdAt': '',
        'category': {
          'id': 0,
          'name': '',
          'createdAt': '',
          'section': {
            'id': 0,
            'name': '',
            'createdAt': ''
          }
        }
      }
    }
  },
  created() {
    this.$http.get('/post/lastadded')
        .then((response) => this.post = response.data)
  }
}
</script>

