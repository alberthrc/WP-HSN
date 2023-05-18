<?php if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) &&  basename( $_SERVER['SCRIPT_FILENAME'] ) == 'comments.php' ): ?>

    <?php die(); ?>

<?php endif; ?>

<?php if( post_password_required() ): ?>
    <p><?php _e('Se requiere contraseña para vasualziar este comentario', 'hsn')?></p>
    <?php return; ?>
<?php endif;?>    

<div class="comentarios">
    <?php if( get_comments_number() ): ?>
        <h3><?php comments_number( 'Escribe el primer comentario', 'Un comentario', '% comentarios' )?></h3>
    <ol id="comments-list">
      <?php wp_list_comments();?>
    </ol><!-- /#comments-list -->
    <?php endif; ?>
    <?php comment_form(); ?>
</div>