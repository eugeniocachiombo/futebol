<?php include '../../views/inc/headHTML.html';?>
<?php include '../../views/inc/header.html';?>

<title>Formulário de Equipa</title>

<div class='container' style="min-height: 60vh">
    <a href='../../'>Início</a>
    <hr>
    <form class="" action='CRUD/index.php' method='post'>
        <legend><b>Cadastrar de Equipa</b></legend> <br>
        <input type='hidden' name='idEquipa' id='idEquipa' placeholder='Id'> 
        <input type='text' name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> 
        <input class="mt-3 mb-3" style="width: 200px" type='submit' value='Cadastrar' name='cadastrar'>
    </form>

    <?php include 'CRUD/tabela.php';?>
</div>

<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>