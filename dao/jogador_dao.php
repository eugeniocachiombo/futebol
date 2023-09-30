<?php

class JogadorDao {
    private $db;

    function Cadastrar( $jogador ) {

        $this->db = GetConexao();
        $sql = 'insert into jogador (nomeJogador, idadeJogador, pesoJogador, alturaJogador, idEquipa) values ( ?,?,?,?,? )';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $jogador->getNomeJogador() );
        $stmt->bindValue( 2, $jogador->getIdadeJogador() );
        $stmt->bindValue( 3, $jogador->getPesoJogador() );
        $stmt->bindValue( 4, $jogador->getAlturaJogador() );
        $stmt->bindValue( 5, $jogador->getEquipa()->getIdEquipa() );

       if ( $stmt->execute() ) {
            echo '<br>Cadastro feito com sucesso';
        } else {
            echo '<br>Erro de Cadastro';
        }
    }

    function Actualizar( $jogador ) {
        $this->db = GetConexao();
        $sql = 'update jogador set nomeJogador=?, idadeJogador=?, pesoJogador=?, alturaJogador=?, idEquipa=? where idJogador = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $jogador->getNomeJogador() );
        $stmt->bindValue( 2, $jogador->getIdadeJogador() );
        $stmt->bindValue( 3, $jogador->getPesoJogador() );
        $stmt->bindValue( 4, $jogador->getAlturaJogador() );
        $stmt->bindValue( 5, $jogador->getEquipa()->getIdEquipa());
        $stmt->bindValue( 6, $jogador->getIdJogador() );
        
        if ( $stmt->execute() ) {
            echo '<br>Actualização feito com sucesso';
        } else {
            echo '<br>Erro de Actualização';
        }
    }

    function Eliminar( $id ) {
        $this->db = GetConexao();
        $sql = 'delete from jogador where idJogador = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $id );

        if ( $stmt->execute() ) {
            echo '<br>Eliminação feito com sucesso';
        } else {
            echo '<br>Erro de Eliminação';
        }
    }

    function Buscar() {
        $this->db = GetConexao();
        $sql = 'select * from jogador
                inner join equipa
                on equipa.idEquipa = jogador.idEquipa';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function RetornoJogadores() {
        $this->db = GetConexao();
        $sql = 'select * from jogador
        inner join equipa
        on equipa.idEquipa = jogador.idEquipa where idJogador = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $id );
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>