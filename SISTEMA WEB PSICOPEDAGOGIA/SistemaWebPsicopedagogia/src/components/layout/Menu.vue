<template>
    <ul class="navigation">
        <li class="current ">
            <router-link to="/">Home</router-link>
          
        </li>
       
        <li class="dropdown">
            <router-link to="/">UCB</router-link>
            <ul>
                <li>
                    <router-link to="/">Inscripciones</router-link>
                </li>
                <li>
                    <router-link to="/">Tarifario Actualizado</router-link>
                </li>
                <li>
                    <router-link to="/">Planes de pago</router-link>
                </li>
                <li>
                    <router-link to="/">Oportunidades de Becas</router-link>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <router-link to="/#">F. Academica</router-link>
            <ul>
                <li>
                    <router-link to="/">Formacion Pregrado</router-link>
                </li>
                <li >
                    <router-link to="/#">Investigacion</router-link>  
                </li>
                <li >
                    <router-link to="/#">Interaccion Social</router-link>  
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <router-link to="/#">Posgrado</router-link>
            <ul>
                <li>
                    <router-link to="/">Cursos de formacion continua</router-link>
                </li>
                <li>
                    <router-link to="/">Diplomado , especialidades y Maestria</router-link>
                </li>
            </ul>
        </li>
        <li class="dropdown">
            <router-link to="/#">Programa Integral</router-link>
            <ul>
                <li>
                    <router-link to="/">Graduados</router-link>
                </li>
                <li>
                    <router-link to="/">Bolsa de trabajo</router-link>
                </li>
            </ul>
        </li>
        <li>
            <router-link to="/">Red PSP</router-link>
        </li>
        <li>
            <router-link to="/Login">Sesion</router-link>
        </li>
      
    </ul>
   
</template>