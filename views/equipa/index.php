<?php include '../../views/inc/headHTML.html';?>
<?php include '../../views/inc/header.html';?>

<title>Formulário de Equipa</title>

<div class='container-fluid'>
    <a href='../../'>Início</a>
    <hr>
    <form class="text-center" action='CRUD/index.php' method='post'>
        <legend><b>Formulário de Equipa <hr></b></legend> <br>
        <input type='text' name='idEquipa' id='idEquipa' placeholder='Id' style='width: 50px'>
        <input type='text' name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> <br> <br>
        <input type='submit' value='Cadastrar' name='cadastrar'>
        <input type='submit' value='Actualizar' name='actualizar'>
        <input type='submit' value='Eliminar' name='eliminar'>
    </form>

    <?php include 'CRUD/tabela.php';
?>
</div>

<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>