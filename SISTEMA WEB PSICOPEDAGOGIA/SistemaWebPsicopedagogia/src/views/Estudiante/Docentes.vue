<template >
 


   <section class="team-details">
       <div class="container pb-0 pt-50">
           <div class="team-details__top pb-0">
               <div class="row">
                   <div class="col-xl-4 col-lg-6">
                       <div class="team-details__top-left">
                           <div class="team-details__top-img"> <img src="/images/DOC2.png" alt="">
                               <div class="team-details__big-text"></div>
                           </div>
                       </div>
                   </div>
                   <div class="col-xl-6 col-lg-6">
                       <div class="team-details__top-right">
                           <div class="team-details__top-content">
                               <h3 class="team-details__top-name">Info director de carrera</h3>
                               <p class="team-details__top-text-1"></p>
                               <p class="team-details__top-text-3">---------</p>
                           </div>
                           <ul class="list-style-two">
                       <li><i class=""></i> @ucb.edu.bo</li>
                     
                   </ul>
                       </div>
                   </div>
                   
               </div>
           </div>
       
       </div>
   </section>


  


 <section class="event-section ">
       <div class="anim-icons">
           <span class=""></span>
       </div>
       <div class="auto-container">
           <div class="sec-title-outer">
               <div class="row">
                   <div class="col-lg-7">
                       <div class="sec-title">
                           <span class="sub-title">
                           </span>
                           <h2>Docentes <br> Info de docentes</h2>
                       </div>
                   </div>
               </div>
           </div>

           <div class="ContieneTarjetas">
            <!--Docentes-->
               <!-- Event Block 1-->
               <div class="event-block col-lg-1 " >
                   <div class="inner-box1">
                       <div class="content-box1">
                           <div class=" col-lg-6">
                               <figure class=" "><img class="imagenDocente" src="/images/DOC2.png" alt=""></figure>
                           </div>
                           <div class="col-lg-">
                           <h5 class="title " >
                               <h4>Nombre de/la docente</h4>
                           </h5>
                           <span>Info de/la docente</span>
                           <ul class="list-style-two">
                       <li><i class=""></i> @ucb.edu.bo</li>
                     
                   </ul>
               </div>
                       </div>
                   </div>
               </div>
               <!-- Event Block 2-->
               <div class="event-block col-lg-4">
                   <div class="inner-box1">
                       <div class="content-box1">
                           <div class=" col-lg-6">
                               <figure class=""><img class="imagenDocente" src="/images/DOC2.png" alt=""></figure>
                           </div>
                           <div class="col-lg-">
                           <h5 class="title " >
                               <h4>Nombre</h4>
                           </h5>
                           <span>Info</span>
                           <ul class="list-style-two">
                       <li><i class=""></i> @ucb.edu.bo</li>
                     
                   </ul>
               </div>
                       </div>
                   </div>
               </div>
<!-- Event Block 3-->
<div class="event-block col-lg-1 " >
                   <div class="inner-box1">
                       <div class="content-box1">
                           <div class=" col-lg-6">
                               <figure class=" "><img class="imagenDocente" src="/images/DOC2.png" alt=""></figure>
                           </div>
                           <div class="col-lg-">
                           <h5 class="title " >
                               <h4>Nombre</h4>
                           </h5>
                           <span>Info</span>
                           <ul class="list-style-two">
                       <li><i class="icon fa fa-envelope"></i>@ucb.edu.bo</li>
                     
                   </ul>
               </div>
                       </div>
                   </div>
               </div>



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
 .recorteImagen{
   position: relative;
           width: 300px; /* Ancho deseado */
           height: auto; /* Alto deseado */
      
  
       }

       .recorteImagen img {
           width: 100%;
           height: 100%;
           object-fit: cover;
           clip-path: polygon(25% 0%, 75% 0%, 100% 25%, 100% 75%, 75% 100%, 25% 100%, 0% 75%, 0% 25%);

       }

.fondo{
   background-color: rgb(222, 255, 255);
}

.imagenDocente{
   width: 20rem;
   display: inline-block;
   border-radius: 50%;
}
.imagenDocente2{
  margin-top: 0rem;
   
}
.image-box .imagenDocente{
       width: 20rem;
       
   }

   .textoDocente{
       margin-left: 2rem;
   }
.event-block{
   background-color: #063971;
 
   padding: 2rem;
   width: 25rem;
}

.ContieneTarjetas  {
      
   display: grid;
   grid-template-columns: repeat(auto-fit, minmax(200px, 3fr)); /* Define el número de columnas y su tamaño */
   gap: 10rem; /* Espacio entre las columnas */
}
/*** query */

@media screen and (max-width: 1000px) {
   
   .team-details__top-img{
       width: 70%;
   }
   .image-box .imagenDocente{
       width: 10rem;
   }
}

@media screen and (max-width: 1300px) {
   
  

}

@media screen and (max-width:950px) {
   
  .event-block{
  
   margin-right: 6rem;
   margin-left: 6rem;
  
}


}


@media screen and (max-width: 700px) {
   
   .ContieneTarjetas  {
      
      display: ruby;
  
  }
}

 </style>