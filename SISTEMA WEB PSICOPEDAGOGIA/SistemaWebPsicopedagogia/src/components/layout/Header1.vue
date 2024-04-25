<template>
    <header class="main-header header-style-one" :class="{ 'moblie-search-active': isSearch }">

        <!-- Main box -->
        <div class="main-box">
            <div class="logo-box">
                <div class="logo">
                    <router-link to="/"><img src="/images/ucb.png" alt="" title="Tronis" style="height: 6rem; width: 6rem;"></router-link>
          </div>
                <div class="logo">
                    <router-link to="/"><img src="/images/logo1.png" alt="" title="Tronis"></router-link>
                </div>
            </div>

            <!--Nav Box-->
            <div class="nav-outer">

                <nav class="nav main-menu">
                    <LayoutMenu />
        
                </nav>
                <!-- Main Menu End-->


                <div class="outer-box">
                   

                    <!-- Mobile Nav toggler -->
                    <div class="mobile-nav-toggler" @click="handleToggled"><span class="icon lnr-icon-bars"></span></div>
                </div>
            </div>
        </div>
        <!-- End Main Box -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop" @click="handleToggled"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo">
                        <router-link to="/"><img src="/images/logo-2.png" alt="" title=""></router-link>
                    </div>
                    <div class="close-btn" @click="handleToggled"><i class="icon fa fa-times"></i></div>
                </div>

                <LayoutMobileMenu />
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title">Llama ahora!</span>
                            <router-link to="tel:+92880098670">Tel. (+591) 22782222 Ext. 2871</router-link>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title">Correo</span>
                            <router-link to="mailto:help@company.com">psicopedagogia.lpz@ucb.edu.bo</router-link>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-clock"></span>
                            <span class="title">Ubicacion</span>
                            Obrajes Av. 14 de Septiembre esq. Calle 2
                        </div>
                    </li>
                </ul>


                <ul class="social-links">
                  
                    <li>
                        <router-link to="/#"><i class="fab fa-facebook-f"></i></router-link>
                    </li>
                    
                    <li>
                        <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                    </li>
                </ul>
            </nav>
        </div><!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop" @click="handleSearch"></span>
            <button class="close-search" @click="handleSearch"><span class="fa fa-times"></span></button>

            <div class="search-inner">
                <form method="post" action="">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

        <!-- Sticky Header  -->
        <div class="sticky-header" :class="{ 'fixed-header animated slideInDown': scroll }">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <router-link to="/" title=""><img src="/images/logo1.png" alt="" title=""></router-link>
                    </div>

                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <LayoutMenu />
                            </div>
                        </nav><!-- Main Menu End-->

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler" @click="handleToggled"><span class="icon lnr-icon-bars"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
</template>

<script >

import LayoutMenu from '@/components/layout/Menu.vue'
import LayoutMobileMenu from '@/components/layout/MobileMenu.vue'

export default {
  components: {
    LayoutMenu,
    LayoutMobileMenu
  },
  data() {
    return {
      scroll: false,
      isToggled: false,
      isSearch: false
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
      const scrollCheck = window.scrollY > 100
      if (scrollCheck !== this.scroll) {
        this.scroll = scrollCheck
      }
    },
    handleToggled() {
      this.isToggled = !this.isToggled
      document.body.classList.toggle("mobile-menu-visible", this.isToggled)
    },
    handleSearch() {
      this.isSearch = !this.isSearch
    }
  }
}


</script>