<?php
include '../../dao/jogo_dao.php';
include '../../class/jogo.php';

$jogoDAO = new JogoDao();
$lista = $jogoDAO->Buscar();
?>
<link rel="stylesheet" href="../../assets/css/tabela.css">

<hr>
<h2>Tabela de dados</h2>
<div id="table-responsive">
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Tema</th>
        <th>Equipas</th>
        <th>Hora</th>
        <th>Data</th>
        <th>Estado</th>
        <th>Info</th>
        <th colspan="4"></th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
        <form action="CRUD/index.php" method="post">
            <tr>
                <?php
                    echo '<td>' . $value["idJogo"] . '</td>';
                    echo '<td>' . $value["temaJogo"] . '</td>';
                    echo '<td>' . $value["equipaA"] . " x ". $value["equipaB"] . '</td>';
                    echo '<td>' . $value["horaJogo"] . '</td>';
                    echo '<td>' . $value["dataJogo"] . '</td>';
                    echo '<td>' . $value["estadoJogo"] . '</td>';
                    echo '<td>' . $value["infoJogo"] . '</td>';
                ?>
                <input value="<?php echo $value["idJogo"]; ?>" type="hidden" name="idJogo" id="idJogo" placeholder="Id" style="width: 50px">
                <input type="hidden" name="temaJogo" id="temaJogo" > 
                <input type="hidden" name="idEquipaA" id="idEquipaA"> 
                <input type="hidden" name="idEquipaB" id="idEquipaB"> 
                <input type="hidden" name="horaJogo" id="horaJogo" > 
                <input type="hidden" name="dataJogo" id="dataJogo" > 

                <td><input type="submit" name="marcar_jogo" value="Marcar Jogo"> </td>
                <td><input type="submit" name="jogar" value="Jogar"></td>
                <td><input type="submit" name="info" value="Informações"></td>
                <td><input type="submit" value="Eliminar" name="eliminar"></td>
            </tr>
        </form>
    <?php } ?>
    
</table>
</div>