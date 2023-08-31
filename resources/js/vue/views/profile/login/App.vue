<template>
  <Header></Header>
  <div class="content">
    Страница входа в систему
  </div>
  <Footer></Footer>
</template>

<script>
import Header from "/resources/js/vue/components/Header.vue";
import Footer from "/resources/js/vue/components/Footer.vue";
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