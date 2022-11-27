<div class="container">
<center>    
<h1> Editar Procuradores</h1>
</center>
    
<form action= <?php echo base_url("Procurador/actualizar");?> method="post" class="row g-3">
<div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" value=<?php echo $nombre->nombre;?>> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_p" id="apellido_p" placeholder="Apellido_p" value=<?php echo $nombre->apellido_p;?>> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_m" id="apellido_m" placeholder="Apellido_m" value=<?php echo $nombre->apellido_m;?>>
  </div>

  <div class="col-8">
    <label for="inputAddress" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" value=<?php echo $nombre->direccion;?>> 
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" value=<?php echo $nombre->telefono;?>> 
  </div>
  <input type="hidden" id="no_procurador" name="no_procurador" value=<?php echo $nombre->no_procurador;?>>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar </button>
  </div>
    </form>
</div>


   

