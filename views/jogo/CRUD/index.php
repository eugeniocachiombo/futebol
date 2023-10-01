<?php

include "../../../dao/__conexao.php";
include "../../../dao/equipa_dao.php";
include "../../../dao/Jogo_dao.php";
include "../../../class/Jogo.php";
include "../../../class/equipa.php";

$idJogo = $_POST["idJogo"];
$temaJogo = $_POST["temaJogo"];
$idEquipaA = $_POST["idEquipaA"];
$idEquipaB = $_POST["idEquipaB"];
$horaJogo = $_POST["horaJogo"];
$dataJogo = $_POST["dataJogo"];

$equipaDAO = new EquipaDao();
$retornoEquipaA = $equipaDAO->RetornoEquipas($idEquipaA);
$retornoEquipaB = $equipaDAO->RetornoEquipas($idEquipaB);
$equipaA = new Equipa($retornoEquipaA["idEquipa"], $retornoEquipaA["nomeEquipa"]);
$equipaB = new Equipa($retornoEquipaB["idEquipa"], $retornoEquipaB["nomeEquipa"]);

$jogo = new Jogo($idJogo, $temaJogo, $equipaA, $equipaB, $horaJogo, $dataJogo, false, false);
$jogoDAO = new JogoDao();
        
if (isset($_POST["cadastrar"])) {
    $jogoDAO->Cadastrar($jogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}

if (isset($_POST["actualizar"])) {
    $jogoDAO->Actualizar($jogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}

if (isset($_POST["eliminar"])) {
    $jogoDAO->Eliminar($idJogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}

if (isset($_POST["marcar_jogo"])) {
    $jogoDAO->MarcarJogo($idJogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}

if (isset($_POST["jogar"])) {
    $jogoDAO->Jogar($idJogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}

if (isset($_POST["info"])) {
    $jogoDAO->Info($idJogo);
    ?> <script src="../../../assets/js/Jogo/index.js"></script> <?php
}


