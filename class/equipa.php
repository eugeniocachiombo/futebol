<?php

class Equipa {
    
    private $idEquipa;
    private $nomeEquipa;
    
    function __construct($idEquipa, $nomeEquipa) {
        $this->idEquipa = $idEquipa;
        $this->nomeEquipa = $nomeEquipa;
    }
    
    function getIdEquipa() {
        return $this->idEquipa;
    }

    function getNomeEquipa() {
        return $this->nomeEquipa;
    }

    function setIdEquipa($idEquipa) {
        $this->idEquipa = $idEquipa;
    }

    function setNomeEquipa($nomeEquipa) {
        $this->nomeEquipa = $nomeEquipa;
    }


}
?>