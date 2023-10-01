<?php include '../../views/inc/headHTML.html';?>
<?php include '../../views/inc/header.html';?>

<?php
include '../../dao/__conexao.php';
include '../../dao/equipa_dao.php';
?>

<title>Formulário de Jogo</title>

<div class='container' style="min-height: 60vh">
    <a href="../../">Início</a> <hr>
    <a href="CRUD/resultados.php">resultados</a> <hr>
    <form action="CRUD/index.php" method="post">
        <b>Formulário de Jogo</b> <br> <br>
        <input type="text" name="idJogo" id="idJogo" placeholder="Id" style="width: 50px">
        <input type="text" name="temaJogo" id="temaJogo" placeholder="Tema"> <br> <br>

        <select name="idEquipaA" id=""> 
            <option value="">Selecione...</option>
            <?php 
                $equipaDAO = new EquipaDao();
                $lista = $equipaDAO->Buscar();
                foreach ( $lista as $value ) { ?>
                    <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
                <?php } ?>
       </select> 

        <select name="idEquipaB" id=""> 
            <option value="">Selecione...</option>
            <?php 
                $equipaDAO = new EquipaDao();
                $lista = $equipaDAO->Buscar();
                foreach ( $lista as $value ) { ?>
                    <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
                <?php } ?>
       </select> <br> <br>

        <input type="text" name="horaJogo" id="horaJogo" placeholder="Hora"> 
        <input type="text" name="dataJogo" id="dataJogo" placeholder="Data"> <br> <br>
        

        <input type="submit" value="Cadastrar" name="cadastrar"> 
        <input type="submit" value="Actualizar" name="actualizar">
        <input type="submit" value="Eliminar" name="eliminar"> <br> <br>

        <input type="submit" name="marcar_jogo" value="Marcar Jogo"> 
        <input type="submit" name="jogar" value="Jogar">
        <input type="submit" name="info" value="Informações"> <br> <br>
    </form>
    
    <?php include "CRUD/tabela.php"; ?>
    <?php include "CRUD/jogos_marcados.php"; ?>
</div>


<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>