
import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import Login from '../views/Login.vue'




    //Vista estudiantes
import Docentes from '../views/Estudiante/Docentes.vue'    
import Graduados from '../views/Estudiante/Graduados.vue'
import TrabajoObraSocial from '../views/Estudiante/TrabajoObraSocial.vue'
import RedPsico from '../views/Estudiante/RedPsico.vue'
import CursosFormacionContinua from '../views/Estudiante/CursosFormacionContinua.vue'
import Posgrado from '../views/Estudiante/Posgrado.vue'
import DiplomadoEspecialidadMaestria from '../views/Estudiante/DiplomadoEspecialidadMaestria.vue'
import Diplomado from '../views/Estudiante/Diplomado.vue'
import Maestria from '../views/Estudiante/Maestria.vue'
import Doctorado from '../views/Estudiante/Doctorado.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/home',
      name: 'home',
      component: HomeView
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
      path: '/Graduados',
      name: 'Graduados',
      component: Graduados
    },
    {
      path: '/TrabajoObraSocial',
      name: 'TrabajoObraSocial',
      component: TrabajoObraSocial
    },
    {
      path: '/RedPsico',
      name: 'RedPsico',
      component: RedPsico
    },
    {
      path: '/CursosFormacionContinua',
      name: 'CursosFormacionContinua',
      component: CursosFormacionContinua
    },
    {
      path: '/Posgrado',
      name: 'Posgrado',
      component: Posgrado
    },
    {
      path: '/DiplomadoEspecialidadMaestria',
      name: 'DiplomadoEspecialidadMaestria',
      component: DiplomadoEspecialidadMaestria
    },
    {
      path: '/Diplomado',
      name: 'Diplomado',
      component: Diplomado
    },
    {
      path: '/Maestria',
      name: 'Maestria',
      component: Maestria
    },
    {
      path: '/Doctorado',
      name: 'Doctorado',
      component: Doctorado
    },
  ]
})

export default router