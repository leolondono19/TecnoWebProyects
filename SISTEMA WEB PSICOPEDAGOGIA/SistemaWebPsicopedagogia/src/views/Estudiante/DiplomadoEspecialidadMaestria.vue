<template>
    <div class="container-posgrado">
      <h1 class="titulo">Programas de Posgrado</h1>
      <div class="programas">
        <div v-for="programa in programas" :key="programa.id" class="programa">
          <img :src="programa.imagen" :alt="programa.nombre" class="imagen-programa">
          <div class="informacion">
            <h2>{{ programa.nombre }}</h2>
            <!-- Agregar clase de color al párrafo -->
            <p :class="{ 'texto-descripcion': true }">{{ programa.descripcion }}</p>
            <a :href="programa.enlace" class="enlace">Más información</a>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
export default {
  data() {
    return {
      programas: [
        {
          id: 1,
          nombre: "Diplomado en Educación Psicopedagógica para Niveles Inicial, Primario y Secundario",
          descripcion: "El diplomado en Educación Psicopedagógica es un programa de posgrado que tiene como objetivo formar profesionales en el campo de la educación con una visión integral de la psicopedagogía, es decir, con una comprensión profunda de los procesos de aprendizaje y desarrollo de los estudiantes.",
          imagen: "https://www.posgrado.unam.mx/media/k2/items/cache/99d9da8b6e99d3a706d831b138f5f3f8_XL.jpg",
          enlace: "https://www.posgrado.unam.mx/programas-de-posgrado/doctorado-en-ingenieria"
        },
        {
          id: 2,
          nombre: "Maestría en Psicopegagogía",
          descripcion: "Conoce y domina las estrategias de psicopedagogía para generar un proceso de enseñanza-aprendizaje integral con base en disciplinas relacionadas a la psicología y pedagogía. Solicita ahora tu admisión.",
          imagen: "https://www.posgrado.unam.mx/media/k2/items/cache/eb3c9e29d7d883b0dc07a5b79d02e81f_XL.jpg",
          enlace: "https://www.posgrado.unam.mx/programas-de-posgrado/maestria-en-ciencias-de-la-computacion"
        },
        {
          id: 3,
          nombre: "Doctorado en Psicopedagogía",
          descripcion: "El Doctorado en Ingeniería es un programa de posgrado ofrecido por la Universidad Nacional Autónoma de México (UNAM).",
          imagen: "https://www.posgrado.unam.mx/media/k2/items/cache/99d9da8b6e99d3a706d831b138f5f3f8_XL.jpg",
          enlace: "https://www.posgrado.unam.mx/programas-de-posgrado/doctorado-en-ingenieria"
        },
        // Agrega más programas aquí si es necesario
      ]
    };
  }
};
</script>

<style scoped>
.container-posgrado {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
}

.titulo {
  text-align: center;
  margin-bottom: 30px;
}

.programas {
  display: flex;
  flex-wrap: wrap;
  gap: 20px;
}

.programa {
  background-color: #f4f4f4;
  padding: 20px;
  border-radius: 5px;
  flex-basis: calc(33.33% - 20px);
}

.imagen-programa {
  width: 100%;
  border-radius: 5px;
  margin-bottom: 10px;
}

.informacion h2 {
  font-size: 20px;
  margin-bottom: 10px;
}

/* Clase para el texto de descripción */
.texto-descripcion {
  color: #1a2d55;
}

.enlace {
  display: block;
  text-align: right;
}
</style>
