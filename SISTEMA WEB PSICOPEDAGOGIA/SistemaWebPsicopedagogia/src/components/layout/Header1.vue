<template>
    <header class="main-header">
      <!-- Logo -->
      <div class="logo">
        <router-link to="/">
          <img src="/images/logo-2.png" alt="Logo" />
        </router-link>
      </div>
  
      <!-- Navigation -->
      <nav class="main-navigation">
        <ul class="menu">
          <li>
            <router-link to="home">Home</router-link>
          </li>
          <li>
            <span @click="toggleDropdownPostgrado">Posgrado <i class="fas fa-chevron-down"></i></span>
            <ul v-show="isDropdownOpenPostgrado">
              <li><router-link to="CursosFormacionContinua">Cursos de Formacion Continua</router-link></li>
              <li><router-link to="Posgrado">Informacion Posgrado</router-link></li>
              <li><router-link to="DiplomadoEspecialidadMaestria">Diplomados Especialidades y Maestrias</router-link></li>
            </ul>
          </li>
          <li>
            <span @click="toggleDropdownProgramaIntegra">Programa Integral Psicopedagogia <i class="fas fa-chevron-down"></i></span>
            <ul v-show="isDropdownOpenProgramaIntegra">
              <li><router-link to="Graduados">Graduados</router-link></li>
            </ul>
          </li>
          <li>
            <router-link to="RedPsico">Red Psicopedagogia</router-link>
          </li>
          <li>
            <span @click="toggleDropdownFormacionAcademica">Formacion Academica PSP <i class="fas fa-chevron-down"></i></span>
            <ul v-show="isDropdownOpenFormacionAcademica">
              <li><router-link to="Docentes">Plan Docente</router-link></li>
              <li><router-link to="/">Interaccion Social <i class="fas fa-chevron-down"></i></router-link>
                <ul>
                  <li><router-link to="TrabajoObraSocial">Trabajo Obra Social de la Iglesia</router-link></li>
                  <li><router-link to="/">Centro Estudiantil</router-link></li>
                </ul>
              </li>
              <li><router-link to="/">Investigacion</router-link></li>
              <li><router-link to="/">Formacion Pregrado</router-link></li>
            </ul>
          </li>
          <li>
            <router-link to="/Login">Iniciar Sesión</router-link>
          </li>
        </ul>
      </nav>
    </header>
  </template>
  
  <script>
  export default {
    data() {
      return {
        isDropdownOpenPostgrado: false,
        isDropdownOpenProgramaIntegra: false,
        isDropdownOpenFormacionAcademica: false
      };
    },
    methods: {
      toggleDropdownPostgrado() {
        this.isDropdownOpenPostgrado = !this.isDropdownOpenPostgrado;
      },
      toggleDropdownProgramaIntegra() {
        this.isDropdownOpenProgramaIntegra = !this.isDropdownOpenProgramaIntegra;
      },
      toggleDropdownFormacionAcademica() {
        this.isDropdownOpenFormacionAcademica = !this.isDropdownOpenFormacionAcademica;
      }
    }
  };
  </script>
  
  <style scoped>
  /* Estilos para el encabezado */
  .main-header {
    display: flex;
    justify-content: space-between; /* Centra el contenido horizontalmente */
    align-items: center;
    padding: 50px 40px; /* Añade relleno en la parte superior e inferior */
    background: linear-gradient(#f49e52, #fb7c0a); /* Color de fondo del encabezado */
    color: #ffffff; /* Color del texto */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Sombra */
  }
  
  .logo img {
    height: 50px; /* Altura del logo */
  }
  
  .main-navigation {
    font-size: 18px; /* Tamaño del texto del menú */
  }
  
  .menu {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }
  
  .menu li {
    display: inline-block;
    margin-right: 20px;
  }
  
  .menu li ul {
    display: none;
    position: absolute;
    background-color: #063971; /* Color de fondo del menú desplegable */
    padding: 10px;
    border-radius: 5px;
  }
  
  .menu li:hover ul {
    display: block;
  }
  
  .menu li ul li {
    display: block;
    margin: 5px 0;
  }
  
  .menu li ul li a {
    color: #ffffff; /* Color de texto del menú desplegable */
    text-decoration: none;
  }
  
  .menu li ul li a:hover {
    color: #fdd000; /* Color del enlace al pasar el ratón */
  }
  </style>
  