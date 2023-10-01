<?php

class Jogo {

    private $idJogo;
    private $temaJogo;
    private $equipaA;
    private $equipaB;
    private $horaJogo;
    private $dataJogo;
    private $estadoJogo;
    private $infoJogo;
    
    function __construct($idJogo, $temaJogo, $equipaA, $equipaB, $horaJogo, $dataJogo, $estadoJogo, $infoJogo) {
        $this->idJogo = $idJogo;
        $this->temaJogo = $temaJogo;
        $this->equipaA = $equipaA;
        $this->equipaB = $equipaB;
        $this->horaJogo = $horaJogo;
        $this->dataJogo = $dataJogo;
        $this->estadoJogo = $estadoJogo;
        $this->infoJogo = $infoJogo;
    }
    
    function getIdJogo() {
        return $this->idJogo;
    }

    function getTemaJogo() {
        return $this->temaJogo;
    }

    function getEquipaA() {
        return $this->equipaA;
    }

    function getEquipaB() {
        return $this->equipaB;
    }

    function getHoraJogo() {
        return $this->horaJogo;
    }

    function getDataJogo() {
        return $this->dataJogo;
    }

    function getEstadoJogo() {
        return $this->estadoJogo;
    }

    function getInfoJogo() {
        return $this->infoJogo;
    }

    function setIdJogo($idJogo) {
        $this->idJogo = $idJogo;
    }

    function setTemaJogo($temaJogo) {
        $this->temaJogo = $temaJogo;
    }

    function setEquipaA($equipaA) {
        $this->equipaA = $equipaA;
    }

    function setEquipaB($equipaB) {
        $this->equipaB = $equipaB;
    }

    function setHoraJogo($horaJogo) {
        $this->horaJogo = $horaJogo;
    }

    function setDataJogo($dataJogo) {
        $this->dataJogo = $dataJogo;
    }

    function setEstadoJogo($estadoJogo) {
        $this->estadoJogo = $estadoJogo;
    }

    function setInfoJogo($infoJogo) {
        $this->infoJogo = $infoJogo;
    }
    
    

}

?>