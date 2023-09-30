<?php
include '../../dao/equipa_dao.php';
include '../../dao/__conexao.php';
include '../../class/equipa.php';

$equipaDAO = new EquipaDao();
$lista = $equipaDAO->Buscar();
?>

<hr>
<h2>Tabela de dados</h2>
<table border='1'>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
    <tr>
        <?php
            echo '<td>' . $value[ 'idEquipa' ] . '</td>';
            echo '<td>' . $value[ 'nomeEquipa' ] . '</td>';
        ?>
    </tr>
    <?php } ?>
    
</table>