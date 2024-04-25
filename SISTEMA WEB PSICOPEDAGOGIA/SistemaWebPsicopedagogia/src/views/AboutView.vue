<template>
  <div class="Base-Pagina">
    <div class="demo-control-panel">
      <div>
        
        <h1>Vivaa</h1>
        <router-link to="/about">About</router-link>
       
      
    </div>
     
    
  </div>
   
  
    
    </div>
</template>

<script>
const { default: router } = require('@/router');


</script>

<style scoped>


.demo-control-panel{
  background-color: #FBF5F3;
  margin: 15px;/* panel fu */
  padding: 20px;

  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        inset -7px -7px 10px 0px rgba(0,0,0,.1),
       3.5px 3.5px 20px 0px rgba(0,0,0,.1),
       2px 2px 5px 0px rgba(0,0,0,.1);
       border-radius: 1rem;
}

h1 {
  font-family: 'Dancing Script', cursive;
  font-size: 80px;
  margin-bottom: 10px;
  margin-top: 0px;
  color: #390b5f;
  
}


.Base-Pagina{
  padding: 5px ;
  margin: 80px;
  background-image: linear-gradient(135deg, #001233, #CE4257, #FF9B54);
  box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
        inset -7px -7px 10px 0px rgba(0,0,0,.1),
       3.5px 3.5px 20px 0px rgba(0,0,0,.1),
       2px 2px 5px 0px rgba(0,0,0,.1);
       border-radius: 1rem;
}


  
</style>


