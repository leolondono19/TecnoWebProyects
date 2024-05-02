<template>
    <div>
      <!-- Sección Quiénes Somos -->
      <section class="quienes-somos-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="quienes-somos-text box">
                <h2>¿Quiénes Somos?</h2>
                <p>Una familia de profesionales y estudiantes que, desde la psicopedagogía, contribuyen a la transformación social a través de la educación y propuestas críticas, estratégicas y científicas, con un enfoque de enseñanza – aprendizaje en diferentes niveles, ámbitos, sistemas, instituciones, organismos gubernamentales y no gubernamentales, para la construcción de una sociedad digna, justa, equitativa en Bolivia y el mundo.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="quienes-somos-image">
                <img src="/images/logo1.png" alt="Quiénes Somos">
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Sección Misión y Visión -->
      <section class="mision-vision-section">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <div class="mision-text box">
                <h3>Misión</h3>
                <p>Nuestra misión es...</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="vision-text box">
                <h3>Visión</h3>
                <p>Nuestra visión es...</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Sección Perfil del Estudiante -->
      <section class="perfil-estudiante-section">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="perfil-estudiante-text box">
                <h2>Perfil del Estudiante</h2>
                <p>A lo largo de los años de trayectoria de la carrera se va evidenciando y ratificando continuamente que nuestros estudiantes presentan una amplia vocación de servicio, comprometidos fehacientemente con la idea de brindar desde su profesión la oportunidad de mejorar la calidad de vida de las personas y garantizar el uso de la educación como herramienta de transformación social.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="perfil-estudiante-image">
                <img src="/images/logo1.png" alt="Perfil del Estudiante">
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    // Agrega lógica si es necesario
  }
  </script>
  
  <style scoped>
  /* Estilos CSS para el diseño */
  .quienes-somos-section {
    padding: 80px 0;
  }
  
  .quienes-somos-text h2 {
    font-size: 36px;
    color: #333;
  }
  
  .quienes-somos-text p {
    font-size: 18px;
    color: #666;
  }
  
  .quienes-somos-image img {
    max-width: 100%;
    height: auto;
  }
  
  .mision-vision-section {
    padding: 80px 0;
  }
  
  .mision-text h3,
  .vision-text h3 {
    font-size: 24px;
    color: #333;
  }
  
  .perfil-estudiante-section {
    padding: 80px 0;
  }
  
  .perfil-estudiante-text h2 {
    font-size: 36px;
    color: #333;
  }
  
  .perfil-estudiante-text p {
    font-size: 18px;
    color: #666;
  }
  
  .perfil-estudiante-image img {
    max-width: 100%;
    height: auto;
  }
  
  .box {
    background-color: rgba(0, 0, 0, 0.5); /* Fondo más oscuro */
    padding: 20px;
    border-radius: 15px; /* Bordes redondeados */
    margin-bottom: 30px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); /* Sombra */
  }
  
  .box h2,
  .box h3 {
    margin-bottom: 15px;
  }
  </style>
  