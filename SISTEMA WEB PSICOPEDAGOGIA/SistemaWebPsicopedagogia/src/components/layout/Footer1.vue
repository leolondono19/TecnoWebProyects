<template>
    <footer class="main-footer">
        <div class="bg-image zoom-two" style="
        
            background: linear-gradient(#264382,#365eb5)  ;
        
        "></div>

        <!-- Sección de Widgets -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-3 col-lg-12 col-md-6 col-sm-12">
                        <div class="footer-widget about-widget">
                            <div class="logo">
                                <router-link to="/"><img src="/images/logo-2.png"  style="filter: drop-shadow(1px 1px 2px black);" ></router-link>
                            </div>
                            <div class="text">Con más de 10 años de experiencia</div>
                            <ul class="social-icon-two">
                                <li>
                                    <router-link to="/#"><i class="fab fa-twitter"></i></router-link>
                                </li>
                                <li>
                                    <router-link to="/#"><i class="fab fa-facebook"></i></router-link>
                                </li>
                                <li>
                                    <router-link to="/#"><i class="fab fa-pinterest"></i></router-link>
                                </li>
                                <li>
                                    <router-link to="/#"><i class="fab fa-instagram"></i></router-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Explorar</h4>
                            <ul class="user-links">
                                <li>
                                    <router-link to="/#">Galería</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Noticias y Artículos</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Preguntas Frecuentes</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Iniciar Sesión/Registro</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Próximamente</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Contactos</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-2 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Enlaces</h4>
                            <ul class="user-links">
                                <li>
                                    <router-link to="/#">Acerca de</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Cursos</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Instructor</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Eventos</router-link>
                                </li>
                                <li>
                                    <router-link to="/#">Perfil del Instructor</router-link>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-5 col-lg-4 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title">Contacto</h4>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone-square"></i>
                                        <router-link to="tel:+926668880000">+591 77777761</router-link>
                                    </li>
                                    <li><i class="fa fa-envelope"></i>
                                        <router-link to="mailto:needhelp@potisen.com">ucb.edu.bo</router-link>
                                    </li>
                                    <li><i class="fa fa-map-marker-alt"></i> Av. Obrajdes</li>
                                </ul>
                                <div class="subscribe-form">

                                    <form method="post" action="#">
                                        <div class="form-group">
                                            <input type="email" name="email" class="email" placeholder="Correo Electrónico">
                                            <button type="button" class="theme-btn btn-style-one"><i
                                                    class="fa fa-long-arrow-alt-right"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pie de Página Inferior -->
        <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="logo">
                                <router-link to="/"><img src="/images/logo-2.png"  style="filter: drop-shadow(1px 1px 2px black);" ></router-link>
                            </div>
                    <div class="copyright-text">© Derechos de Autor 2022 por <router-link to="/">Compañía.com</router-link>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>


<style scoped>
.bg-image{
    background-color: #1a2d55 !important;
   
}
footer{
    z-index: 1000;
}
</style>