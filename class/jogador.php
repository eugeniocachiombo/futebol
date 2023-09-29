<?php

    class Jogador{
        
        private $idJogador;
        private $nomeJogador;
        private $idadeJogador;
        private $pesoJogador;   
        private $alturaJogador;   
        private $equipa;   
        
        function __construct($idJogador, $nomeJogador, $idadeJogador, $pesoJogador, $alturaJogador, $equipa) {
            $this->idJogador = $idJogador;
            $this->nomeJogador = $nomeJogador;
            $this->idadeJogador = $idadeJogador;
            $this->pesoJogador = $pesoJogador;
            $this->alturaJogador = $alturaJogador;
            $this->equipa = $equipa;
        }

        function getIdJogador() {
            return $this->idJogador;
        }

        function getNomeJogador() {
            return $this->nomeJogador;
        }

        function getIdadeJogador() {
            return $this->idadeJogador;
        }

        function getPesoJogador() {
            return $this->pesoJogador;
        }

        function getAlturaJogador() {
            return $this->alturaJogador;
        }

        function getEquipa() {
            return $this->equipa;
        }

        function setIdJogador($idJogador) {
            $this->idJogador = $idJogador;
        }

        function setNomeJogador($nomeJogador) {
            $this->nomeJogador = $nomeJogador;
        }

        function setIdadeJogador($idadeJogador) {
            $this->idadeJogador = $idadeJogador;
        }

        function setPesoJogador($pesoJogador) {
            $this->pesoJogador = $pesoJogador;
        }

        function setAlturaJogador($alturaJogador) {
            $this->alturaJogador = $alturaJogador;
        }

        function setEquipa($equipa) {
            $this->equipa = $equipa;
        }


    }
    
?>