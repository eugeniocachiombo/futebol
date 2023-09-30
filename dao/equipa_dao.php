<?php
include 'dao/__conexao.php';

class EquipaDao {

    private $db;

    function Cadastrar( $equipa ) {
      
        $this->db = GetConexao();
        $sql = 'insert into equipa ( nomeEquipa ) values ( ? )';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $equipa->getNomeEquipa() );

        if ( $stmt->execute() ) {
            echo '<br>Cadastro feito com sucesso';
        } else {
            echo '<br>Erro de Cadastro';
        }

    }

    function Actualizar( $equipa ) {

        $this->db = GetConexao();
        $sql = 'update equipa set nomeEquipa = ? where idEquipa = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $equipa->getNomeEquipa() );
        $stmt->bindValue( 2, $equipa->getIdEquipa() );

        if ( $stmt->execute() ) {
            echo '<br>Actualização feito com sucesso';
        } else {
            echo '<br>Erro de Actualização';
        }
    }

    function Eliminar( $equipa ) {

        $this->db = GetConexao();
        $sql = 'delete from equipa where idEquipa = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $equipa->getIdEquipa() );

        if ( $stmt->execute() ) {
            echo '<br>Eliminado feito com sucesso';
        } else {
            echo '<br>Erro ao Eliminar';
        }
    }

    function Buscar() {
        $this->db = GetConexao();
        $sql = 'select * from equipa';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();

        foreach ( $stmt->fetchAll() as $value ) {
            echo '<br>Id da Equipa: ' . $value["idEquipa"];
            echo '<br>Nome da Equipa: ' .  $value["nomeEquipa"];
            echo '<br> -------------- <br>';
        }
    }

    function RetornoEquipas() {
        $this->db = GetConexao();
        $sql = 'select * from equipa';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>