<div class="container">
<center>    
<h1> Editar Asunto</h1>
</center>
    
<form action= <?php echo base_url("Asunto/actualizar");?> method="post">
    <input type="text" name="no_cliente" id="no_cliente" placeholder="No. cliente" value=<?php echo $no_cliente->no_cliente;?>> 
        <input type="date" name="fecha_final" id="fecha_final" placeholder="Fecha_f" value=<?php echo $no_cliente->fecha_final;?>> 
        <input type="date" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i" value=<?php echo $no_cliente->fecha_archivado;?>>
        <input type="text" name="estado" id="estado" placeholder="Estado" value=<?php echo $no_cliente->estado;?>> 
        <input type="text" name="detalle" id="detalle" placeholder="Detalle" value=<?php echo $no_cliente->detalle;?>> 
        <input type="hidden" id="no_asunto" name="no_asunto" value=<?php echo $no_cliente->no_asunto;?>>
        <input type="submit" value="Actualizar">
    </form>
</div>