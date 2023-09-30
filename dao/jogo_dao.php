<?php
    class JogoDao  
    {
        private $db = array();
        
        function Cadastrar($tema, $equipaA, $equipaB, $hora, $data){
            $id = sizeof($this->db) + 1;
            $Jogo = new Jogo($id, $tema, $equipaA, $equipaB, $hora, $data);
            array_push($this->db, $Jogo);
        }

        function Actualizar($tema, $equipaA, $equipaB, $hora, $data, $id){
            $this->db[$id - 1]->setTemaJogo($tema);
            $this->db[$id - 1]->setEquipaAJogo($equipaA);
            $this->db[$id - 1]->setEquipaBJogo($equipaB);
            $this->db[$id - 1]->setHoraJogoJogo($hora);
            $this->db[$id - 1]->setDataJogo($data);
        }

        function Eliminar($id){
          unset($this->db[$id - 1]);
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