<template>
  <Header></Header>
  <div class="content">
    Заглушка для админки
  </div>
  <Footer></Footer>
</template>

<script>
import Header from "../../components/Header.vue";
import Footer from "../../components/Footer.vue";
export default {
  name: "App.vue",
  components: {Header, Footer}
}
</script>

<style scoped>

.content {
  min-height: 600px;
  border: solid 1px black;
  margin: 10px;
}
</style>