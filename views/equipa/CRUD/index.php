<?php

include "../../../dao/equipa_dao.php";
include "../../../dao/__conexao.php";
include "../../../class/equipa.php";

$idEquipa = $_POST["idEquipa"];
$nomeEquipa = $_POST["nomeEquipa"];
$equipa = new Equipa($idEquipa, $nomeEquipa);
$equipaDAO = new EquipaDao();       
        
if (isset($_POST["cadastrar"])) {
    $equipaDAO->Cadastrar($equipa);
    ?> <script src="../../../assets/js/equipa/index.js"></script> <?php
}

if (isset($_POST["actualizar"])) {
    $equipaDAO->Actualizar($equipa);
    ?> <script src="../../../assets/js/equipa/index.js"></script> <?php
}

if (isset($_POST["eliminar"])) {
    $equipaDAO->Eliminar($idEquipa);
    ?> <script src="../../../assets/js/equipa/index.js"></script> <?php
}


