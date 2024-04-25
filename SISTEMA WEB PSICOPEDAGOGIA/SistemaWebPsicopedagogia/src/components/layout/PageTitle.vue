<template>
  <section class="page-title" style="background-image: url(/images/background/page-title.jpg);">
    <div class="auto-container">
      <div class="title-outer">
        <h1 class="title">{{ title }}</h1>
        <ul class="page-breadcrumb">
          <li><router-link to="/">Home</router-link></li>
          <li><router-link to="/">Pages</router-link></li>
          <li>{{ title }}</li>
        </ul>
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    name: "PageTitle",
    props: {
      title: {
        type: String
      }
    }
  }
</script>