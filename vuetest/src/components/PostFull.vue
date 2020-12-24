<template>
  <div class="blog-post">
    <h2 class="post-title">{{post.title}}</h2>
    <p class="post-meta">
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
    </p>
    <div class="post-text"
         v-if="post.category.section.name !== 'Поэзия'">
      {{post.text}}
    </div>
    <div class="post-poetry-text"
         v-if="post.category.section.name === 'Поэзия'">
      {{post.text}}
    </div>
  </div>
</template>

<script>
export default {
  name: "PostFull",
  props: ['post']
}
</script>
