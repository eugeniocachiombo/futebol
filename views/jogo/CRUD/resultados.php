<a href="../">Voltar</a>
<?php
include '../../../dao/__conexao.php';
include '../../../dao/jogo_dao.php';
$jogoDAO = new JogoDao();
$lista = $jogoDAO->ResultadoFinal();
?>

<hr>
<h2>Resultados: </h2>

<?php 
foreach ( $lista as $value ) {
    echo "<h1>" . $value[ 'info' ] . "</h1>" ;
}
?>
