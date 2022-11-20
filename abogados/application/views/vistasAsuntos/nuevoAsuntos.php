<div class="container">
<center>    
<h1> Nuevo Asunto</h1>
</center>
    <form action= <?php echo base_url("Asunto/guardar");?> method="post">
        <input type="text" name="no_cliente" id="no_cliente" placeholder="No. cliente">
        <input type="text" name="fecha_final" id="fecha_final" placeholder="Fecha_f">
        <input type="text" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i">
        <input type="text" name="estado" id="estado" placeholder="Estado">
        <input type="text" name="detalle" id="detalle" placeholder="Detalle">
        <input type="submit" value="Guardar">
    </form>
</div>
