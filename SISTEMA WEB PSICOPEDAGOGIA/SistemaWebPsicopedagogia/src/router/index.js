import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import basesita from '../views/BasesParaDesarrollar.vue/basesita.vue'
import basesita2 from '../views/BasesParaDesarrollar.vue/basesita2.vue'
import basesita3 from '../views/BasesParaDesarrollar.vue/basesita3.vue'
import Login from '../views/Login.vue'

    //Vista estudiantes
import Docentes from '../views/Estudiante/Docentes.vue'
import TrabajoObraSocial from '../views/Estudiante/TrabajoObraSocial.vue'
import ObraSocial from '../views/Estudiante/ObraSocial.vue'
import CursosFormacionContinua from '../views/Estudiante/CursosFormacionContinua.vue'
import Postgrado from '../views/Estudiante/Postgrado.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView
    },
    {
      path: '/basesita',
      name: 'basesita',
      component: basesita
    },
    {
      path: '/basesita2',
      name: 'basesita2',
      component: basesita2
    },
    {
      path: '/basesita3',
      name: 'basesita3',
      component: basesita3
    },
    {
      path: '/Login',
      name: 'Login',
      component: Login
    },
    {
      path: '/about',
      name: 'about',
      
      component: () => import('../views/AboutView.vue')
    },

    //Vista estudiantes
    {
      path: '/Docentes',
      name: 'Docentes',
      component: Docentes
    },
    {
      path: '/TrabajoObraSocial',
      name: 'TrabajoObraSocial',
      component: TrabajoObraSocial
    },
    {
      path: '/ObraSocial',
      name: 'ObraSocial',
      component: ObraSocial
    },
    {
      path: '/CursosFormacionContinua',
      name: 'CursosFormacionContinua',
      component: CursosFormacionContinua
    },
    {
      path: '/Postgrado',
      name: 'Postgrado',
      component: Postgrado
    },
  ]
})

export default router