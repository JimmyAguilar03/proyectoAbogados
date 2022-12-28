<div class="container">
<center>    
<h1> Editar Asunto</h1>
</center>
    
<form action= <?php echo base_url("Asunto/actualizar");?> method="post" class="row g-3">
<div class="col-md-2">
    <label for="inputEmail4" class="form-label"> Número de cliente </label>
    <?php $nombreCliente = $no_cliente->nombre . " " . $no_cliente->apellido_p . " " . $no_cliente->apellido_m;
  ?>
    <input type="text" class="form-control" name="no_cliente" id="no_cliente" placeholder="No. cliente" value= "<?php echo $nombreCliente;?>" > 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha final</label>
    <input   type="date" class="form-control" name="fecha_final" id="fecha_final" placeholder="Fecha_f" value="<?php echo $no_cliente->fecha_final;?>"> 
  </div>
  <div class="col-md-5">
    <label for="inputPassword4" class="form-label">Fecha archivado</label>
    <input type="date" class="form-control" name="fecha_archivado" id="fecha_archivado" placeholder="Fecha_i" value="<?php echo $no_cliente->fecha_inicio;?>">
  </div>

  <div class="col-2">
    <label for="inputAddress" class="form-label">Estado</label>
    <select class="form-select" name="estado" id="estado">
      <?php foreach($datosEstado as $dE):
      if ($dE->no_estado==$no_cliente->no_estado){
        ?>
      <option selected value=" <?php echo $dE->no_estado;?>">
      <?php 
        echo $dE->nombreEstado;
      ?>
      </option>
      <?php 
      }else{
        ?>
        <option value=" <?php echo $dE->no_estado;?>">
        <?php 
          echo $dE->nombreEstado;
        ?>
      </option>
        <?php 
      }
      ?>
      
      <?php endforeach;?>
    </select>
  </div>
  <div class="col-10">
    <label for="inputAddress2" class="form-label">Detalle</label>
    <input maxlength="100" minlength="3" type="text" class="form-control" name="detalle" id="detalle" placeholder="Detalle" value="<?php echo $no_cliente->detalle;?>"> 
  </div>
  <input type="hidden" id="no_asunto" name="no_asunto" value=<?php echo $no_cliente->no_asunto;?>>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar </button>
  </div>
    </form>
</div>


   

