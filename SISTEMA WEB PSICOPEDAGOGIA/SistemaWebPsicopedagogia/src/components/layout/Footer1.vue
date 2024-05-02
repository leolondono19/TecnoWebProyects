<template>
    <footer class="main-footer">
        <div class="bg-image zoom-two" style="
            background: linear-gradient(#f49e52, #fb7c0a)  ;
        "></div>

        <!-- Sección de Widgets -->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-8 col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-widget contact-widget">
                            <h4 class="widget-title" style="color: #6bb940; font-size: 24px;">Contacto</h4>
                            <div class="widget-content">
                                <ul class="contact-info" style="color: #063971; font-size: 18px;">
                                    <li><i class="fa fa-phone-square"></i>
                                        <router-link to="tel:+926668880000" style="color: #063971;">+591 66666666</router-link>
                                    </li>
                                    <li><i class=""></i>
                                        <router-link to="mailto:needhelp@potisen.com" style="color: #063971;">psicopedagogia@ucb.edu.bo</router-link>
                                    </li>
                                    <li><i class=""></i> Obrajes calle 2, Av. 14 de Septiembre Bloque "N", Ciudad La Paz, Bolivia</li>
                                </ul>
                                <div class="subscribe-form">
                                    <form method="post" action="#">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Columna del Pie de Página -->
                    <div class="footer-column col-xl-4 col-lg-12 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <div class="logo" style="float: right;">
                                <router-link to="/"><img src="/images/logo-2.png" alt="Logo" style="max-width: 400px; filter: drop-shadow(1px 1px 2px black);" ></router-link>
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
                    <div class="copyright-text">
                        <router-link to="/" style="color: white; font-size: 20px;">© Derechos de autor 2024 por PsicopedagogiaUCB.com</router-link>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.bg-image {
    background-color: #fb7c0a !important;
}

footer {
    z-index: 1000;
}

.widget-title {
    color: #063971;
    font-size: 24px;
}

.contact-info li {
    color: #063971;
    font-size: 18px;
}

.logo {
    float: right;
}

.logo img {
    max-width: 200px;
}

.logo img:hover {
    filter: drop-shadow(2px 2px 4px black);
}

.copyright-text {
    color: #6bb940;
    font-size: 20px;
}
</style>
