<div class="container">
<center>    
<h1> Nuevo Procurador</h1>
</center>
    <form action= <?php echo base_url("Procurador/guardar");?> method="post" class="row g-3">
    <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
  </div>
  <div class="col-md-10">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="text" class="form-control" name="apellido_p" id="apellido_p" placeholder="Apellidos">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_m" id="apellido_m" placeholder="Apellido_m">
  </div>

  <div class="col-8">
    <label for="inputAddress" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
  </div>
  <div class="col-4">
    <label for="inputAddress2" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
  </div>
  

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar</button>
  </div>
    </form>
</div>

