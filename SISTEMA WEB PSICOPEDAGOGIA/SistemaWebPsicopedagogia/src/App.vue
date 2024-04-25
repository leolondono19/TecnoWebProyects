  <template>
    <div class="page-wrapper">
        <LayoutHeader1 />
        <div>
          <router-view></router-view>

        </div>
        <LayoutFooter1 />
        <ElementsBackToTop @click="scrollToTop()" />
    </div>
</template>
       


 
 <script>
 //import Cookies from 'js-cookie';
  import LayoutHeader1 from '@/components/layout/Header1.vue';
  import LayoutFooter1 from '@/components/layout/Footer1.vue';
  import ElementsBackToTop from '@/components/elements/BackToTop.vue';
 export default {
     name: 'App',
     components: {
       LayoutHeader1,
       LayoutFooter1,
        ElementsBackToTop
     },
    
     data() {
       return {
         usuarioAutenticado: false,
       };
     },
     methods: {
        scrollToTop() {
          window.scrollTo({
            top: 0,
            behavior: 'smooth',
          });
        },
     },
    
 };
 </script>
 
 <style >
 body{
  width: 100vw;
  overflow-x: hidden;
 }


 #app{
  max-width: 100vw;
 }

 </style>