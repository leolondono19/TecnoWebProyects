<template>
    <section class="postgrado-info">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <!-- Aquí colocamos el formulario -->
            <h2>Solicita información</h2>
            <p>Completa el formulario para recibir más información sobre nuestros programas de postgrado.</p>
            <form @submit.prevent="submitForm">
                <div class="form-group">
              <label for="nombre">Nombre</label>
              <input type="text" id="nombre" v-model="nombre" class="form-control" placeholder="Nombre" required>
            </div>
            <div class="form-group">
              <label for="correo">Correo Electrónico</label>
              <input type="email" id="correo" v-model="correo" class="form-control" placeholder="Correo Electrónico" required>
            </div>
            <div class="form-group">
              <label for="telefono">Teléfono</label>
              <input type="tel" id="telefono" v-model="telefono" class="form-control" placeholder="Teléfono" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
            </form>
          </div>
          <div class="col-lg-6">
            <!-- Cuadros de información -->
            <div class="info-box">
              <h3>Inicio de clases</h3>
              <p>Febrero 2025</p>
            </div>
            <div class="info-box">
              <h3>Duración</h3>
              <p>2 años</p>
            </div>
            <div class="info-box">
              <h3>Modalidad</h3>
              <p>Presencial</p>
            </div>
            <div class="info-box">
              <h3>Ubicación</h3>
              <p>La Paz, Bolivia</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    name: 'PostgradoInfo',
    methods: {
      submitForm() {
        // Aquí puedes agregar la lógica para enviar el formulario
        console.log('Formulario enviado');
      }
    }
  }
  </script>
  
  <style scoped>
  .postgrado-info {
    padding: 50px 0;
  }
  
  .postgrado-info h2 {
    margin-bottom: 20px;
  }
  
  .postgrado-info p {
    margin-bottom: 30px;
  }
  
  .info-box {
    background-color: #f4f4f4;
    padding: 20px;
    margin-bottom: 20px;
    border-radius: 5px;
  }
  
  .info-box h3 {
    margin-bottom: 10px;
  }
  
  .info-box p {
    margin: 0;
  }
  </style>
  