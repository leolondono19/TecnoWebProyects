<template>
  <div>
    <!-- Usar la interpolación de Vue para mostrar el mensaje -->
    {{ mensaje }}
  </div>
</template>

<script>
export default {
  data() {
    return {
      mensaje: 'Hola Mundo con Vue.js desde App.vue'
    };
  }
};
</script>

<style>
/* Estilos opcionales */
div {
  font-size: 2em;
  text-align: center;
  margin-top: 20px;
}
</style>
