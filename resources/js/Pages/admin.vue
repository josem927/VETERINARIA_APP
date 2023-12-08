<template >
    <div>
      <div v-if="isAdmin">
        <div class="table-container">
          <div class="scrollable-table">
            <table>
              <thead>
                <tr>
                  <th>Nombre de la Mascota</th>
                  <th>Tipo de Servicio</th>
                  <th>Fecha de Cita</th>
                  <th>Hora de Cita</th>
                  <th>Malestar</th>
                  <th>Número de Teléfono</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(cita, index) in citas" :key="index" :class="{ 'even-row': index % 2 === 0 }">
                  <td>{{ cita.nombreMascota }}</td>
                  <td>{{ cita.tipoServicio }}</td>
                  <td>{{ cita.fechaCita }}</td>
                  <td>{{ cita.horaCita }}</td>
                  <td :class="getMalestarClass(cita.malestar)">{{ cita.malestar }}</td>
                  <td>{{ cita.numeroTelefono }}</td>
                  <td>
                    <button class="edit  bg-blue" @click="editarCita(index)">Editar</button>
                    <button class="delete" @click="eliminarCita(index)">Eliminar</button>
                  </td>
                </tr>
              </tbody>
            </table>
            <button class="custom-button primary" href="/login" @click="agregarCita">Agregar Cita</button>
          </div>
        </div>
      </div>
      <div v-else class="card-container">
        <div class="login-card">
          <p>Por favor, inicia sesión como administrador.</p>
          <label for="adminPassword">Contraseña del Admin:</label>
          <input type="password" v-model="adminPassword" id="adminPassword" class="password-input">
          <button class="custom-button primary"  @click="loginAsAdmin">Iniciar sesión</button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        adminPassword: '',
        isAdmin: false,
      };
    },
    props: {
      citas: Array,
    },
    methods: {
      loginAsAdmin() {
        if (this.adminPassword === '12345678') {
          console.log('Inicio de sesión exitoso como administrador');
          this.isAdmin = true;
        } else {
          console.log('Inicio de sesión fallido como administrador');
        }
      },
      agregarCita() {
        if (this.isAdmin) {
          console.log('Agregar nueva cita como administrador');
        } else {
          console.log('Acceso denegado. Inicia sesión como administrador.');
        }
      },
      editarCita(index) {
        console.log('Editar cita en índice:', index);
      },
      eliminarCita(index) {
        console.log('Eliminar cita en índice:', index);
      },
      getMalestarClass(malestar) {
        if (malestar === 'Alto') {
          return 'malestar-alto';
        } else if (malestar === 'Medio') {
          return 'malestar-medio';
        } else {
          return 'malestar-bajo';
        }
      },
    },
  };
  </script>
  
  <style scoped>
  .scrollable-table {
    max-height: 500px;
    overflow-y: auto;
    background-color: #e0f7e0; 
  }

  .table-container {
    max-width: 900px;
    margin: 50px auto 0;
  }
  
  .scrollable-table {
    max-height: 500px; 
    overflow-y: auto;
  }
  
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  tr.even-row {
    background-color: #f9f9f9;
  }
  
  .malestar-alto {
    background-color: #ff9999;
  }
  
  .malestar-medio {
    background-color: #ffee99;
  }
  
  .malestar-bajo {
    background-color: #99ff99;
  }
  
  .card-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }
  
  .login-card {
    text-align: center;
    padding: 20px;
    margin: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  label {
    display: block;
    margin-bottom: 10px;
  }
  
  input {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
  }
  
  
  
  .custom-button {
    padding: 10px;
    cursor: pointer;
  }
  
  .custom-button.primary {
    background-color: #4CAF50;
    color: white;
  }
  
  .custom-button.edit {
    background-color: #3498db;
    color: white;
  }
  
  .custom-button.delete {
    background-color: #e74c3c;
    color: white;
  }
  </style>
  