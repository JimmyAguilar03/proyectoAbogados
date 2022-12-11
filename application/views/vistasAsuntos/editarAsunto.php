<div class="container">
<center>    
<h1> Editar Asunto</h1>
</center>
    
<form action= <?php echo base_url("Asunto/actualizar");?> method="post" class="row g-3">
<div class="col-md-2">
    <label for="inputEmail4" class="form-label">Número de cliente</label>
    <input type="text" class="form-control" name="no_cliente" id="no_cliente" placeholder="No. cliente" value=<?php echo $no_cliente->no_cliente;?>> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha final</label>
    <input   type="date" class="form-control" name="fecha_final" id="fecha_final" placeholder="Fecha_f" value=<?php echo $no_cliente->fecha_final;?>> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha archivado</label>
    <input type="date" class="form-control" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i" value=<?php echo $no_cliente->fecha_archivado;?>>
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">Estado</label>
    <input class="form-select" name="estado" id="estado"> 
    <option selected> Selecciona un estado </option>
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
    <label for="inputAddress2" class="form-label">Detalle</label>
    <input maxlength="100" minlength="3" type="text" class="form-control" name="detalle" id="detalle" placeholder="Detalle" value=<?php echo $no_cliente->detalle;?>> 
  </div>
  <input type="hidden" id="no_asunto" name="no_asunto" value=<?php echo $no_cliente->no_asunto;?>>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar </button>
  </div>
    </form>
</div>


   

