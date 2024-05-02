<template>
    <section class="login-section">
      <div class="login-container">
        <div class="login-content">
          <h2>Iniciar Sesión</h2>
          <form @submit.prevent="loginUser">
            <div class="form-group">
              <label for="email">Correo Electrónico:</label>
              <input type="email" id="email" v-model="email" placeholder="Tu correo electrónico" required>
            </div>
            <div class="form-group">
              <label for="password">Contraseña:</label>
              <input type="password" id="password" v-model="password" placeholder="Tu contraseña" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
          </form>
          <div class="error-message" v-if="errorMessage">{{ errorMessage }}</div>
        </div>
      </div>
    </section>
  </template>
  
  <script>
  import { useLoginStore } from '@/stores/loginStore.js';
  
  export default {
    name: 'LoginPage',
    data() {
      return {
        email: '',
        password: '',
        errorMessage: ''
      };
    },
    methods: {
      async loginUser() {
        try {
          const response = await useLoginStore().loginUser({
            email: this.email,
            password: this.password
          });
          // Redirigir a la página de inicio después del inicio de sesión exitoso
          if (response.success) {
            this.$router.push('/home');
          } else {
            this.errorMessage = 'Credenciales de inicio de sesión inválidas. Por favor, inténtalo de nuevo.';
          }
        } catch (error) {
          console.error('Error al iniciar sesión:', error);
          this.errorMessage = 'Se produjo un error al intentar iniciar sesión. Por favor, inténtalo de nuevo más tarde.';
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .login-section {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: linear-gradient(45deg, #063971, #6bb940);
  }
  
  .login-container {
    background-color: rgba(255, 255, 255, 0.9); /* Fondo semi-transparente */
    padding: 30px;
    border-radius: 15px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
  }
  
  .login-content {
    text-align: center;
  }
  
  h2 {
    margin-bottom: 20px;
    color: #333;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  .form-group {
    margin-bottom: 15px;
  }
  
  label {
    font-weight: bold;
    margin-bottom: 5px;
  }
  
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #0056b3;
  }
  
  .error-message {
    color: red;
    margin-top: 10px;
  }
  </style>
  