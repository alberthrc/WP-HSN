<?php
/*
*
* Search file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>

<?php get_header();?>
<!-- Buscardor -->
<section  class="buscador__contenedor">
        <?php get_search_form(); ?> 
</section>

<!-- Últimos posts -->
<section class="recomendados">
    <div class="recomendados__contenedor">
        <h1 class="recomendados__heading">Resultado para: <?php  the_search_query() ?> </h1>
        <div class="recomendados__grid">
            <?php if ( have_posts() ): while( have_posts()): the_post(); ?>   

                <article <?php post_class('recomendado'); ?>>
                <a href="<?php the_permalink() ?>"> 
                    <?php if( has_post_thumbnail()):?>
                        <div class="recomendado__mask">
                            <img class="recomendado__img" loading="lazy" src="<?= get_the_post_thumbnail_url(); ?>">
                        </div>
                    <?php endif;?>
                    
                    <div class="recomendado__contenido">
                        <p class="recomendado__categoria">salud</p>
                        <h2 class="recomendado__titulo"><?php the_title()?></h2>
                    </div>
                    </a>  
                </article> <!--End articulo-->

            <?php endwhile; endif;?>
        </div>
    </div>
</section>
<!-- Páginación -->
<?php if ( get_next_posts_link() || get_preview_post_link()): ?>
    <section class="paginacion">
    <div class="paginacion__contenedor">
        <nav class="paginacion__caja">
            <div class="paginacion__anterior">
                <?php previous_posts_link(__('<- Anterior','hsn')); ?>
                <!-- <a class="navegacion__enlace" href="#"> < Anterior </a> -->
            </div>
            <div class="paginacion__siguiente">
                <?php next_posts_link(__('Siguiente ->','hsn'));?>
                <!-- <a  class="navegacion__enlace" href="#">  Siguiente ></a> -->
            </div>
        </nav>
    </div>
</section>
<?php endif; ?>  

<?php get_footer();?>