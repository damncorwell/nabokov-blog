<template>
  <div>
    <div class="home">
      <Jumbotron></Jumbotron>
      <Cards></Cards>
    </div>
    <div class="row">
      <LastAdded></LastAdded>
      <Aside></Aside>
    </div>
  </div>
</template>

<script>
import Product from "@/components/products/Product";
import Jumbotron from "@/components/Jumbotron";
import Cards from "@/components/Cards";
import LastAdded from "@/components/LastAdded";
import Aside from "@/components/Aside";
export default {
  name: 'Home',
  components: {Aside, LastAdded, Cards, Jumbotron},

}
</script>