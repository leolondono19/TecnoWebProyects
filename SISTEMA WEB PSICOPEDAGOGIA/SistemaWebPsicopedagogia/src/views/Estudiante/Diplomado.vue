<template>
    <div class="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="hero-content text-center">
              <h2>Diplomado en Educación Psicopedagógica para Niveles Inicial, Primario y Secundario</h2>
              <p style="margin-bottom: 20px;">El diplomado en Educación Psicopedagógica es un programa de posgrado que tiene como objetivo formar profesionales en el campo de la educación con una visión integral de la psicopedagogía, es decir, con una comprensión profunda de los procesos de aprendizaje y desarrollo de los estudiantes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="about-section spad" style="background-color: var(--bs-light);">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="about-text">
          <div class="section-title">
            <span style="color: var(--bs-secondary);">Acerca del Diplomado</span>
            <h2 style="color: var(--bs-secondary);">Objetivo General</h2>
          </div>
          <p style="color: var(--bs-dark);">Formar profesionales en el campo de la educación con una visión integral de la psicopedagogía, es decir, con una comprensión profunda de los procesos de aprendizaje y desarrollo de los estudiantes, a fin de que puedan desempeñarse eficazmente en el diseño, implementación y evaluación de programas educativos que respondan a las necesidades individuales y colectivas de los estudiantes en los niveles inicial, primario y secundario.</p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="about-pic">
          <img src="#" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

  
    <div class="feature-section spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <span style="color: var(--bs-gray);">Características del Diplomado</span>
              <h2 style="color: var(--bs-secondary);">¿Por qué elegir nuestro Diplomado en Educación Psicopedagógica?</h2>
            </div>
          </div>
        </div>
        <div class="row feature-row">
          <div class="col-lg-4 col-md-4 feature-item">
            <div class="feature-inner">
              <i class="flaticon-022-teacher" style="color: var(--bs-primary);"></i>
              <h4 style="color: var(--bs-secondary);">Docentes calificados</h4>
              <p>Nuestros docentes son profesionales calificados con amplia experiencia en el campo de la educación y la psicopedagogía.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 feature-item">
            <div class="feature-inner">
              <i class="flaticon-003-blackboard" style="color: var(--bs-primary);"></i>
              <h4 style="color: var(--bs-secondary);">Metodología activa</h4>
              <p>Utilizamos una metodología activa que promueve el aprendizaje colaborativo y el desarrollo de habilidades prácticas.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 feature-item">
            <div class="feature-inner">
              <i class="flaticon-025-diploma" style="color: var(--bs-primary);"></i>
              <h4 style="color: var(--bs-secondary);">Reconocimiento oficial</h4>
              <p>Nuestro programa de posgrado cuenta con el reconocimiento oficial de la Universidad Mayor de San Simón.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'DiplomadoEnEducacionPsicopedagogica'
  }
  </script>
  
  <style scoped>
  .hero-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: var(--bs-white);
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
  }
  
  .hero-content {
    max-width: 800px;
  }
  
  .about-section {
    padding: 80px 0;
  }
  
  .about-text {
    max-width: 600px;
  }
  
  .feature-section {
    padding: 80px 0;
  }
  
  .feature-row {
    margin-top: 50px;
  }
  
  .feature-inner {
    text-align: center;
    padding: 30px;
    border: 1px solid var(--bs-gray);
    border-radius: 5px;
    transition: transform 0.3s ease-in-out;
  }
  
  .feature-inner:hover {
    transform: translateY(-5px);
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
  }
  
  .feature-inner i {
    font-size: 48px;
    margin-bottom: 20px;
  }
  
  .feature-inner h4 {
    font-size: 24px;
    margin-bottom: 10px;
  }
  
  .feature-inner p {
    font-size: 18px;
    line-height: 1.5;
  }
  </style>
  