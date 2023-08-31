<template>
  <div class="header">
  <Menu></Menu>
  </div>
</template>

<script>
import Menu from './Menu.vue'
export default {
  name: "Header",
  components: {Menu}
}
</script>

<style scoped>
.header {
  min-height: 300px;
  border: solid 1px black;
  margin-bottom: 10px;
}
</style>