<template>
    <section class="cursos-section" :style="{ background: 'linear-gradient(to bottom, #ffcccc, #ffffff)' }">
      <div class="cursos-container">
        <!-- Título de la sección -->
        <h2 class="section-title">Cursos de Formación Continua</h2>
  
        <!-- Lista de cursos -->
        <div class="cursos">
          <div v-for="curso in cursos" :key="curso.id" class="curso">
            <div class="curso-info">
              <h3>{{ curso.nombre }}</h3>
              <p class="curso-description">{{ curso.descripcion }}</p>
              <p><strong>Duración:</strong> {{ curso.duracion }}</p>
            </div>
            <img :src="curso.imagen" alt="Imagen del curso" class="curso-image">
          </div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cursos: [
          { 
            id: 1, 
            nombre: 'Intervención Psicopedagógica', 
            descripcion: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam placerat orci nec viverra.',
            duracion: '8 semanas',
            imagen: '/images/DOC2.png' // Ruta de la imagen del curso
          },
          { 
            id: 2, 
            nombre: 'Neurociencias aplicadas a la Educación', 
            descripcion: 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
            duracion: '12 semanas',
            imagen: '/images/DOC2.png' // Ruta de la imagen del curso
          },
          { 
          id: 3, 
          nombre: 'Desarrollo del Lenguaje en la Infancia', 
          descripcion: 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.',
          duracion: '10 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        { 
          id: 4, 
          nombre: 'Evaluación y Diagnóstico Psicopedagógico', 
          descripcion: 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.',
          duracion: '6 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        { 
          id: 5, 
          nombre: 'Tecnología Educativa en el Aula', 
          descripcion: 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.',
          duracion: '8 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        { 
          id: 6, 
          nombre: 'Aprendizaje Basado en Proyectos', 
          descripcion: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.',
          duracion: '12 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        { 
          id: 7, 
          nombre: 'Inclusión Educativa', 
          descripcion: 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
          duracion: '10 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        { 
          id: 8, 
          nombre: 'Estrategias de Enseñanza Efectivas', 
          descripcion: 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos.',
          duracion: '8 semanas',
          imagen: '/images/DOC2.png' // Ruta de la imagen del curso
        },
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .cursos-section {
    min-height: 100vh;
  }
  
  .cursos-container {
    padding: 50px 0;
  }
  
  .section-title {
    color: #000000;
    text-align: center;
    margin-bottom: 30px;
  }
  
  .cursos {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .curso {
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    margin: 20px;
    padding: 20px;
    max-width: 300px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
  }
  
  .curso:hover {
    transform: translateY(-5px);
  }
  
  .curso-info {
    margin-bottom: 20px;
  }
  
  .curso h3 {
    color: #333;
    font-size: 20px;
    margin-bottom: 10px;
  }
  
  .curso-description {
    color: #666;
  }
  
  .curso-image {
    width: 100%;
    border-radius: 10px;
  }
  </style>