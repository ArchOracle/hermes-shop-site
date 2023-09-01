<template>
  <Header></Header>
  <div class="content">
    <div class="login_title">
      Страница входа в систему
    </div>
    <div class="login_error" style="display: none">
      Error
    </div>
    <div class="login_success" style="display: none">
      Success
    </div>
    <div class="login_field">
      <div class="login_field-name">Email</div>
      <div class="login_field-value">
        <input type="text" class="login_email">
      </div>
    </div>
    <div class="login_field">
      <div class="login_field-name">Password</div>
      <div class="login_field-value">
        <input type="password" class="login_password">
      </div>
    </div>
    <div class="login_div_button_center">
      <button class="login_button_change-date">Войти</button>
    </div>
    <div class="login_link_register">
      <a href="/profile/register">Зарегистрироваться</a>
    </div>
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
  width: 800px;
  margin: auto;
}

.login_field {
  display: flex;
  margin: 20px;
  justify-content: space-between;
  align-items: center;
}

.login_title {
  display: flex;
  margin: 20px;
  justify-content: space-around;
  align-items: center;
}

.login_div_button_center {
  display: flex;
  justify-content: space-around;
  margin: 20px;
}

.login_link_register {
  display: flex;
  justify-content: space-around;
  margin: 20px;
}


.login_error {
  background-color: red;
  color: white;
  display: flex;
  margin: 5px;
  padding: 5px;
  font-size: 12pt;
  justify-content: space-around;
}

.login_success {
  background-color: #00ff00;
  display: flex;
  margin: 5px;
  padding: 5px;
  font-size: 12pt;
  justify-content: space-around;
}
</style>