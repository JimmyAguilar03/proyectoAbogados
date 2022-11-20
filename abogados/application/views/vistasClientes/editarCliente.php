<div class="container">
    <h3> Editar Cliente </h3>

    <form action= <?php echo base_url("Cliente/actualizar");?> method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $nombre->nombre;?>> <!-- Debemos de cargar el valor que está de antes -value- !-->
        <input type="text" name="apellido_p" id="apellido_p" placeholder="Apellido_p" value=<?php echo $nombre->apellido_p;?>> 
        <input type="text" name="apellido_m" id="apellido_m" placeholder="Apellido_m" value=<?php echo $nombre->apellido_m;?>>
        <input type="text" name="DNI" id="DNI" placeholder="DNI" value=<?php echo $nombre->DNI;?>> 
        <input type="text" name="direccion" id="direccion" placeholder="Direccion" value=<?php echo $nombre->direccion;?>> 
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" value=<?php echo $nombre->telefono;?>> 
        <input type="hidden" id="no_cliente" name="no_cliente" value=<?php echo $nombre->no_cliente;?>>
        <input type="submit" value="Actualizar">
    </form>
</div>