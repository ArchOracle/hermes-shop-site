<template>
  <Header></Header>
  <div class="content">
    <div class="register_title">
      Страница регистрации
    </div>
    <div class="register_error" style="display: none">
      Error
    </div>
    <div class="register_success" style="display: none">
      Success
    </div>
    <div class="register_field">
      <div class="register_field-name">Name</div>
      <div class="register_field-value">
        <input v-model="registerName" type="text" class="register_name">
      </div>
    </div>
    <div class="register_field">
      <div class="register_field-name">Email</div>
      <div class="register_field-value">
        <input v-model="registerEmail" type="text" class="register_email">
      </div>
    </div>
    <div class="register_field">
      <div class="register_field-name">Password</div>
      <div class="register_field-value">
        <input v-model="registerPassword" type="password" class="register_password">
      </div>
    </div>
    <div class="register_field">
      <div class="register_field-name">Confirm password</div>
      <div class="register_field-value">
        <input v-model="registerPasswordConfirm" type="password" class="register_confirm_password">
      </div>
    </div>
    <div class="register_div_button_center">
      <button @click="register" class="register_button_change-date">Зарегистрироваться</button>
    </div>
    <div class="register_link_login">
      <a href="/profile/login">Войти</a>
    </div>
  </div>
  <Footer></Footer>
</template>

<script>
import Header from "/resources/js/vue/components/Header.vue";
import Footer from "/resources/js/vue/components/Footer.vue";
export default {
  name: "App.vue",
  components: {Header, Footer},
  data() {
    return {
      registerName: '',
      registerEmail: '',
      registerPassword: '',
      registerPasswordConfirm: '',
    }
  },
  methods: {
    register() {
      fetch('/api/user/register', {
        method: 'POST',
        body: JSON.stringify({
          register: {
            registerName: this.$data.registerName,
            registerEmail: this.$data.registerEmail,
            registerPassword: this.$data.registerPassword,
            registerPasswordConfirm: this.$data.registerPasswordConfirm,
          }
        })
      }).then((response) => {
        console.log(response.json())
      }, (reject) => {

      })
    }
  }
}
</script>

<style scoped>

.content {
  min-height: 600px;
  border: solid 1px black;
  width: 800px;
  margin: auto;
}

.register_field {
  display: flex;
  margin: 20px;
  justify-content: space-between;
  align-items: center;
}

.register_title {
  display: flex;
  margin: 20px;
  justify-content: space-around;
  align-items: center;
}

.register_div_button_center {
  display: flex;
  justify-content: space-around;
  margin: 20px;
}

.register_link_login {
  display: flex;
  justify-content: space-around;
  margin: 20px;
}


.register_error {
  background-color: red;
  color: white;
  display: flex;
  margin: 5px;
  padding: 5px;
  font-size: 12pt;
  justify-content: space-around;
}

.register_success {
  background-color: #00ff00;
  display: flex;
  margin: 5px;
  padding: 5px;
  font-size: 12pt;
  justify-content: space-around;
}
</style>