<?php
include '../../dao/__conexao.php';
include '../../dao/jogo_dao.php';
include '../../class/jogo.php';
$jogoDAO = new JogoDao();
$lista = $jogoDAO->BuscarJogosMarcados();
?>


<hr>
<h2>Jogos Marcados</h2>
<div id="table-responsive">
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Tema</th>
        <th>Equipas</th>
        <th>Hora</th>
        <th>Data</th>
        <th></th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
    <tr>
        <?php
            echo '<td>' . $value["idJogo_marcado"] . '</td>';
            echo '<td>' . $value["temaJogo"] . '</td>';
            echo '<td>' . $value["equipaA"] . " x ". $value["equipaB"] . '</td>';
            echo '<td>' . $value["horaJogo"] . '</td>';
            $tratar = explode("-", $value["dataJogo"]);
            echo "<td>" . $tratar[2] . "-" . $tratar[1] . "-" . $tratar[0] . '</td>';
        ?>
        <td>Excluir</td>
    </tr>
    <?php } ?>
    
</table>
    </div>