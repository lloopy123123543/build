<script setup>
import { ref } from 'vue'
import Adder from './Adder.vue'

defineProps({
  msg: String,
})

const count = ref(0)
</script>

<template>
<div class="w-full from-cyan-500 to-blue-500">
    <div class="container py-big grid lg:grid-cols-2 mx-auto h-auto ">
    <div class=" z-10 bg-center bg-cover hidden lg:block  lg:relative self-center"><img class="w-full" src="../assets/images/main_image.png" alt=""></div>
    <div class="flex flex-col justify-center content-end items-center text-center lg:text-right p-10 space-y-10 text-white">
      <div class="text-4xl sm:text-7xl font-bold"><p class="text-orange-400">Соберите</p> свой собственный компьютер <p class="text-orange-400">сейчас</p> </div>
      <div class="text-xl">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, reprehenderit!</div>
      <button class="px-10 py-2 rounded-full text-xl bg-orange-600 hover:bg-orange-400 ease-in duration-300">Start</button>
    </div>
  </div>
  <Adder></Adder>
</div>



</template>

<style scoped>

</style>
