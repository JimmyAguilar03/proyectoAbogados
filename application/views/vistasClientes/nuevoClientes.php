<div class="container">
    <center>
    <h1> Nuevo Cliente </h1>
</center>

    <form action= <?php echo base_url("Cliente/guardar");?> method="post" class="row g-3">
    <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Paterno</label>
    <input type="text" class="form-control" name="apellido_p" id="apellido_p" placeholder="Apellido_p">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Materno</label>
    <input type="text" class="form-control" name="apellido_m" id="apellido_m" placeholder="Apellido_m">
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">DNI</label>
    <input type="text" class="form-control" name="DNI" id="DNI" placeholder="DNI">
  </div>
  <div class="col-10">
    <label for="inputAddress2" class="form-label">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion">
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar </button>
  </div>
    </form>
</div>


