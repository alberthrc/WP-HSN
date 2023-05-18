<?php
/*
*
* Pages file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>
<?php get_header(); ?>

<main class="main__entrada">
            <div class="entrada__contenedor">
                <?php if( have_posts() ): while(have_posts()): the_post(); ?>
                    <article class="entrada">
                        <div class="entrada__header">
                            <h1 class="entrada__titulo"><?php the_title(); ?></h1>
                        </div>
                        
                        <div class="entrada__contenido">
                            <?php the_content()?>
                        </div>
                    </article> <!--End articulo-->
                <?php endwhile; endif; ?>
            </div>
        </main>


<?php get_footer(); ?>
