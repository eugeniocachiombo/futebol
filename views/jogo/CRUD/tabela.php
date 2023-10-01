<?php
include '../../dao/jogo_dao.php';
include '../../class/jogo.php';

$jogoDAO = new JogoDao();
$lista = $jogoDAO->Buscar();
?>

<hr>
<h2>Tabela de dados</h2>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Tema</th>
        <th>Equipas</th>
        <th>Hora</th>
        <th>Data</th>
        <th>Estado</th>
        <th>Info</th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
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
    </tr>
    <?php } ?>
    
</table>