<?php
include '../../dao/jogador_dao.php';
include '../../class/jogador.php';

$jogadorDAO = new JogadorDao();
$lista = $jogadorDAO->Buscar();
?>

<hr>
<h2>Tabela de dados</h2>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Peso</th>
        <th>Altura</th>
        <th>Equipa</th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
    <tr>
        <?php
            echo '<td>' . $value["idJogador"] . '</td>';
            echo '<td>' . $value["nomeJogador"] . '</td>';
            echo '<td>' . $value["idadeJogador"] . '</td>';
            echo '<td>' . $value["pesoJogador"] . '</td>';
            echo '<td>' . $value["alturaJogador"] . '</td>';
            echo '<td>' . $value["nomeEquipa"] . '</td>';
        ?>
    </tr>
    <?php } ?>
    
</table>