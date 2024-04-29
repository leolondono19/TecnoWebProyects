<template >

  
    <section class="signup-section" >
        <div class="auto-container">
            <div class="anim-icons">
                <span class=""></span>
            </div>
            <div class="outer-box" style="background-image: url(./images/main-slider/bg-pattern-2.jpg); margin: 10rem">
                <span class=""></span>
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="sec-title light">
                            <h2>Inicia Sesion<br> Ingresa con tu correo<br> </h2>
                            <div class="text">  </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!-- Sign Form -->
                            <div class="signup-form wow fadeInLeft">
                                <!--Contact Form-->
                                <form method="post" action="get" id="contact-form" @submit.prevent="loginUser">
                                    <div class="form-group">
                                        <input type="text" name="text" v-model="EmailIngresado"   placeholder="Correo" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="password" v-model="PasswordIngresado" name="pswd" placeholder="Contraseña" required="" :readonly="loginBlocked">
                                        <div  v-if="loginBlocked" class="login-blocked-message">
                  <p>Su cuenta ha sido bloqueada temporalmente.</p>
                  <p>Intente de nuevo después de {{ remainingTime }} segundos.</p>
                  </div>
                                      </div>
                                   
 <!--
                                    <div class="form-group">
                                        <select class="custom-select">
                                            <option value="">Select course</option>
                                            <option value="UI/UX Designing">UI/UX Designing</option>
                                            <option value="Digital Marketing">Digital Marketing</option>
                                        </select>
                                    </div>
-->
                                    <div class="form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form" >Iniciar Sesion</button>
                                    </div>
                                </form>
                            </div>
                            <!--End Contact Form -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</template>

<script>


</script>
<script>
import axios from 'axios';
import { useLoginStore } from '@/stores/loginStore.js';

export default {
  name: 'PaginaLogin',
  data() {
      return {
          needReload:false,
          usuarioAutenticado: false,
          email: '',
          password: '',
          EmailIngresado: '',
          PasswordIngresado: '',
          errorMessage: '',
          successMessage: '',
          loginAttempts: 0,
            loginBlocked: false,
            remainingTime: 30,
      }
  },
  methods: {
      async reloadFunction(){
      const response = await this.storeTareas.getTareasEstado();
      console.log('Todas las tareas:', response);

     
    },
      async registerUser2() {
  if (this.email == '' || this.password == '') {
      alert("Ingrese todos los campos");
      return;
  }

  console.log('tarea a meter: ', this.nuevoObjetoTarea);
  console.log(this.nuevaTarea);
  try {
      const response = await this.storeTareas.loginUser({
          usuario: this.email,
          contrasenia: this.password
      });

      // Redirige a la página deseada
      this.$router.push("/PaginaTareas");
      this.email == ''
      this.email == ''
      // Recargar la página después de 2 segundos
      setTimeout(() => {
          location.reload();
      }, 2000);
  } catch (error) {
      console.error("Error al guardar:", error);
  }
},
      async registerUser() {
          try {
              const response = await axios.post('https://backend-control-tareas-jhessika.serverbb.online/api/v1/usuarios/registro', {
                  usuario: this.email,
                  contrasenia: this.password
              });
              this.successMessage = 'Usuario registrado exitosamente.';
              this.$router.push('/PaginaTareas'); // Cambia '/dashboard' por la ruta deseada
              this.authToken = null;
          this.id = null;
          this.nombre = null;
          try{
              const response = await this.storeTareas.loginUser({
          usuario: this.email,
          contrasenia: this.password
              });
          } catch (error) {
                      this.errorMessage = 'Error al registrar usuario: ' + error.message;
                  }
         
              // Recargar la página después de 2 segundos
              setTimeout(() => {
                  location.reload();
                  this.usuarioAutenticado = !!Cookies.get('authToken');
              }, 2000);
          } catch (error) {
              this.errorMessage = 'Error al registrar usuario: ' + error.message;
          }
      },
      async loginUser() {
  const credentials = {
    usuario: this.EmailIngresado,
    clave: this.PasswordIngresado
  };

  const store = useLoginStore();
  const response = await store.loginUser(credentials);

  if (response.code == '200') {
    this.$router.push("/PaginaTareas");
    this.PasswordIngresado='';
    this.EmailIngresadoo='';
    // Recargar la página después de 2 segundos
    setTimeout(() => {
      location.reload();
    }, 500);
  } else {
    this.loginAttempts++;
    this.PasswordIngresado='';
    if (this.loginAttempts >= 3) {
      this.loginBlocked = true;
      setTimeout(() => {
        this.loginAttempts = 0;
        this.loginBlocked = false;
      }, 30000); // 30 segundos
    }

    // Mostrar el tiempo restante antes de poder intentar iniciar sesión nuevamente
    if (this.loginBlocked) {
      this.remainingTime =30; // Inicialmente establecido en 30 segundos

      // Actualizar el contador cada segundo
      const intervalId = setInterval(() => {
        if (this.remainingTime > 0) {
          this.remainingTime--; // Disminuir el tiempo restante en 1 segundo
        } else {
          this.PasswordIngresado='';
          this.loginBlocked = false;
          clearInterval(intervalId); // Detener el contador cuando el tiempo restante llega a cero
        }
      }, 1000);
    }
    

    alert("Usuario o contraseña incorrectos");
  }
}

}, async mounted() {
  // Obtenemos todas las tareas
  setInterval(() => {
      if (this.storeTareas.needReload) {
        this.reloadFunction();
      }
    }, 1000);}
}
</script>

<style scoped>
.login-blocked-message {
  color: azure !important;
}
</style>