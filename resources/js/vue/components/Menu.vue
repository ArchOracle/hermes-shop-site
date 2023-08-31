<template>
<div class="menu-container">
  menu
  <div class="menu">
    <ul>
      <li><a href="/">Главная</a></li>
      <li><a href="/catalog">Каталог</a></li>
      <li><a href="/info">Инфо</a></li>
      <li><a href="/profile">Профиль</a></li>
    </ul>
  </div>
</div>
</template>

<script>
export default {
  name: "Menu"
}
</script>

<style scoped>
.menu-container, .menu{
  border: solid 1px black;
  padding: 5px;
  margin: 5px;
}
</style>