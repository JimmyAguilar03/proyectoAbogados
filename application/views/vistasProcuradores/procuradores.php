<div class="container">
<div class="encabezado">
<center>
       <h1> Lista de Procuradores </h1>
</center>
</div>
<a href= <?php echo base_url("Procurador/nuevo");
        ?>>
        <button type="button" class="btn btn-success btn-lg">Nuevo</button>
</a> 
<div>
  <table class="table table-hover">
<thread> 
    <tr>
        <th scope="col"> No. procurador</th>
        <th scope="col"> Nombre </th>
        <th scope="col"> Apellidos</th>
        <th scope="col"> Direccion</th>
        <th scope="col"> Telefono </th>
    </tr>
</thread>
    <tbody>
    <?php  foreach($datosProcurador as $dP):
     ?>
    <tr>
        <th scope="row">
            <?php echo $dP->no_procurador;
            ?>
        </th>
        
        <td>
            <?php echo $dP->nombre; 
            ?>
        </td>
        <td> 
            <?php echo $dP->apellido_p . " ". $dP->apellido_m; ;
            ?>
        </td>
        <td>
            <?php echo $dP->direccion;
            ?>
        </td>
        <td>
            <?php echo $dP->telefono;
            ?>
        </td>
        <td>
         <a href= <?php echo base_url("Procurador/editar/". $dP-> no_procurador);
        ?>>
            <button type="button" class="btn btn-warning">Editar</button>
        </a>
        </td>
        <td>
         <a href= <?php echo base_url("Procurador/eliminar/". $dP-> no_procurador);
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