<?php
/*
*
* Archive file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>
<?php get_header();?>
<!-- Categorías -->
<section class="recomendados">
    <div class="recomendados__contenedor">
        <?php  if( is_category() ):?>
            <h1 class="recomendados__heading"> Categoría: <?php  single_cat_title() ?></h1>
            <p><?php echo category_description(); ?></p>
        <?php elseif( is_tag() ):?>
            <h1 class="recomendados__heading"> Etiqueta: <?php  single_tag_title() ?></h1>
        <?php elseif(is_day() ) :?>  
                <h1 class="recomendados__heading">Archivo de: <?php the_time(get_option('date_format') ); ?></h1>  
        <?php elseif(is_month() ) :?>  
            <h1 class="recomendados__heading">Archivo del mes: <?php the_time('F Y'); ?></h1>  
        <?php elseif(is_year() ) :?>  
            <h1 class="recomendados__heading">Archivos de año: <?php the_time('Y'); ?></h1>  
        <?php elseif(is_author() ) :?>  
                <h1 class="recomendados__heading">Autor: <?php the_author();?></h1>  
        <?php endif;?>   
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
<!--Footer  -->
<?php get_footer();?>

