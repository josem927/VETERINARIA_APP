<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>
<template>
    <div>
      <Head title="Welcome" />
      <div class="bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <header class="bg-green-500 text-white py-4">
          <div class="container mx-auto flex justify-between items-center space-x-2">
            <img src="images/Logo.png" alt="LOCALVET" class="h-20 w-auto">
            
            <ul class="flex space-x-4 font-semibold text-lg text-gray-600  dark:text-gray-400  focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                
 
   <li>
    
   </li>
   <li><a href="/admin" class="hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">ADMIN</a></li>
              <li><a href="#appointment" class="hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Veterinarios</a></li>
     
              <li><a href="#AboutUs" class="hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Sobre Nosotros</a></li>
              <li><a href="#Contacto" class="hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Contacto</a></li>
              
              <li>
                
                <a v-if="$page.props.auth.user" :href="route('dashboard')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                <template v-else>
                  <a :href="route('login')" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Iniciar Sesion</a>
                  <a v-if="canRegister" :href="route('register')" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Registrarse</a>
                </template>
              </li>
            </ul>


          </div>
        </header>

        <section class="py-16 bg-white">
        <div class="container mx-auto text-center">
          <h1 class="text-4xl font-semibold">Bienvenido a LocalVet: Explora y Elige la Veterinaria Más Cercana para tus Mascotas
          </h1>
          <p class="text-lg">Cuidando de tus mascotas como si fueran de la familia.</p>
          <a href="/login" class="bg-green-500 text-white px-6 py-3 rounded-full mt-6 inline-block hover:bg-green-600 transition duration-300">Solicitar Cita</a>
        </div>
      </section>

    

<section class="py-16 bg-gray-100 flex justify-center items-center">
  <div class="container mx-auto">
    <h2 class="text-2xl font-semibold mb-6">Nuestros Servicios</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
        <img src="images/SERVICIO1.JPG" alt="CORTE DE PELO" class="h-40 w-40 mx-auto">
        <h3 class="text-xl font-semibold mt-4">CORTE DE PELO</h3>
        <p class="text-gray-600 text-justify">
          <strong class="text-black">Descripción del servicio:</strong>
          En nuestro ambiente tranquilo y amigable, nos esforzamos por crear una experiencia relajante para tu mascota. Utilizamos técnicas de corte seguras y efectivas, asegurándonos de que tu peludo amigo se sienta cómodo y feliz durante todo el proceso
        </p>
      </div>

      <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
        <img src="images/BAÑO.jpeg" alt="BAÑO" class="h-40 w-50 mx-auto rounded-full">
        <h3 class="text-xl font-semibold mt-4">BAÑOS</h3>
        <p class="text-gray-600 text-justify">
          <strong class="text-black">Descripción del servicio:</strong>
          Nuestro equipo de expertos se dedica a brindar un tratamiento de spa adaptado a las necesidades individuales de tu mascota. Utilizamos productos de alta calidad, formulados específicamente para mantener la piel y el pelaje saludables. Cada baño se realiza con cuidado y atención, asegurándonos de que tu mascota se sienta mimada y rejuvenecida.
        </p>
      </div>
     
      <div class="bg-white p-4 rounded-lg shadow flex flex-col items-center">
        <img src="images/VACUNA.JPEG" alt="VACUNAS" class="h-40 w-40 mx-auto rounded-full">
        <h3 class="text-xl font-semibold mt-4">VACUNAS</h3>
        <p class="text-gray-600 text-justify">
          <strong class="text-black">Descripción del servicio:</strong>
          Proteger a tu mascota nunca ha sido tan fácil. Confía en nuestro servicio de vacunación para proporcionar la inmunización necesaria y mantener a tu amigo peludo saludable y lleno de vitalidad. ¡Programa una cita hoy y invierte en el bienestar a largo plazo de tu querida mascota!
        </p>
      </div>
    </div>
  </div>
</section>

      

<section id="appointment" class="py-16 bg-gray-200">
  <div class="container mx-auto text-center">
    <h2 class="text-3xl font-semibold mb-8">VETERINARIOS ASOCIADOS</h2>

    <div class="mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Tarjeta 1 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="images/OLAN.JPEG" alt="Logo Veterinaria Olan" class="mx-auto mb-4 h-20" />
        <h3 class="text-lg font-semibold mb-2">Veterinaria Olan</h3>
        <p class="text-gray-500 mb-4">Dirección: Calle Rio Teapa #110 colonia la sierra</p>
        <p class="text-gray-500">Teléfono: 932-105-28-04</p>
      </div>

      <!-- Tarjeta 2 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="images/GUIVET.jpeg" alt="Logo Veterinaria Olan" class="mx-auto mb-4 h-20" />
        <h3 class="text-lg font-semibold mb-2">Veterinaria Guivet</h3>
        <p class="text-gray-500 mb-4">Dirección: Manuel Vuelta #206-B, Teapa,Tabasco</p>
        <p class="text-gray-500">Teléfono: 993-280-63-54</p>
      </div>

      <!-- Tarjeta 3 -->
      <div class="bg-white p-6 rounded-lg shadow-md">
        <img src="images/VENUS.JPG" alt="Logo Veterinaria Olan" class="mx-auto mb-4 h-20" />
        <h3 class="text-lg font-semibold mb-2">Veterinaria Venus</h3>
        <p class="text-gray-500 mb-4">Dirección: Tacotalpa</p>
        <p class="text-gray-500">Teléfono: (987) 654-3210</p>
      </div>

   

    </div>

 
  </div>
</section>



      

      <!-- Sección Sobre Nosotros -->
      
      <section id="AboutUs" class="py-16 bg-white">
  <div class="container mx-auto text-center">
    <h2 class="text-4xl font-bold text-indigo-800 mb-4">Sobre Nosotros</h2>
    <p class="text-lg text-gray-700 mb-8">
      ¡Hola! Somos un grupo apasionado de estudiantes que actualmente cursamos la carrera de Ingeniería Informática. Nuestra misión es explorar y aprender de manera activa en el emocionante mundo de la tecnología.
    </p>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
      <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 text-indigo-800">Nuestra Visión</h3>
        <p class="text-gray-600">
          Buscamos aplicar nuestros conocimientos en informática para resolver desafíos significativos y contribuir al avance tecnológico.
        </p>
      </div>
      <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 text-indigo-800">Áreas de Enfoque</h3>
        <p class="text-gray-600">
          Nos especializamos en diversas áreas, como desarrollo de Aplicaciones Web, Seguridad Informatica y Administración de bases de datos.
        </p>
      </div>
      <div class="mb-8">
        <h3 class="text-xl font-semibold mb-2 text-indigo-800">Compromiso Académico</h3>
        <p class="text-gray-600">
          Mantenemos un compromiso constante con la excelencia académica y estamos siempre en busca de oportunidades para aprender y crecer.
        </p>
      </div>
    </div>
  </div>
</section>


      
      <!-- Pie de Página -->
      <!-- Pie de Página -->
<footer id="Contacto" class="bg-gray-900 text-white py-10">
  <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <!-- Información de contacto -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-indigo-500">Contacto</h3>
      <p class="text-gray-400">Dirección: Carret. Teapa-Tacotalpa Km 4.5 Ej. Fco Javier Mina, Teapa, Mexico, 86801 </p>
      <p class="text-gray-400">Teléfono: 932-000-00-00</p>
      <p class="text-gray-400">Correo Electrónico: difusion@regionsierra.tecnm.mx</p>
    </div>

    <!-- Enlaces a redes sociales, política de privacidad, términos y condiciones, etc. -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-indigo-500">Enlaces</h3>
      <ul class="flex space-x-4">
        <li><a href="https://www.facebook.com/TecNMRSierra" class="text-gray-400 hover:text-white">Facebook</a></li>
        <li><a href="http://www.regionsierra.tecnm.mx/" class="text-gray-400 hover:text-white">Sitio Oficial</a></li>
        <li><a href="[Enlace a Política de Privacidad]" class="text-gray-400 hover:text-white">Política de Privacidad</a></li>
        <li><a href="[Enlace a Términos y Condiciones]" class="text-gray-400 hover:text-white">Términos y Condiciones</a></li>
      </ul>
    </div>

    <!-- Horario de atención -->
    <div class="mb-8">
      <h3 class="text-xl font-semibold mb-4 text-indigo-500">Horario de Atención</h3>
      <p class="text-gray-400">Lunes a Viernes: 9:00 am - 6:00 pm</p>
      <p class="text-gray-400">Sábado: 10:00 am - 2:00 pm</p>
      <p class="text-gray-400">Domingo: Cerrado</p>
    </div>

    <!-- Mapa de ubicación interactivo -->
    <div>
      <h3 class="text-xl font-semibold mb-4 text-indigo-500">Ubicación</h3>
      <div class="mb-4 aspect-w-1 aspect-h-1">
        <!-- Reemplaza las coordenadas con las reales para tu ubicación -->
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1646.693597231258!2d-92.91173068900828!3d17.54679147617257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7eb8640ee430f%3A0x7a1b4f6d9f888c4c!2sTu%20Ubicaci%C3%B3n!5e0!3m2!1ses-419!2smx!4v1640177500002!5m2!1ses-419!2smx"
          width="100%"
          height="100%"
          style="border:0;"
          allowfullscreen=""
          loading="lazy"
        ></iframe>
      </div>
    </div>
  </div>
</footer>

      



     
        <!-- Resto del código -->
  
      </div>
    </div>
  </template>
  