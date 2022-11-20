<div class="container">
<div class="encabezado">
<center>
       <h1> Lista de Asuntos </h1>
</center>
</div>
<a href= <?php echo base_url("Asunto/nuevo");
        ?>>
        <button type="button" class="btn btn-success btn-lg">Nuevo</button>
</a> 
<div>
  <table class="table table-hover">
<thread> 
    <tr>
        <th scope="col"> No. asunto</th>
        <th scope="col"> No. cliente </th>
        <th scope="col"> Fecha_f</th>
        <th scope="col"> Fecha_i </th>
        <th scope="col"> Estado</th>
        <th scope="col"> Detalle </th>
    </tr>
</thread>
    <tbody>
    <?php  foreach($datosAsunto as $dA):
     ?>
    <tr>
        <th scope="row">
            <?php echo $dA->no_asunto;
            ?>
        </th>
        
        <td>
            <?php echo $dA->no_cliente; 
            ?>
        </td>
        <td> 
            <?php echo $dA->fecha_final;
            ?>
        </td>
        <td>
            <?php echo $dA->fecha_archivado;
            ?>
        </td>
        <td>
            <?php echo $dA->estado;
            ?>
        </td>
        <td>
            <?php echo $dA->detalle;
            ?>
        </td>
        <td>
         <a href= <?php echo base_url("Asunto/editar/". $dA-> no_asunto);
        ?>>
            <button type="button" class="btn btn-warning">Editar</button>
        </a>
        </td>
        <td>
         <a href= <?php echo base_url("Asunto/eliminar/". $dA-> no_asunto);
        ?>>
           <button type="button" class="btn btn-danger">Eliminar</button>
        </a>
        </td>
    </tr>
       
    <?php
    endforeach;
    ?>
</tbody>
  </table>
</div>
