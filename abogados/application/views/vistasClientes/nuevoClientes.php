<div class="container">
    <h3> Nuevo Cliente </h3>

    <form action= <?php echo base_url("Cliente/guardar");?> method="post">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre">
        <input type="text" name="apellido_p" id="apellido_p" placeholder="Apellido_p">
        <input type="text" name="apellido_m" id="apellido_m" placeholder="Apellido_m">
        <input type="text" name="DNI" id="DNI" placeholder="DNI">
        <input type="text" name="direccion" id="direccion" placeholder="Direccion">
        <input type="text" name="telefono" id="telefono" placeholder="Telefono">
        <input type="submit" value="Guardar">
    </form>
</div>