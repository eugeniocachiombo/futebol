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
    
    function __construct($idJogo, $temaJogo, $equipaA, $equipaB, $horaJogo, $dataJogo) {
        $this->idJogo = $idJogo;
        $this->temaJogo = $temaJogo;
        $this->equipaA = $equipaA;
        $this->equipaB = $equipaB;
        $this->horaJogo = $horaJogo;
        $this->dataJogo = $dataJogo;
        $this->estadoJogo = false;
        $this->infoJogo = false;
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
    
    function MarcarJogo() {
        echo "Jogo Marcado: ";
        echo "<br> Tema: " . $this->getTemaJogo();
        echo "<br> Equipas: " . $this->equipaA->getNomeEquipa() . " x ". $this->equipaB->getNomeEquipa();
        echo "<br> Hora: " . $this->getHoraJogo();
        echo "<br> Data: " .$this->getDataJogo();
        echo "<br> --------------------------------- <br>";
        $this->setEstadoJogo(true);
    }

    function Jogar() {
        if($this->getEstadoJogo() == true){
            echo "Jogo A Decorrer: ";
            echo "<br> Tema: " . $this->getTemaJogo();
            echo "<br> Equipas: " . $this->equipaA->getNomeEquipa() . " x ". $this->equipaB->getNomeEquipa(). "<br> ------------------------ <br>";
            $this->setInfoJogo(true);
        }else{
            echo "<br> Este jogo ainda não foi marcado <br> ------------------------ <br>";
            $this->setInfoJogo(false);
        }
    }

    function Info() {
        if($this->getInfoJogo() == true){
            echo "<h2> Resultado final:  <br>" . $this->equipaA->getNomeEquipa() . " " . rand(0,5) . " x ". rand(0,5) . " " . $this->equipaB->getNomeEquipa() . "</h2> <br> ------------------------ ";
        }else{
            echo "<br> Nenhuma informação de momento <br> ------------------------ <br>";
        }
    }

}

?>