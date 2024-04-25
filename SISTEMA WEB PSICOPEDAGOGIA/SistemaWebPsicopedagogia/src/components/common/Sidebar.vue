<template>
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
     
    
        <input class="Todo" type="checkbox" id="check">
        <label for="check">
          <i class="fas fa-bars" id="btn"></i>
          <i class="fas fa-times" id="cancel"></i>
        </label>
        <div class="sidebar">
          <header> 
            <h1 class="title"></h1></header>
    x
          <a href="/">
            <i class="fa-solid fa-circle-info"></i>
            <span>home</span>
          </a>
        
          <a href="/about">
            <i class="fa-solid fa-table-cells"></i>
            <span>about</span>
          </a>
         
       
        </div>
    
      
        
    
    
    </template>
    
     <script>
     import axios from 'axios';
     import Cookies from 'js-cookie';
     export default {
        name: 'PaginaLogin',
        data() {
            return {
                email: '',
                password: '',
                EmailIngresado: '',
                PasswordIngresado: '',
                errorMessage: '',
                successMessage: ''
            }
        },
        methods: {
          async logout() {
        try {
            // Llama al método logoutUser del store de login
            await useLoginStore().logoutUser();
    
            // Elimina las cookies
            document.cookie.split(";").forEach((c) => {
                document.cookie = c
                    .replace(/^ +/, "")
                    .replace(/=.*/, "=;expires=" + new Date().toUTCString() + ";path=/");
            });
    
            // Limpia el almacenamiento local
            localStorage.clear();
    
            // Redirige a la página de inicio
            this.$router.push('/');
    
            // Recarga la página después de un breve retraso para asegurar que la redirección se complete
            setTimeout(() => {
                location.reload();
            }, 100);
        } catch (error) {
            console.error('Error al cerrar sesión:', error);
        }
    }
      }
    }
    </script>
    
    <style scoped>
    *{
      margin: 0;
      padding: 0;
      text-decoration: none;
    }
    :root {
      --accent-color: #fff;
      --gradient-color: #FBFBFB;
    }
    body{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
       width: 100vw;
      height: 100vh;
      background-image: linear-gradient(-45deg, #e3eefe 0%, #efddfb 100%);
    }
    
    .sidebar{
      position: fixed;
      width: 240px;
      left: -240px;
      height: 100%;
      z-index: 1000;
      background-color: #fff;
      transition: all .5s ease;
    }
    .sidebar header{
      font-size: 28px;
      color: #353535;
      line-height: 70px;
      text-align: center;
      background-color: #fff;
      user-select: none;
      font-family: 'Lato', sans-serif;
    }
    .sidebar a{
      display: block;
      height: 65px;
      width: 100%;
      color: #353535;
      line-height: 65px;
      padding-left: 30px;
      box-sizing: border-box;
      border-left: 5px solid transparent;
      font-family: 'Lato', sans-serif;
      transition: all .5s ease;
    }
    a.active,a:hover{
      border-left: 5px solid var(--accent-color);
      color: #fff;
      background-image: linear-gradient(135deg, #CE4257, #8DAA9D);
    }
    .sidebar a i{
      font-size: 23px;
      margin-right: 16px;
    }
    .sidebar a span{
      letter-spacing: 1px;
      text-transform: uppercase;
    }
    #check{
      display: none;
    }
    label #btn,label #cancel{
      position: absolute;
      left: 5px;
      cursor: pointer;
      color: #720026;
      border-radius: 5px;
      margin: 15px 30px;
      font-size: 29px;
      background-color: #ce4257;
      box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        inset -7px -7px 10px 0px rgba(0,0,0,.1),
       3.5px 3.5px 20px 0px rgba(0,0,0,.1),
       2px 2px 5px 0px rgba(0,0,0,.1);
      height: 45px;
      width: 45px;
     text-align: center;
      text-shadow: 2px 2px 3px rgba(255,255,255,0.5);
      line-height: 45px;
      transition: all .5s ease;
    }
    label #cancel{
      opacity: 0;
      visibility: hidden;
    }
    #check:checked ~ .sidebar{
      left: 0;
    }
    #check:checked ~ label #btn{
      margin-left: 245px;
      opacity: 0;
      visibility: hidden;
    }
    #check:checked ~ label #cancel{
      margin-left: 245px;
      opacity: 1;
      visibility: visible;
    }
    @media(max-width : 860px){
      .sidebar{
        height: auto;
        width: 70px;
        left: 0;
        margin: 100px 0;
        border-radius: 50%;
      }
      header,#btn,#cancel{
        display: none;
      }
      span{
        position: absolute;
        margin-left: 23px;
        margin-right: 23px;
        opacity: 0;
        visibility: hidden;
      }
      .sidebar a{
        height: 60px;
      }
      .sidebar a i{
        margin-left: -10px;
        margin-right: 10px;
      }
      a:hover {
        width: 200px;
        /*background: inherit;se vuelve blanco con este */
      }
      .sidebar a:hover span{
        opacity: 10;
        visibility: visible;
      }
    }
    
    .sidebar > a.active,.sidebar > a:hover:nth-child(even) {
      --accent-color: #f24a28;
      --gradient-color: #fbd8a7;
      box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        inset -7px -7px 10px 0px rgba(0,0,0,.1),
       3.5px 3.5px 20px 0px rgba(0,0,0,.1),
       2px 2px 5px 0px rgba(0,0,0,.1);
       border-radius: 1rem;
    
    }
    .sidebar a.active,.sidebar > a:hover:nth-child(odd) {
      --accent-color: #fbd8a7;
      --gradient-color: #f0c283;
      box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        inset -7px -7px 10px 0px rgba(0,0,0,.1),
       3.5px 3.5px 20px 0px rgba(0,0,0,.1),
       2px 2px 5px 0px rgba(0,0,0,.1);
       border-radius: 1rem;
    }
    
    @media(min-width : 860px){
        .sidebar > a.active,.sidebar > a:hover:nth-child(even) {
    
      scale: 1;
      translate: 1rem;
    }
    .sidebar a.active,.sidebar > a:hover:nth-child(odd) {
    
      scale: 1;
      translate: 1rem;
    }
    }
    
    
    
    .frame {
      width: 50%;
      height: 30%;
      margin: auto;
      text-align: center;
    }
    
    h2 {
      position: relative;
      text-align: center;
      color: #353535;
      font-size: 60px;
      font-family: 'Lato', sans-serif;
      margin: 0;
      color: #a759f5;
    }
    
    p {
      font-family: 'Lato', sans-serif;
      font-weight: 300;
      text-align: center;
      font-size: 30px;
      color: #d6adff;
      margin: 0;
    }
    .title {
    font-style:italic;
    font-size: 1.2rem;
      color: #000000;
      margin-bottom: 10px;
      position: relative;
  }
    .fas{
      z-index: 1000;
    }
    </style>