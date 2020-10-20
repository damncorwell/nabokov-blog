<template>
  <div class="blog-post">
    <h2 class="post-title">{{ post.title }}</h2>
    <p class="post-meta"> </p>
    <div class="post-text">{{ post.text}}</div>

  </div><!-- /.blog-post -->
</template>

<script>
export default {
  name: "Post",
  props: ['post']
}
</script>
