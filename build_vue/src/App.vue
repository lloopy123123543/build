<script setup>
import Main from './components/Main.vue'
import Header from './components/Header.vue'

</script>

<template>
  <div class="w-full bg-gradient-to-r from-cyan-500 to-blue-500">
    <Header></Header>
    <router-view></router-view>

  </div>
</template>

<style scoped>
</style>
