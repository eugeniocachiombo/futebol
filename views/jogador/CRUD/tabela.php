<?php
include '../../dao/jogador_dao.php';
include '../../class/jogador.php';

$jogadorDAO = new JogadorDao();
$lista = $jogadorDAO->Buscar();
?>

<link rel="stylesheet" href="../../assets/css/tabela.css">


<h2>Tabela de dados</h2>
<div id="table-responsive">
    <table border='1'>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Idade</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Equipa</th>
            <th colspan="2"></th>
        </tr>

        <?php foreach ( $lista as $value ) { ?>
        <tr>
            <form action="CRUD/index.php" method="post">
                
                <td>
                    <?php echo $value["idJogador"];  ?>
                    <input value="<?php echo $value["idJogador"];  ?>" type="hidden" name="idJogador" id="idJogador" placeholder="Id" >
                </td>
                
                <td> 
                    <?php echo $value["nomeJogador"]; ?>
                    <input value="<?php echo $value["nomeJogador"]; ?>" type="hidden" name="nomeJogador" id="nomeJogador" placeholder="Nome">
                </td>

                <td> 
                    <?php echo $value["idadeJogador"]; ?> 
                    <input value="<?php echo $value["idadeJogador"]; ?> " type="hidden" name="idadeJogador" id="idadeJogador" placeholder="Idade">
                </td>

                <td> 
                    <?php echo $value["pesoJogador"]; ?> 
                    <input value="<?php echo $value["pesoJogador"]; ?>" type="hidden" name="pesoJogador" id="pesoJogador" placeholder="Peso">
                </td>

                <td> 
                    <?php echo $value["alturaJogador"]; ?>
                    <input value="<?php echo $value["alturaJogador"]; ?>" type="hidden" name="alturaJogador" id="alturaJogador" placeholder="Altura">
                </td>

                <td> 
                    <?php echo $value["nomeEquipa"]; ?> 
                    <input value="<?php echo $value["nomeEquipa"]; ?> " type="hidden" name="idEquipa" id="idEquipa" placeholder="Equipa">
                </td>
            
                <td><input type="submit" value="Actualizar" name="actualizar"></td>
                <td><input type="submit" value="Eliminar" name="eliminar"></td>
            </form>
        </tr>
        <?php } ?>
        
    </table>
</div>