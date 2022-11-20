<div class="container">
    <h3> Editar Nivel </h3>

    <form action= <?php echo base_url("Niveles/actualizar");?> method="post">
        <input type="text" name="nombreNivel" id="nombreNivel" placeholder="Nombre nivel" value=<?php echo $nivel->nivel;?>> <!-- Debemos de cargar el valor que está de antes -value- !-->
        <input type="number" name="salario" placeholder="Salario" value=<?php echo $nivel->salario;?>> 
        <input type="hidden" name="idNivel" value=<?php echo $nivel->idLista;?>> 
        <input type="submit" value="Actualizar">
    </form>
</div>
    