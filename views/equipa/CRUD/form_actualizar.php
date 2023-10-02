<form  action='CRUD/index.php' method='post'>
    <legend><b>Actualizar Equipa</b></legend> <br>
    <input type='text' name='idEquipa' id='idEquipa' placeholder='Id'> 
    <input type='text' name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> 
    <input class="mt-3 mb-3" style="width: 205px" type='submit' value='Actualizar' name='actualizar'>
</form>

<?php $uri = str_replace("index.php?actualizar", "", $uri); ?>
<a href='<?php echo $uri; ?>'>Cadastrar</a>