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
          <div class="swiper-container quienes-somos-slider">
            <div class="swiper-wrapper">
              <swiper-slide class="slide-item">
                <img src="/images/foto1.jpg" alt="Slide 1">
              </swiper-slide>
              <swiper-slide class="slide-item">
                <img src="/images/foto2.jpg" alt="Slide 2">
              </swiper-slide>
              <swiper-slide class="slide-item">
                <img src="/images/foto3.jpg" alt="Slide 3">
              </swiper-slide>
            </div>
            <!-- Agrega las flechas de navegación si lo deseas -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
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
                <p>"Nuestra misión es formar profesionales en Psicopedagogía comprometidos con el desarrollo integral de las personas, capacitados para comprender y abordar los procesos de aprendizaje desde una perspectiva psicológica y pedagógica. Buscamos promover la inclusión, la equidad y la calidad educativa, contribuyendo así a la transformación social y al bienestar de la comunidad."</p>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="vision-text box">
                <h3>Visión</h3>
                <p>"Nos proyectamos como una carrera líder a nivel nacional e internacional en la formación de psicopedagogos altamente calificados, reconocidos por su excelencia académica, compromiso social y capacidad para promover el desarrollo humano y la innovación educativa. Aspiramos a ser referentes en la investigación y práctica psicopedagógica, impulsando el crecimiento y la mejora continua en el ámbito educativo y social."</p>
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
  // Importa Swiper
  import Swiper from 'swiper';
  
  export default {
    mounted() {
      // Inicializa Swiper
      var swiper = new Swiper('.quienes-somos-slider', {
        loop: true,
        autoplay: {
          delay: 5000, // Intervalo entre cada cambio de slide en milisegundos (en este caso, 5 segundos)
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
      });
    }
  }
  </script>
  
  <style scoped>
  /* Estilos CSS para el diseño */
  .quienes-somos-section {
    padding: 80px 0;
    background-image: url('/images/FondoC.jpg'); /* Ruta de la imagen de fondo */
    background-size: cover; /* Ajusta la imagen de fondo para cubrir toda la sección */
    background-position: center; /* Centra la imagen de fondo */
    color: #fff; /* Color de texto blanco para mayor contraste con el fondo */
  }
  
  .quienes-somos-text h2 {
    font-size: 36px;
    color: #fb7c0a;
  }
  
  .quienes-somos-text p {
    font-size: 18px;
    color: #fdd000;
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
    color: #fb7c0a;
  }
  
  .perfil-estudiante-section {
    padding: 80px 0;
  }
  
  .perfil-estudiante-text h2 {
    font-size: 36px;
    color: #fb7c0a;
  }
  
  .perfil-estudiante-text p {
    font-size: 18px;
    color: #fdd000;
  }
  
  .perfil-estudiante-image img {
    max-width: 100%;
    height: auto;
  }
  
  .box {
    background-color: rgba(6, 57, 113, 0.8); /* Fondo más oscuro */
    padding: 20px;
    border-radius: 15px; /* Bordes redondeados */
    margin-bottom: 30px;
    box-shadow: 0 0 15px #dfdfdf1a; /* Sombra */
  }
  
  .box h2,
  .box h3 {
    margin-bottom: 15px;
  }
  </style>
  