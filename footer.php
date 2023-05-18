<?php
/*
*
* Footer file
*
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>
   <!-- Cookies section-->
    <div class="aviso-cookies" id="aviso-cookies">
		<img class="galleta" src="<?= IMAGES; ?>/cookie.svg" alt="Galleta">
		<h3 class="titulo">Cookies</h3>
		<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
        <a class="enlace" href="https://hoysoy.net/politicas-de-cookies-y-privacidad/">Aviso de Cookies</a>
		<button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
	</div>
	<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>
    

    <footer class="footer">
        <div class="footer__grid footer__contenedor">
            <nav>
                 <?= wp_nav_menu(array(
                    'theme_location' => 'footer-menu',
                    'menu_class' => 'footer__navegacion'
                ));?>
            </nav>
        </div>
        <p class="copy">Todos los derechos reservados - 2022</p>
    </footer>
    <?php wp_footer();?>
</body>
</html>