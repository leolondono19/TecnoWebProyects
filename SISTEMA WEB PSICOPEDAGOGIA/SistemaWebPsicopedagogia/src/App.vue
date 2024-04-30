<template>
  <div class="page-wrapper">
    <LayoutHeader1 />
    <div>
      <router-view></router-view>
    </div>
    <LayoutFooter1 />
  </div>
</template>

<script>
import axios from 'axios';
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
  mounted() {
    axios.get('/api/message')
      .then(response => {
        console.log(response.data.message);
      })
      .catch(error => {
        console.error('Error al obtener el mensaje:', error);
      });
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

<style>
body {
  width: 100vw;
  overflow-x: hidden;
}

#app {
  max-width: 100vw;
}
</style>
