<template>
  <div>
    <h2 class="section-title">Интервью</h2>
    <hr>
    <h3>Интервью на русском и в переводе на русский</h3>
    <ol class="list-unstyled">
      <li>
        <router-link v-bind:to="{name: 'Interview pered premieroi Loliti'}">
          Интервью перед премьерой фильма «Лолита» (1962)
        </router-link>
      </li>
      <li> <a href="">«Знаете, что такое быть известным писателем?...» (1950—1970)</a> </li>
      <li> <a href="">Интервью «покладистому анониму» (1950—1970)</a> </li>
    </ol>
    <h3>Интервью на английском</h3>
    <ol class="list-unstyled">
      <li> <a href="">Vogue (1969)</a></li>
      <li> <a href="">Vogue (1972)</a></li>
      <li> <a href="">Wisconsin Studies (1967)</a></li>
    </ol>
  </div>
</template>

<script>
export default {
name: "Interviews"
}
</script>

