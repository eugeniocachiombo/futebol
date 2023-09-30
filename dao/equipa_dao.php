<?php
    class EquipaDao  
    {
        private $db = array();

        function Cadastrar($equipa){
            array_push($this->db, $equipa);
        }

        function Actualizar($equipa){
            $this->db[$equipa->getIdEquipa() - 1] = $equipa;
        }

        function Eliminar($equipa){
          unset($this->db[$equipa->getIdEquipa() - 1]);
        }

        function Buscar(){
          foreach ($this->db as $value) {
            echo "Id da Equipa: " . $value->getIdEquipa();
            echo "<br>Nome da Equipa: " .  $value->getNomeEquipa();
            echo "<br> -------------- <br>";
          }
        }

        function RetornoEquipas(){
          return $this->db;
        }
    }
?>