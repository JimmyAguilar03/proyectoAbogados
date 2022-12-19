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
        <th scope="col"> Estado </th>
        <th scope="col"> Nombre del cliente</th>
        <th scope="col"> Fecha inicial </th>
        <th scope="col"> Fecha final</th>
        <th scope="col"> Detalle </th>
        <th scope="col"> Reporte </th>
    </tr>
</thread>
    <tbody>
    <?php  foreach($datosAsunto as $dA):
    switch($dA-> no_estado){
        case 1: 
            $color = "success"; //Verde
            break; 
        case 2: 
            $color = "warning"; //Amarillo
            break;
        case 3: 
            $color = "primary"; //Azul
            break;
        case 4: 
            $color = "secondary"; //Morado
            break;
        case 5: 
            $color = "danger"; //Rojo
            break; 
    }
     ?>
    <tr>
        <th scope="row">
            <?php echo $dA->no_asunto;
            ?>
        </th>
         <td style="vertical-align:middle; ">
         <span class="badge text-bg-<?php echo $color;?>" >
            <?php echo $dA->estado;
            ?>
        </td>
        <td >
            <?php echo $dA->nombre . " " . $dA-> apellido_p . " " . $dA-> apellido_m; 
            ?>
        </td>
        <td> 
        <?php echo $dA->fecha_final;
            ?>
        </td>
        <td>
        <?php echo $dA->fecha_inicio;
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
        <td>
         <a href= <?php echo base_url("Imprimir/asunto/". $dA-> no_asunto);
        ?>>
           <button type="button" class="btn btn-info">Reporte</button>
        </a>
        </td>

    </tr>
       
    <?php
    endforeach;
    ?>
</tbody>
  </table>
</div>
