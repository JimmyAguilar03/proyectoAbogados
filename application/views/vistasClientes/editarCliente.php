<div class="container">
<center>   
<h1> Editar Cliente </h1>
</center>
    <form action= <?php echo base_url("Cliente/actualizar");?> method="post" class="row g-3">
    <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input maxlength="30"  type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value= "<?php echo $nombre->nombre;?>">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Paterno</label>
    <input maxlength="50" type="text" class="form-control" name="apellido_p" id="apellido_p" placeholder="Apellido_p" value="<?php echo $nombre->apellido_p;?>">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Materno</label>
    <input maxlength="50" type="text" class="form-control" name="apellido_m" id="apellido_m" placeholder="Apellido_m" value="<?php echo $nombre->apellido_m;?>">
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">DNI</label>
    <input  minlength="20" maxlength="20" type="text" class="form-control" name="DNI" id="DNI" placeholder="DNI" value=<?php echo $nombre->DNI;?>> 
  </div>
  <div class="col-10">
    <label for="inputAddress2" class="form-label">Direccion</label>
    <input maxlength="100" type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value="<?php echo $nombre->direccion;?>">
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Telefono</label>
    <input   minlength="10" maxlength="10" type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value=<?php echo $nombre->telefono;?>> 
  </div>
  <input type="hidden" id="no_cliente" name="no_cliente" value=<?php echo $nombre->no_cliente;?>>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar </button>
  </div>
    </form>
</div>

