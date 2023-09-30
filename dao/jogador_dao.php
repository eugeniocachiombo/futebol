<?php
    class JogadorDao  
    {
        private $db = array();

      function Cadastrar($jogador){
          array_push($this->db, $jogador);
      }

      function Actualizar($jogador){
          $this->db[$jogador->getIdJogador() - 1] = $jogador;
      }

      function Eliminar($jogador){
        unset($this->db[$jogador->getIdJogador() - 1]);
      }

        function Buscar(){
          foreach ($this->db as $value) {
            echo "Id do Jogador: " . $value->getIdJogador();
            echo "<br>Nome do Jogador: " .  $value->getNomeJogador();
            echo "<br>Idade do Jogador: " .  $value->getIdadeJogador();
            echo "<br>Peso do Jogador: " .  $value->getPesoJogador();
            echo "<br>Altura do Jogador: " .  $value->getAlturaJogador();
            echo "<br>Equipa do Jogador: " .  $value->getEquipa()->getNomeEquipa();
            echo "<br> -------------- <br>";
          }
        }

        function RetornoJogadores(){
          return $this->db;
        }
    }
?>