<?php
$lista = $jogoDAO->BuscarJogosMarcados();
?>

<hr>
<h2>Jogos Marcados</h2>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Tema</th>
        <th>Equipas</th>
        <th>Hora</th>
        <th>Data</th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
    <tr>
        <?php
            echo '<td>' . $value["idJogo_marcado"] . '</td>';
            echo '<td>' . $value["temaJogo"] . '</td>';
            echo '<td>' . $value["equipaA"] . " x ". $value["equipaB"] . '</td>';
            echo '<td>' . $value["horaJogo"] . '</td>';
            echo '<td>' . $value["dataJogo"] . '</td>';
        ?>
    </tr>
    <?php } ?>
    
</table>