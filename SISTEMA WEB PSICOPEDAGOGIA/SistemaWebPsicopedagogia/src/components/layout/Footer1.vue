<template>
    <footer class="main-footer">
        <div class="bg-image zoom-two" style="
            background: linear-gradient(#FFA500,#FF8C00)  ;
        "></div>

        <!-- Sección de Widgets -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-4 col-lg-12 col-md-6 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title">Contacto</h4>
                            <div class="widget-content">
                                <ul class="contact-info">
                                    <li><i class="fa fa-phone-square"></i>
                                        <router-link to="tel:+926668880000">+591 77777761</router-link>
                                    </li>
                                    <li><i class=""></i>
                                        <router-link to="mailto:needhelp@potisen.com">psicopedagogia.lpz@ucb.edu.bo</router-link>
                                    </li>
                                    <li><i class="fa fa-map-marker-alt"></i> Obrajes calle 2, Av. 14 de Septiembre Bloque "N" (Jardín posterior), Ciudad La Paz, Bolivia</li>
                                </ul>
                                <div class="subscribe-form">
                                    <form method="post" action="#">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
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
                            </ul>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-4 col-lg-6 col-md-6 col-sm-12">
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
                            </ul>
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
                        <router-link to="/"><img src=""  style="filter: drop-shadow(1px 1px 2px black);" ></router-link>
                    </div>
                    <div class="copyright-text">© Derechos de autor 2024 por <router-link to="/">PsicopedagogiaUCB.com</router-link>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.bg-image{
    background-color: #FFA500 !important;
}
footer{
    z-index: 1000;
}
</style>
