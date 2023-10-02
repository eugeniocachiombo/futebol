<form  action='CRUD/index.php' method='post'>
        <legend><b>Cadastrar de Equipa</b></legend> <br>
        <input type='hidden' name='idEquipa' id='idEquipa' placeholder='Id'> 
        <input type='text' name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> 
        <input class="mt-3 mb-3" style="width: 205px" type='submit' value='Cadastrar' name='cadastrar'>
</form>

<a href='<?php echo $uri; ?>index.php?actualizar'>Actualizar</a>