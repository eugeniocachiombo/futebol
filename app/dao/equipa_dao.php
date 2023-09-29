<?php
    class EquipaDao  
    {
        function Cadastrar($equipa, $db){
            array_push($db, $equipa);
        }

        function Actualizar($equipaNova, $equipaAntiga, $db){
            $posicao = array_search($equipaAntiga, $db);
            $db[$posicao] = $equipaNova;
        }

        function Eliminar($equipa, $db){
            $posicao = array_search($equipa, $db);
            array_splice($db, $posicao, $posicao);
        }

        function Buscar(){
          echo "Id da Equipa: " . $db->getIdEquipa();
          echo "<br>Nome da Equipa: " .  $db->getNomeEquipa();
        }
    }
?>