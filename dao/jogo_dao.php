<?php
    class JogoDao  
    {
        private $db = array();
        
        function Cadastrar($jogo){
          array_push($this->db, $jogo);
      }

      function Actualizar($jogo){
          $this->db[$jogo->getIdJogo() - 1] = $jogo;
      }

      function Eliminar($jogo){
        unset($this->db[$jogo->getIdJogo() - 1]);
      }

        function Buscar(){
          foreach ($this->db as $value) {
            echo "Id do Jogo: " . $value->getIdJogo();
            echo "<br>tema do Jogo: " .  $value->getTemaJogo();
            echo "<br>equipaA do Jogo: " .  $value->getEquipaA()->getNomeEquipa();
            echo "<br>equipaB do Jogo: " .  $value->getEquipaB()->getNomeEquipa();
            echo "<br>horaJogo do Jogo: " .  $value->getHoraJogo();
            echo "<br>Data do Jogo: " .  $value->getDataJogo();
            echo "<br> -------------- <br>";
          }
        }

        function RetornoJogos(){
          return $this->db;
        }
    }
?>