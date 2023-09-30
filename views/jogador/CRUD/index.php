<?php

include "../../../dao/__conexao.php";
include "../../../dao/equipa_dao.php";
include "../../../dao/jogador_dao.php";
include "../../../class/jogador.php";
include "../../../class/equipa.php";

$idJogador = $_POST["idJogador"];
$nomeJogador = $_POST["nomeJogador"];
$idadeJogador = $_POST["idadeJogador"];
$pesoJogador = $_POST["pesoJogador"];
$alturaJogador = $_POST["alturaJogador"];
$idEquipa = $_POST["idEquipa"];

$equipaDAO = new EquipaDao();
$retornoEquipa = $equipaDAO->RetornoEquipas($idEquipa);
$equipa = new Equipa($retornoEquipa["idEquipa"], $retornoEquipa["nomeEquipa"]);

$jogador = new Jogador($idJogador, $nomeJogador, $idadeJogador, $pesoJogador, $alturaJogador, $equipa); 
$jogadorDAO = new JogadorDao();
        
if (isset($_POST["cadastrar"])) {
    $jogadorDAO->Cadastrar($jogador);
    ?> <script src="../../../assets/js/jogador/index.js"></script> <?php
}

if (isset($_POST["actualizar"])) {
    $jogadorDAO->Actualizar($jogador);
    ?> <script src="../../../assets/js/jogador/index.js"></script> <?php
}

if (isset($_POST["eliminar"])) {
    $jogadorDAO->Eliminar($idJogador);
    ?> <script src="../../../assets/js/jogador/index.js"></script> <?php
}


