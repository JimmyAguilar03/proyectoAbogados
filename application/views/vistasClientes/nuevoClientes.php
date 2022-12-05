<div class="container">
    <center>
    <h1> Nuevo Cliente </h1>
</center>

    <form action= <?php echo base_url("Cliente/guardar");?> method="post" class="row g-3">
    <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Nombre</label>
    <input maxlength="30" type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Paterno</label>
    <input maxlength="50" type="text" class="form-control" name="apellido_p" id="apellido_p" placeholder="Apellido_p" required>
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Apellido Materno</label>
    <input maxlength="50" type="text" class="form-control" name="apellido_m" id="apellido_m" placeholder="Apellido_m" required>
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">DNI</label>
    <input minlength="20" maxlength="20" type="text" class="form-control" name="DNI" id="DNI" placeholder="DNI" required>
  </div>
  <div class="col-10">
    <label for="inputAddress2" class="form-label">Direccion</label>
    <input maxlength="100" type="text" class="form-control" name="direccion" id="direccion" placeholder="Direccion" required>
  </div>
  <div class="col-md-5">
    <label for="inputCity" class="form-label">Telefono</label>
    <input minlength="10" maxlength="10" type="text" class="form-control" name="telefono" id="telefono" placeholder="Telefono" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar </button>
  </div>
    </form>
</div>


