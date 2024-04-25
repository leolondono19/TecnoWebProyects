<template>
    <a class="scroll-to-top scroll-to-target" :class="{ 'd-block': scroll }" href="#__nuxt"><span
            class="fa fa-angle-up"></span>
    </a>
</template>

<script>


export default {
  data() {
    return {
      scroll: false
    }
  },
  mounted() {
    document.addEventListener("scroll", this.handleScroll)
  },
  beforeUnmount() {
    document.removeEventListener("scroll", this.handleScroll)
  },
  methods: {
    handleScroll() {
        console.log('scroll')
      const scrollCheck = window.scrollY > 100
      if (scrollCheck !== this.scroll) {
        this.scroll = scrollCheck
      }
    }
  }
}
</script>
