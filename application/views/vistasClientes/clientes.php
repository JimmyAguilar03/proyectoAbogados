<div class="container">
<div class="encabezado">
<center>
       <h1> Lista de clientes de abogados </h1>
</center>
</div>
<a href= <?php echo base_url("Cliente/nuevo");
        ?>>
        <button type="button" class="btn btn-success btn-lg">+ Nuevo</button>
</a> 
<div>
  <table class="table table-hover">
<thread> 
    <tr>
        <th scope="col"> Num. </th>
        <th scope="col"> Nombre </th>
        <th scope="col"> Apellidos </th>
        <th scope="col"> DNI </th>
        <th scope="col"> Direccion </th>
        <th scope="col"> Tel </th>
        <th></th>
        <th></th>
    </tr>
</thread>
    <tbody>
    <?php  foreach($datosCliente as $dC):
     ?>
    <tr>
        <th scope="row">
            <?php echo $dC->no_cliente;
            ?>
        </th>
        
        <td>
            <?php echo $dC->nombre; 
            ?>
        </td>
        <td> 
            <?php echo $dC->apellido_p . " " . $dC->apellido_m;
            ?>
        </td>
        <td>
            <?php echo $dC->DNI;
            ?>
        </td>
        <td>
            <?php echo $dC->direccion;
            ?>
        </td>
        <td>
            <?php echo $dC->telefono;
            ?>
        </td>
        <td>
         <a href= <?php echo base_url("Cliente/editar/". $dC-> no_cliente);
        ?>>
            <button type="button" class="btn btn-warning">Editar</button>
        </a>
        </td>
        <td>
         <a href= <?php echo base_url("Cliente/eliminar/". $dC-> no_cliente);
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
