<?php
/*
*
* Single file
* @packege noticias
* @subpakage noticas HSN
* @since 1.0
*/
?>

<?php get_header();?>

        <main class="main__entrada">
            <div class="entrada__contenedor">
                <?php if( have_posts() ): while(have_posts()): the_post(); ?>
                    <article class="entrada">
                        <div class="entrada__header">
                            
                            <h1 class="entrada__titulo"><?php the_title(); ?></h1>

                        </div>
                            <div class="mask">
                                <div class="articulo__img">
                                    <?php the_post_thumbnail()?>
                                </div>
                            </div>
                            <div class="tags">
                            <span>Categoría: <?php the_category(', '); ?></span>
                            <span class="entrada__date">Publicado el: <?php the_time( get_option('date_format')); ?></span>
                            <span>Escrito por: <?php the_author_posts_link()?></span>
                            </div>
                            
                            <div class="entrada__contenido">
                                <?php the_content()?>
                            </div>
                    </article> <!--End articulo-->
                <?php endwhile; endif; ?>
            </div>
        </main>
       

        <section class="comentarios__contenedor">
        <hr>
            <!-- Comentarios -->
            <?php comments_template('', true)?>
        </section>
<?php get_footer();?>