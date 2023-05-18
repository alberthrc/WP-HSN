<?php
/*
*
* Index file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>

<?php get_header();?>

   
<!--Carousel-->
<section class="carousell">
    <div class="carousell__contenedor">
        <div class="carousell__grid">
              <!-- Call to WP_ Query Categorias -->
              <?php $category_post = new WP_Query(array(
                'post_type'  => 'post',
                'posts_per_page' => 4,
                'categoy_name' => 'carousels'
            )); ?>

            <?php if ( $category_post -> have_posts() ): while( $category_post -> have_posts()): $category_post -> the_post(); ?> 
                <article class="carousell__articulo">
                    <a href="<?php the_permalink() ?>">
                        <div class="carousell__mask">
                         <?php the_post_thumbnail()?>
                        </div>
                        <div class="carousell__contenido">
                            <p class="carouseel__categoria"><?php the_category(', ')?></p>
                            <h2 class="carousell__titulo"><?php the_title()?></h2>
                        </div>
                    </a>
                </article> <!--End articulo-->
            <?php endwhile; endif;?> 
            
        </div>
    </div>

</section>

<!--Main content-->

<main class="main">
    <div class="articulos__contenedor">
        <div class="articulos__grid">
            <!-- Call to WP_ Query -->
            <?php $last_post = new WP_Query(array(
                'post_type'  => 'post',
                'posts_per_page' => 4,
                'orderby'       => 'rand'
            )); ?>

            <?php if ( $last_post -> have_posts() ): while( $last_post -> have_posts()): $last_post -> the_post(); ?>   
                <article class="articulo">
                    <a href="<?php the_permalink() ?>">
                        <div class="mask">
                            <?php the_post_thumbnail()?>
                        </div>
                        <div class="articulo__contenido">
                            <h2 class="articulo__titulo"><?php the_title()?></h2>
                            <?= '<p class="articulo__descripcion">' . get_the_excerpt() . '</p>' ?>
                        </div>
                    </a>
                </article> <!--End articulo-->
            <?php endwhile; endif;?>        
        </div>
        <hr>
    </div>
</main>

<!-- Buscardor -->
<section  class="buscador__contenedor">
        <?php get_search_form(); ?> 
        <hr>
</section>
<!-- Últimos posts -->
<section class="recomendados">
    <div class="recomendados__contenedor">
        <h2 class="recomendados__heading">Últimos artículos</h2>
        <div class="recomendados__grid">
            <?php if ( have_posts() ): while( have_posts()): the_post(); ?>   

                <article <?php post_class('recomendado'); ?>>
                <a href="<?php the_permalink() ?>"> 
                    <?php if( has_post_thumbnail()):?>
                        <div class="recomendado__mask">
                        <?php the_post_thumbnail()?>
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

    <?php if ( get_next_posts_link() || get_preview_post_link()): ?>
        <section class="paginacion">
        <div class="paginacion__contenedor">
            <nav class="paginacion__caja">
                <div class="paginacion__anterior">
                    <?php previous_posts_link(__('<- Anterior','hsn')); ?>
                </div>
                <div class="paginacion__siguiente">
                    <?php next_posts_link(__('Siguiente ->','hsn'));?>
                </div>
            </nav>
        </div>
    </section>
    <?php endif; ?>    
    <!-- Sección Navegación -->
   
    <?php get_footer();?>
