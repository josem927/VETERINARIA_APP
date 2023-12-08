<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import axios from 'axios';

let nombreMascota = ref('');
let tipoServicio = ref('');
let fechaCita = ref('');
let horaCita = ref('');
let malestar = ref(false);
let numeroTelefono = ref('');

let mensaje = ref('');


function enviarInformacion() {
  const formData = {
    nombreMascota: nombreMascota.value,
    tipoServicio: tipoServicio.value,
    fechaCita: fechaCita.value,
    horaCita: horaCita.value,
    malestar: malestar.value,
    numeroTelefono: numeroTelefono.value,
  };

  axios.post('/guardar-cita', formData)
    .then(response => {
      console.log('Información enviada:', response.data);
  
      mensaje.value = 'Información enviada correctamente.';
      
      setTimeout(() => {
        location.reload();
      }, 2000);
    })
    .catch(error => {
      console.error('Error al enviar la información revise los campos:', error);

      mensaje.value = 'Error al enviar la información.';
    });
}
</script>

<template>
  <Head title="Dashboard" />

  <AuthenticatedLayout>
    <template #header>
      <div class="flex items-center justify-center">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">AGENDA TU CITA</h2>
      </div>
    </template>

    <div class="flex items-center justify-center h-screen">
      <div class="custom-card">
        <div class="border rounded p-4">
          <h3 class="text-lg font-semibold mb-4">Información de la Mascota</h3>

          <div class="mb-4">
            <label for="nombreMascota" class="block text-sm font-medium text-gray-600">Nombre de la mascota</label>
            <input type="text" id="nombreMascota" v-model="nombreMascota" class="mt-1 p-2 border rounded w-full">
          </div>
          
          <div class="mb-4">
            <label for="tipoServicio" class="block text-sm font-medium text-gray-600">Tipo de servicio</label>
            <select id="tipoServicio" v-model="tipoServicio" class="mt-1 p-2 border rounded w-full">
              <option value="baños">Baños</option>
              <option value="vacunas">Vacunas</option>
              <option value="cortePelo">Corte de pelo</option>
            </select>
          </div>


          <div class="mb-4">
            <label for="fechaCita" class="block text-sm font-medium text-gray-600">Día de la cita</label>
            <input type="date" id="fechaCita" v-model="fechaCita" class="mt-1 p-2 border rounded">
            <label for="horaCita" class="block text-sm font-medium text-gray-600 mt-2">Hora de la cita</label>
            <input type="time" id="horaCita" v-model="horaCita" class="mt-1 p-2 border rounded">
          </div>

    
          <div class="mb-4">
            <label class="block text-sm font-medium text-gray-600">¿Presenta algún malestar marque la casilla en caso de malestar?</label>
            <input type="checkbox" v-model="malestar" class="mt-1">
          </div>


          <div class="mb-4">
            <label for="numeroTelefono" class="block text-sm font-medium text-gray-600">Número de teléfono</label>
            <input type="tel" id="numeroTelefono" v-model="numeroTelefono" class="mt-1 p-2 border rounded w-full">
          </div>


          <div v-if="mensaje" class="mb-4 text-green-500">
            {{ mensaje }}
          </div>

          <div class="flex items-center justify-center">
            <button @click="enviarInformacion" class="bg-blue-500 text-white p-2 rounded-full">Enviar Información</button>

          </div>
          
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
<style scoped>
  .custom-card {
  background-color: rgba(80, 80, 80, 0.027); 
  overflow: hidden;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
  border: 2px solid #02070c; 
  border-radius: 30px; 
  width: 100%;
  max-width: 320px; 
}button.rounded-full {
  border-radius: 999px; 
  background-color: #02070c;
}



</style>
