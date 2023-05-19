<script setup>
import { ref } from 'vue'

defineProps({
  msg: String,
})

const count = ref(0)
</script>

<template>
  <div class="w-full bg-gradient-to-r ">
    <div class="container mx-auto text-white">
    <header class=" mx-5 lg:mx-0 flex justify-center sm:justify-between items-center pt-10">
      <div class="text-xl font-semibold hidden sm:block">Reventon</div>
      <div class="flex space-x-4 text-lg">
        <a ><router-link to="/"><div class="col">Главная</div></router-link></a>
        <a ><router-link to="/login"><div class="col">Логин</div></router-link></a>
        <a ><router-link to="/register"><div class="col">Регистрация</div></router-link></a>
      </div>
    </header>
  </div>

  </div>



</template>

<style scoped>

</style>
