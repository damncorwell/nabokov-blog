<template>
  <div>
    <h2 class="section-title">Публицистика</h2>
    <hr>
    <h3>Критические статьи</h3>
    <ol class="list-unstyled">
      <li>
        <router-link v-bind:to="{name: 'Anketa o Pruste'}">
          Анкета о Прусте
        </router-link>
      </li>
    </ol>
    <h3>Монографии</h3>
    <ol class="list-unstyled">
      <li> <a href="">Лекции по русской литературе</a></li>
      <li> <a href="">Лекции по зарубежной литературе</a></li>
      <li> <a href="">Лекции о драме</a></li>
    </ol>
    <h3>Эссе</h3>
    <ol class="list-unstyled">
      <li> <a href="">Кэмбридж</a></li>
      <li> <a href="">Что всякий должен знать?</a></li>
      <li> <a href="">Протест против вторжения в Финляндию</a></li>
    </ol>
  </div>
</template>

<script>
import PostsList from "@/components/PostsList";
export default {
  name: "Publicism",
  components: {PostsList},
}
</script>
