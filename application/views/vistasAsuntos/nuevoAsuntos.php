<div class="container">
<center>    
<h1> Nuevo Asunto</h1>
</center>
    <form action= <?php echo base_url("Asunto/guardar");?> method="post" class="row g-3">
    <div class="col-md-4">
    <label for="no_cliente" class="form-label">Nombre del cliente</label>
    
    <select name="no_cliente" id="no_cliente" class="form-select">
    <option selected >Selecciona un cliente</option>
   <?php  foreach($datosCliente as $dC):
     ?>
    <option value=" <?php echo $dC->no_cliente;?>">
   <?php 
    echo $dC->nombre . " " . $dC->apellido_p . " " . $dC->apellido_m;
    ?> 
    </option>
<?php endforeach;?>
  </select>

  </div>
  <div class="col-md-4">
    <label for="fecha_final" class="form-label">Fecha final</label>
    <input type="date" class="form-control"name="fecha_final" id="fecha_final" placeholder="Fecha_f" required>
  </div>
  <div class="col-md-4">
    <label for="fecha_archivadonputPassword4" class="form-label">Fecha archivado</label>
    <input type="date" class="form-control" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i" required>
  </div>

  <div class="col-2">
    <label for="estado" class="form-label">Estado</label>
    <select name="estado" id="estado" class="form-select">
      <option selectd>Selecciona un estado</option>
      <?php foreach($datosEstado as $dE):
      ?>
      <option value=" <?php echo $dE->no_estado;?>">
      <?php 
      echo $dE->nombreEstado;
      ?>
      </option>
      <?php endforeach;?>
    </select>
  </div>

  <div class="col-10">
    <label for="detalle" class="form-label">Detalle</label>
    <input maxlength="100" minlength="3" type="text" class="form-control" name="detalle" id="detalle" placeholder="Detalle" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Guardar </button required>
  </div>
    </form>
</div>




