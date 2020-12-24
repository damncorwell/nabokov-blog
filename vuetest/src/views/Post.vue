<template>
  <div>
    <PostFull v-bind:post="post"></PostFull>
  </div>
</template>

<script>
import PostFull from "@/components/PostFull";
export default {
  name: "Post",
  components: {PostFull},
  data() {
    return {
      post: {}
    }
  },
  created() {
    const url =this.$route.params.url
    this.$http.get('/post/info', {params: {url: url}})
      .then((response) => this.post = response.data)
  }
}
</script>
