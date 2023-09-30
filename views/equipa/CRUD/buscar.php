<?php
include "../../dao/equipa_dao.php";
include "../../dao/__conexao.php";
include "../../class/equipa.php";
$equipaDAO = new EquipaDao();  
$equipaDAO->Buscar();
echo "<hr>";
?>