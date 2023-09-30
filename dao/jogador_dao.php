<?php
    class JogadorDao  
    {
        private $db = array();

        function Cadastrar($nome, $idade, $peso, $altura, $equipa){
            $id = sizeof($this->db) + 1;
            $jogador = new Jogador($id, $nome, $idade, $peso, $altura, $equipa);
            array_push($this->db, $jogador);
        }

        function Actualizar($nome, $idade, $peso, $altura, $equipa, $id){
            $this->db[$id - 1]->setNomeJogador($nome);
            $this->db[$id - 1]->setIdadeJogador($idade);
            $this->db[$id - 1]->setPesoJogador($peso);
            $this->db[$id - 1]->setAlturaJogador($altura);
            $this->db[$id - 1]->setEquipa($equipa);
        }

        function Eliminar($id){
          unset($this->db[$id - 1]);
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