<template>
    <div>
      <section class="banner-section-two main-slider">
    <swiper :slides-per-view="1" :space-between="30" :loop="false" :autoplay="{
      delay: 8000,
      disableOnInteraction: true,
    }" :pagination="{
      el: '.swiper-pagination',
      clickable: true,
    }" :navigation="{
      nextEl: '.h1n',
      prevEl: '.h1p',
    }" :modules="modules" class="banner-carousel owl-carousel owl-theme">
    <!-- Slide Item -->
    <swiper-slide class="slide-item">
      <div class="bg-image" style="background-image: url(images/main-slider/1.jpg);"></div>
      <div class="auto-container">
        <div class="row align-items-center">
          <div class="content-column col-lg-7 col-md-10">
            <div class="content-box mt-md-30">
              <h1 class="banner-one__title banner-one__light-color">Bienvenido a <span class="style-font">  </span> <br />Psicopedagogia </h1>
              <div class="text">La Psicopedagogía, una disciplina emergente en nuestra universidad, impulsa a sus estudiantes a convertirse en catalizadores del cambio. A través de la educación y el mejoramiento de la calidad, equidad, pertinencia y eficacia, aspiramos a transformar nuestra sociedad en múltiples esferas: educativa, social, clínica y laboral. Nuestros profesionales están llamados a ser agentes de progreso, contribuyendo activamente a un mundo más justo y equitativo.</div>
              <!-- <router-link to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Mas informacion</span></router-link> -->
            </div>
          </div>

          <div class="image-column col-lg-5 col-md-12 text-center text-md-right">
            <div class="image">
              <figure class="image-1 overlay-anim m-0"><img src="/images/foto3.jpg" alt="Imagen de Objetivos de la Carrera"></figure>
            </div>
          </div>
        </div>
      </div>
    </swiper-slide>
  </swiper>
</section>


<section class="banner-section-two main-slider">
    <swiper :slides-per-view="1" :space-between="30" :loop="false" :autoplay="{
      delay: 8000,
      disableOnInteraction: true,
    }" :pagination="{
      el: '.swiper-pagination',
      clickable: true,
    }" :navigation="{
      nextEl: '.h1n',
      prevEl: '.h1p',
    }" :modules="modules" class="banner-carousel owl-carousel owl-theme">
    <!-- Slide Item -->
    <swiper-slide class="slide-item">
      <div class="bg-image" style="background-image: url(images/main-slider/2.jpg);"></div>
      <div class="auto-container">
        <div class="row align-items-center">
          <div class="content-column col-lg-7 col-md-12">
            <div class="content-box mt-md-30">
              <h1 class="banner-one__title banner-one__light-color">Objetivos de  <br />la Carrera</h1>
              <div class="text">Nuestro enfoque se centra en promover un aprendizaje dinámico y significativo, respaldado por expertos en diversas áreas del ámbito psicopedagógico y las últimas tendencias en educación superior. A través de la investigación innovadora en Psicopedagogía y disciplinas relacionadas, buscamos abordar los desafíos educativos y sociales actuales, ofreciendo soluciones creativas y efectivas para mejorar nuestra sociedad.</div>
              <!-- <router-link to="/page-courses" class="theme-btn btn-style-one"><span class="btn-title">Conoce mas de la carrera</span></router-link> -->
            </div>
          </div>

          <div class="video-column col-lg-5 col-md-12 text-center text-md-right">
    <img src="/images/image-1.png" alt="Imagen de Quienes Somos" style="margin-left: auto; width: 400px; height: 300px;">
</div>



        </div>
      </div>
    </swiper-slide>
  </swiper>
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
                <img src="/images/foto1.jpg" alt="Perfil del Estudiante">
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
  