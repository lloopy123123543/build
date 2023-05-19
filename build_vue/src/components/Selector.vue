<script setup>
import { ref } from 'vue'
import axios from "axios";

const motherboards = ref([])
const processors = ref([])
const gpus = ref([])
const rams = ref([])
const powers = ref([])
const coolings = ref([])
const storages = ref([])



const mother = ref('')
const proces = ref('')
const GPU = ref('')
const RAM = ref('')
const POWER = ref('')
const COOLING = ref('')
const STORAGE = ref('')
const tok = 'Bearer ' + localStorage.getItem('token')


function enter(){
  axios({
        method: 'post',
        url: 'http://localhost:8000/api/complect/add/constraineds',
        headers: {
          'Content-Type': 'application/json',
          'Authorization': tok
        },
        data: {
          motherboard: mother.value,
          processor: proces.value,
          storage:STORAGE.value,
          power: POWER.value,
          cooling: COOLING.value,
          RAM: RAM.value,
          GPU: GPU.value
        }
      })
      .then(res => {
         complects.value = res.data.data
         console.log(complects)


      })
      .catch(error => updateParent());

    }

axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/motherboard',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    motherboards.value = res.data.data

  })
  .catch(error => alert("Что то не так"));

axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/processor',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    processors.value = res.data.data
  })
  .catch(error => alert("Что то не так"));

axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/gpu',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    gpus.value = res.data.data

  })
  .catch(error => alert("Что то не так"));


axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/ram',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    rams.value = res.data.data

  })
  .catch(error => alert("Что то не так"));


  axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/power',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    powers.value = res.data.data

  })
  .catch(error => alert("Что то не так"));

  axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/cooling',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    coolings.value = res.data.data
  })
  .catch(error => alert("Что то не так"));

  axios({
  method: 'get',
  url: 'http://localhost:8000/api/complect/show/storage',
  headers: {
    'Content-Type': 'application/json',
    'Authorization': 'Bearer ' + localStorage.getItem('token')
  },
})
  .then(res => {
    storages.value = res.data.data

  })
  .catch(error => alert("Что то не так"));


</script>

<template>
  <div class="container mx-auto">
  
    <div
      class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-yellow-300 md:text-5xl lg:text-6xl dark:text-white">
      Создайте и сохраните свою сборку здесь!</div>
    <div class="w-full from-cyan-500 to-blue-500">
      <div>
        <label for="motherboards" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Материнская
          плата</label>
        <select v-model="mother" id="motherboards"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option class="text-2xl" selected v-for="motherboard in motherboards" :key="motherboard.id" v-bind:value="motherboard.id">
          <option>Название: {{ motherboard.name }}; Сокет: {{ motherboard.socket }}; Цена: {{ motherboard.cost }} </option>
          </option>
        </select>
      </div>
      <div>
        <label for="processors" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Процессор</label>
        <select v-model="proces" id="processors"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="processor in processors" :key="processor.id" v-bind:value="processor.id">
          <option>Название: {{ processor.name }}; Сокет: {{ processor.socket }}; Цена: {{ processor.cost }} </option>
          </option>
        </select>
      </div>
      <div>
        <label for="GPU" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Видеокарта</label>
        <select v-model="GPU" id="gpu"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="gpu in gpus" :key="gpu.id" v-bind:value="gpu.id">
          <option>Название: {{ gpu.name }}; Производитель: {{ gpu.company }}; Цена: {{ gpu.cost }}</option>
          </option>
        </select>
      </div>
      <div>
        <label for="GPU" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">RAM</label>
        <select v-model="RAM" id="ram"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="ram in rams" :key="ram.id" v-bind:value="ram.id">
          <option>Название: {{ ram.name }}; Объем:{{ ram.gb }}; Цена:{{ ram.cost }}</option>
          </option>
        </select>
      </div>
      <div>
        <label for="POWER" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Блок питания</label>
        <select v-model="POWER" id="power"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="power in powers" :key="power.id" v-bind:value="power.id">
          <option>Название: {{ power.name }}; Ватт: {{ power.ww }}; Цена: {{ power.cost }}</option>
          </option>
        </select>
      </div>
      <div>
        <label for="cooling" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Охлаждение</label>
        <select v-model="COOLING" id="power"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="cooling in coolings" :key="cooling.id" v-bind:value="cooling.id">
          <option>Название: {{ cooling.name }}; Цена: {{ cooling.cost }}</option>
          </option>
        </select>
      </div>
      <div>
        <label for="cooling" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Накопитель</label>
        <select v-model="STORAGE" id="storage"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option selected v-for="storage in storages" :key="storage.id" v-bind:value="storage.id">
          <option>Название: {{ storage.name }}; Объем: {{ storage.gb }}; Цена: {{ storage.cost }}</option>
          </option>
        </select>
      </div>
      <button @click="enter(); $emit('vizov')" class="m-10 px-5 py-2 bg-white rounded-2xl">Сохранить</button>
    </div>
  </div>
</template>

<style scoped></style>
