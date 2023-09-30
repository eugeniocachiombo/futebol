<?php
    class EquipaDao  
    {
        private $db = array();

        function Cadastrar($nome){
            $id = sizeof($this->db) + 1;
            $equipa = new Equipa($id, $nome);
            array_push($this->db, $equipa);
        }

        function Actualizar($nome, $id){
            $this->db[$id - 1]->setNomeEquipa($nome);
        }

        function Eliminar($id){
          unset($this->db[$id - 1]);
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