<?php
$jogoDAO = new JogoDao();
$lista = $jogoDAO->ResultadoFinal();
?>

<hr>
<h2>Resultados: </h2>

<div id="table-responsive">
    <table style="width: 800px" >
        <tr>
            <th class="text-start">Jogos decorridos</th>
        </tr>

        <?php foreach ( $lista as $value ) { ?>
        <tr>
            <?php
                echo '<td class="text-start">' . $value[ 'info' ]. '</td>';
            ?>
        </tr>
        <?php } ?>
        
    </table>
</div>