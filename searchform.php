<form action="<?= home_url(); ?>" method="get" class="formulario__busqueda">
    <div class="formulario__campo">
        <input class="buscador__input" type="text" name="s" id="s" value="<?= the_search_query(); ?>" placeholder="Buscar más recetas, remedios, consejos....">
    </div>
    <div class="formulario__campo">
        <input type="submit" class="formularo__submit" value="Buscar">
    </div>
   
</form>