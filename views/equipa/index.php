<?php include '../../views/inc/headHTML.html';?>
<?php include '../../views/inc/header.html';?>

<title>Formulário de Equipa</title>

<div class='container-fluid'>
    <a href='../../'>Início</a>
    <hr>
    <form class="text-center" action='CRUD/index.php' method='post'>
        <legend><b>Cadastrar de Equipa <hr></b></legend> <br>
        <input type='hidden' name='idEquipa' id='idEquipa' placeholder='Id'> 
        <input type='text' name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> 
        <input class="mt-3 mb-3" style="width: 200px" type='submit' value='Cadastrar' name='cadastrar'>
    </form>

    <center>
        <?php include 'CRUD/tabela.php';?>
    </center>
    
</div>

<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>