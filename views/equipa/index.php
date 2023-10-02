<?php include '../../views/inc/headHTML.html';?>
<?php include '../../views/inc/header.html';?>
<?php include '../../route/pegarURI.php';?>

<title>Formulário de Equipa</title>

<div class='container' style="min-height: 60vh">
    <a href='../../'>Início</a>
    <hr>
    <?php
        if($uri_rota[4] == "index.php?actualizar"){
            include 'CRUD/form_actualizar.php';
        }else{
            include 'CRUD/form_cadastrar.php';
        }
    ?>
    <hr>
    <?php include 'CRUD/tabela.php';?>
</div>

<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>