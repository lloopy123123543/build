<script>
import axios from "axios";
import  router  from '../router'
import Adder from './Adder.vue'

export default {
    data() {
        return {
            login: "",
            password: ""
        };
    },
    methods: {
        enter() {
            localStorage.setItem("token", null);
            axios({
                method: "post",
                url: "http://localhost:8000/api/user/login",
                data: {
                    login: this.login,
                    password: this.password
                }
            })
                .then(res => {
                const token = res.data.data.token;
                localStorage.setItem("token", token);
                router.push("/work");
            })
                .catch(error => alert("Что-то пошло не так, проверьте правильность логина и пароля"));
        }
    },
    mounted() {
    },
    components: { Adder }
}


</script>

<template>
  <div class="py-32">
    <div class="container mx-auto bg-white grid grid-cols-1 mt-10 sm:rounded-lg max-w-2xl space-y-10 p-10">
    <h1 class="text-center font-bold text-2xl">Логин</h1>
    <div>
      <label for="Login" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Login</label>
      <input v-model="login" type="text"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Login" required>
    </div>
    <div>
      <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
      <input v-model="password" type="password"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="Password" required>
    </div>
    <button v-on:click="enter" type="button"
      class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Login</button>

  </div>
  <Adder></Adder>
  </div>



</template>

<style scoped>

</style>
