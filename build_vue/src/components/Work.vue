<script setup>
import axios from "axios";
import { ref } from 'vue'
import Selector from './Selector.vue'

const complects = ref([])
axios({
        method: 'get',
        url: 'http://localhost:8000/api/complect/show/constrained',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': 'Bearer ' + localStorage.getItem('token')
        },
      })
      .then(res => {
         complects.value = res.data.data

      })
      .catch(error => alert("Что то не так"));



</script>

<template>
<div class="w-full from-cyan-500 to-blue-500  p-10">
  <div class="container mx-auto p-10 grid grid-cols-3">
    <div v-for="complect in complects" :key="complect.id" class="bg-white p-8 rounded-lg w-3/4 r">
      <div class="text-orange-400 font-bold">Код сборки: R{{complect.id }}</div>
      <div>
        <div class="text-2xl font-bold">Материнская плата:</div>
        <div>Название:{{ complect.motherboard.name}}</div>
        <div>Сокет:{{ complect.motherboard.socket}}</div>
        <div>Цена:{{ complect.motherboard.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold">Процессор</div>
        <div>Название: {{ complect.processor.name}}</div>
        <div>Сокет: {{ complect.processor.socket}}</div>
        <div>Цена: {{ complect.processor.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold">Блок питания</div>
        <div>Название:{{ complect.power.name}}</div>
        <div>Ватт:{{ complect.power.ww}}</div>
        <div>Цена:{{ complect.power.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold">RAM</div>
        <div>Название:{{ complect.ram.name}}</div>
        <div>GB:{{ complect.ram.gb}}</div>
        <div>Цена:{{ complect.ram.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold">Память</div>
        <div>Название:{{ complect.storage.name}}</div>
        <div>Объем (гб):{{ complect.storage.gb}}</div>
        <div>Цена:{{ complect.storage.cost}}</div>
      </div>
      <div>
        <div class="text-2xl font-bold">Охлаждение</div>
        <div>Название:{{ complect.cooling.name}}</div>
        <div>Цена:{{ complect.cooling.cost}}</div>
      </div>
    </div>
  </div>
  <Selector></Selector>
</div>




</template>

<style scoped>

</style>
