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
        <div class="row">
            <h2><b>Formulário de Jogo</b> </h2>
            <div class="col">
                <input type="text" name="idJogo" id="idJogo" placeholder="Id">
                <input type="text" name="temaJogo" id="temaJogo" placeholder="Tema"> 
            </div>

            <div class="col">
                <input type="text" name="horaJogo" id="horaJogo" placeholder="Hora"> 
                <input type="text" name="dataJogo" id="dataJogo" placeholder="Data"> 
            </div>

            <div class="col">
                <div class="col">
                    <select name="idEquipaA" id="idEquipaA"> 
                        <option value="">Selecione...</option>
                        <?php 
                            $equipaDAO = new EquipaDao();
                            $lista = $equipaDAO->Buscar();
                            foreach ( $lista as $value ) { ?>
                                <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
                            <?php } ?>
                    </select> 
                </div>

                <div class="col">
                    <select name="idEquipaB" id="idEquipaB"> 
                        <option value="">Selecione...</option>
                        <?php 
                            $equipaDAO = new EquipaDao();
                            $lista = $equipaDAO->Buscar();
                            foreach ( $lista as $value ) { ?>
                                <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
                            <?php } ?>
                    </select>             
                </div>
            </div>
        </div>

        <div class="pt-3" > 
            <input type="submit" value="Cadastrar" name="cadastrar" style="width: 205px"> 
        </div>
    </form>
    
    <?php include "CRUD/tabela.php"; ?>
    
</div>


<br>
<?php include '../../views/inc/footer.html';?>
<?php include '../../views/inc/footHTML.html';?>