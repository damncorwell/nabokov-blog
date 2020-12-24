<template>
  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Письма</strong>
          <h3 class="mb-0">О Бунине</h3>
          <div class="mb-1 text-muted">1938</div>
          <p class="card-text mb-auto">«Как он, Бунин, похож на старую, тощую черепаху...»
          </p>
          <a href="#" class="stretched-link">Читать</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://images.lady.mail.ru/176330/"
               style="width: 200px; height: 250px;"
               alt="Bunin">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Интервью</strong>
          <h3 class="mb-0">Премьера «Лолиты»</h3>
          <div class="mb-1 text-muted">1962</div>
          <p class="mb-auto">Интервью перед премьерой экранизации Стэнли Кубрика.</p>
          <router-link v-bind:to="{name: 'Interview pered premieroi filma Lolita'}">Читать</router-link>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://resizing.flixster.com/tsPYrQ7p5KVnNhTe5EVCQoPZhr0=/206x305/v2/https://flxt.tmsimg.com/assets/p558_p_v10_ap.jpg"
               style="width: 200px; height: 250px;"
               alt="Lolita's poster">
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
name: "Cards"
}
</script>

