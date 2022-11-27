<div class="container">
<center>    
<h1> Nuevo Asunto</h1>
</center>
    <form action= <?php echo base_url("Asunto/guardar");?> method="post" class="row g-3">
    <div class="col-md-2">
    <label for="inputEmail4" class="form-label">Número de cliente</label>
    <input type="text" class="form-control" name="no_cliente" id="no_cliente" placeholder="No. cliente"> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha final</label>
    <input type="date" class="form-control"name="fecha_final" id="fecha_final" placeholder="Fecha_f">
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha archivado</label>
    <input type="date" class="form-control" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i">
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">Estado</label>
    <input type="text" class="form-control" name="estado" id="estado" placeholder="Estado">
  </div>
  <div class="col-10">
    <label for="inputAddress2" class="form-label">Detalle</label>
    <input type="text" class="form-control" name="detalle" id="detalle" placeholder="Detalle">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar </button>
  </div>
    </form>
</div>




