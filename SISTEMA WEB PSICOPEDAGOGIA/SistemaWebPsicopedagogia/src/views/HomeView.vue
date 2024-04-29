<template >
<section class="banner-section-two main-slider">
    <swiper 
        :slides-per-view="1" 
        :space-between="30" 
        :loop="false" 
        :autoplay="{ delay: 8000, disableOnInteraction: true }" 
        :pagination="{ el: '.swiper-pagination', clickable: true }" 
        :navigation="{ nextEl: '.h1n', prevEl: '.h1p' }" 
        :modules="modules" 
        class="banner-carousel owl-carousel owl-theme">

        <!-- Slide Item 1 -->
        <swiper-slide class="slide-item">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="content-column col-lg-6 col-md-12">
                        <div class="content-box">
                            <h1 class="banner-one__title banner-one__light-color">Bienvenido a la carrera de Psicopedagogía<span class="style-font"></span></h1>
                            <div class="text">
                                La carrera de Psicopedagogía, una de las carreras más jóvenes en nuestra universidad, proyecta sus profesionales a convertirse en agentes de cambio que, a través de la educación y de mejorar sus condiciones en cuanto a calidad, equidad, pertinencia y eficacia, puedan transformar nuestra sociedad desde las áreas educativa, social, clínica y laboral.
                            </div>
                            <router-link to="/page-courses" class="theme-btn btn-style-one">
                                <span class="btn-title">Más información</span>
                            </router-link>
                        </div>
                    </div>
                    <div class="image-column col-lg-6 col-md-12">
                        <div class="image">
                            <figure class="">
                                <img src="/images/main-slider/image-2.jpg" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>

        <!-- Slide Item 2 -->
        <swiper-slide class="slide-item">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="content-column col-lg-6 col-md-12">
                        <div class="content-box">
                            <h1 class="banner-one__title banner-one__light-color">¿Que es Psicopedagogia?</h1>
                            <div class="text">
                            La Psicopedagogía es una disciplina que estudia los procesos de aprendizaje y enseñanza desde una perspectiva psicológica y pedagógica. Surgió a mediados del siglo XX como respuesta a la necesidad de comprender y abordar las dificultades de aprendizaje y adaptación escolar. Desarrollar actividades de enseñanza-aprendizaje, con profesionales altamente capacitados en las diferentes áreas del conocimiento psicopedagógico y en los métodos actuales de la educación superior.<br>
                            Desarrollar actividades de investigación, basándose en los avances de la Psicopedagogía y ciencias afines, para resolver problemáticas del ámbito educativo y social.
                            </div>

                            <router-link to="/page-courses" class="theme-btn btn-style-one">
                                <span class="btn-title">Conoce más de la carrera</span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </swiper-slide>

    </swiper>
    <ul class="banner-social-links">
        <li>
            <router-link to="#"></router-link>
        </li>
        <li>
            <router-link to="#"></router-link>
        </li>
    </ul>
</section>




<div>

 
</div>
<section class="about-section-two">
 
        <div class="anim-icons" style="overflow: hidden;">
          

        </div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>Quienes somos?</h2>
                            <div class="text">Una familia de profesionales y estudiantes que, desde la psicopedagogía, contribuyen a la transformación social a través de la educación y propuestas críticas, estratégicas y científicas, con un enfoque de enseñanza – aprendizaje en diferentes niveles, ámbitos, sistemas, instituciones, organismos gubernamentales y no gubernamentales, para la construcción de una sociedad digna, justa, equitativa en Bolivia y el mundo.</div>
                        </div>

                     
                        
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-6">
                    <div class="inner-column wow fadeInLeft">
                        <div class="icons-box">
                            <span class="icon icon-dotted-map"></span>
                            <span class="icon icon-dotted-line"></span>
                            <span class="icon icon-papper-plan"></span>
                        </div>
                        <figure class=""><img src="/images/resource/about-3.jpg" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            
        </div>
        
    </section>


<!--   ---------------------------------------------------------------------------------- --> 


<section class="about-section">
        <div class="anim-icons">
            <span class="icon icon-dotted-map"></span>
        </div>
        <div class="auto-container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 order-2 wow fadeInRight" data-wow-delay="600ms">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="sub-title">Conoce mas</span>
                            <h2>Perfil de estudiantes</h2>
                            <div class="text">A lo largo de los años de trayectoria de la carrera se va evidenciando y
ratificando continuamente que nuestros estudiantes presentan una amplia
vocación de servicio, comprometidos fehacientemente con la idea de
brindar desde su profesión la oportunidad de mejorar la calidad de vida de
las personas y garantizar el uso de la educación como herramienta de
transformación social.</div>
                        </div>

                        <ul class="list-style-one two-column">
                            <li><i class=""></i> 1. Interés por el desarrollo humano</li>
                            <li><i class=""></i> 2. Empatía y capacidad de escucha</li>
                            <li><i class=""></i> 3. Adaptabilidad y flexibilidad</li>
                            <li><i class=""></i>4. Ética profesional y confidencialidad</li>
                        </ul>

                        <div class="btn-box">
                            <router-link to="/page-about" class="theme-btn btn-style-one"><span class="btn-title">Conoce a nuestros graduados</span></router-link>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12">
    <div class="anim-icons">
    </div>
    <div class="inner-column wow fadeInLeft">
        <figure class="">
            <img src="/images/resource/about-1.png" alt="">
        </figure>

        
    </div>
</div>
            </div>
        </div>
    </section>



    


    <section class="courses-section" >
        
        <div class="auto-container" >
            <div class="anim-icons">
                <span class="icon icon-book wow zoomIn"></span>
            </div>

            <div class="sec-title">
                <span class="sub-title">Conoce mas</span>
                <h2>Areas Laborales</h2>
            </div>

            <div class="carousel-outer" >
                <!-- Courses Carousel -->
                <swiper :slides-per-view="0" :space-between="0" :loop="true" :autoplay="{
                    delay: 3000,
                    disableOnInteraction: true,
                }" :breakpoints="{
    320: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    575: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    767: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    991: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    1199: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
    1350: {
        slidesPerView: 1,
        // spaceBetween: 30,
    },
}" :pagination="{
    el: '.swiper-pagination',
    clickable: true,
}" :navigation="{
    nextEl: '.h1n',
    prevEl: '.h1p',
}" :modules="modules" class="courses-carousel">
                    <!-- Course Block -->
                

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
    <div class="inner-box">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-1">
                <div class="image-box">
                    <figure class="image">
                        <router-link to="/page-course-details">
                            <img src="/images/resource/course-s1.jpg" alt="">
                        </router-link>
                    </figure>
                   
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-box">
                   
                    <h5 class="title">
                        <router-link to="/page-course-details">Psicopedagogía
Educativa</router-link>
                    </h5>
                    <div class="">
                        <ul class="course-info">
                        <li><i class="fa fa-book"></i> Asesorar y diseñar sistemas, programas y estrategias de formación, en espacios
de educación formal y no formal para optimizar los procesos de aprendizaje y
enseñanza, de acuerdo con las necesidades y demandas de estos espacios.</li>
                         </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>
</swiper-slide>
<swiper-slide class="course-block">
    <div class="inner-box">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="image-box">
                    <figure class="image">
                        <router-link to="/page-course-details">
                            <img src="/images/resource/course-c.jpg" alt="">
                        </router-link>
                    </figure>
                   
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-box">
                   
                    <h5 class="title">
                        <router-link to="/page-course-details">Psicopedagogía
Clínica</router-link>
                    </h5>
                    <div class="">
                        <ul class="course-info">
                        <li><i class="fa fa-book"></i> Intervenir psicopedagógicamente las distintas dificultades de aprendizaje y
necesidades educativas especiales a través de procedimientos y protocolos en
evaluación psicopedagógica, elaboración de diagnósticos.</li>
                         </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>
</swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
    <div class="inner-box">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="image-box">
                    <figure class="image">
                        <router-link to="/page-course-details">
                            <img src="/images/resource/course-s.jpg" alt="">
                        </router-link>
                    </figure>
                   
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-box">
                   
                    <h5 class="title">
                        <router-link to="/page-course-details">Psicopedagogía
Social</router-link>
                    </h5>
                    <div class="">
                        <ul class="course-info">
                        <li><i class="fa fa-book"></i> Gestionar procesos de formación en diferentes grupos humanos y contextos,
con la finalidad de construir conocimientos significativos y relevantes de
acuerdo con necesidades y demandas personales, de sus espacios de
interacción y de la sociedad.</li>
                         </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>
</swiper-slide>

                    <!-- Course Block -->
                    <swiper-slide class="course-block">
    <div class="inner-box">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6">
                <div class="image-box">
                    <figure class="image">
                        <router-link to="/page-course-details">
                            <img src="/images/resource/course-l.jpg" alt="">
                        </router-link>
                    </figure>
                   
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="content-box">
                   
                    <h5 class="title">
                        <router-link to="/page-course-details">Psicopedagogía
Laboral</router-link>
                    </h5>
                    <div class="">
                        <ul class="course-info">
                        <li><i class="fa fa-book"></i> Gestionar el aprendizaje en contexto laboral con el propósito de consolidar una
visión estratégica de la gestión de las personas y sus talentos, articulando el
aprendizaje en el lugar del trabajo, el desempeño laboral y el desarrollo
personal.</li>
                         </ul>
                       </div>
                </div>
            </div>
        </div>
    </div>
</swiper-slide>

                 
                </swiper>
            </div>

          
        </div>

    </section>




</template>

<script>
import { Autoplay, Navigation, Pagination } from "swiper/modules"
import { Swiper, SwiperSlide } from "swiper/vue"
import ElementsCountdown from '@/components/elements/Countdown.vue'


export default {
  components: {
    Swiper,
    SwiperSlide,
    ElementsCountdown
  },
  setup() {
    return {
      modules: [Autoplay, Pagination, Navigation],
    }
  }
}


</script>
<style scoped>
.video-container {

margin-top: 10rem;
margin-bottom: 10rem;
  position: relative;
  padding-bottom: 84%; /* Proporción de aspecto 16:9 (divide la altura por la anchura y multiplica por 100) */
  overflow: hidden;
}

.video-container iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
 
}

.pulpo{
  width: 20vw; 
  filter: drop-shadow(1px 1px 10px rgba(0, 0, 0, 0.878));
}

.patron{
  position: absolute;
  width: 20vw; 
  filter: drop-shadow(1px 1px 10px rgba(0, 0, 0, 0.878));
}
.patron1{
  width: 10vw; 

  filter: drop-shadow(1px 1px 10px rgba(0, 0, 0, 0.878));
}

</style>
