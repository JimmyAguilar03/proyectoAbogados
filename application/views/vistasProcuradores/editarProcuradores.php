<div class="container">
<center>    
<h1> Editar Procuradores</h1>
</center>
    
<form action= <?php echo base_url("Procurador/actualizar");?> method="post">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $nombre->nombre;?>> 
        <input type="text" name="apellido_p" id="apellido_p" placeholder="Apellido_p" value=<?php echo $nombre->apellido_p;?>> 
        <input type="text" name="apellido_m" id="apellido_m" placeholder="Apellido_m" value=<?php echo $nombre->apellido_m;?>>
        <input type="text" name="direccion" id="direccion" placeholder="Direccion" value=<?php echo $nombre->direccion;?>> 
        <input type="text" name="telefono" id="telefono" placeholder="Telefono" value=<?php echo $nombre->telefono;?>> 
        <input type="hidden" id="no_procurador" name="no_procurador" value=<?php echo $nombre->no_procurador;?>>
        <input type="submit" value="Actualizar">
    </form>
</div>