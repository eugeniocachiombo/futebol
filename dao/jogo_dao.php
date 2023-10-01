<?php

class JogoDao {
    private $db;

    function Cadastrar( $jogo ) {
        $this->db = GetConexao();
        $sql = 'insert into jogo (temaJogo, idEquipaA, idEquipaB, horaJogo, dataJogo, estadoJogo, infoJogo) values ( ?,?,?,?,?,?,? )';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $jogo->getTemaJogo() );
        $stmt->bindValue( 2, $jogo->getEquipaA()->getIdEquipa() );
        $stmt->bindValue( 3, $jogo->getEquipaB()->getIdEquipa() );
        $stmt->bindValue( 4, $jogo->getHoraJogo() );
        $stmt->bindValue( 5, $jogo->getDataJogo() );
        $stmt->bindValue( 6, $jogo->getEstadoJogo() );
        $stmt->bindValue( 7, $jogo->getInfoJogo() );

        if ( $stmt->execute() ) {
            echo '<br>Cadastro feito com sucesso';
        } else {
            echo '<br>Erro de Cadastro';
        }
    }

    function Actualizar( $jogo ) {
        $this->db = GetConexao();
        $sql = 'update jogo set temaJogo=?, idEquipaA=?, idEquipaB=?, horaJogo=?, dataJogo=?,estadoJogo=?, infoJogo=? where idJogo=?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $jogo->getTemaJogo() );
        $stmt->bindValue( 2, $jogo->getEquipaA()->getIdEquipa() );
        $stmt->bindValue( 3, $jogo->getEquipaB()->getIdEquipa() );
        $stmt->bindValue( 4, $jogo->getHoraJogo() );
        $stmt->bindValue( 5, $jogo->getDataJogo() );
        $stmt->bindValue( 6, $jogo->getEstadoJogo() );
        $stmt->bindValue( 7, $jogo->getInfoJogo() );
        $stmt->bindValue( 8, $jogo->getIdJogo() );

        if ( $stmt->execute() ) {
            echo '<br>Actualizar feito com sucesso';
        } else {
            echo '<br>Erro ao Actualizar';
        }
    }

    function Eliminar( $id ) {
        $this->db = GetConexao();
        $sql = 'delete from jogo where idJogo = ?';
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
        $sql = 'select jogo.*, equipaA.nomeEquipa as equipaA,  equipaB.nomeEquipa as equipaB from jogo
        inner join equipa as equipaA
        on jogo.idEquipaA = equipaA.idEquipa  
        inner join equipa as equipaB
        on jogo.idEquipaB = equipaB.idEquipa';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll(); 
    }

    function RetornoJogos($id) {
        $this->db = GetConexao();
        $sql = 'select jogo.*, equipaA.nomeEquipa as equipaA,  equipaB.nomeEquipa as equipaB from jogo
        inner join equipa as equipaA
        on jogo.idEquipaA = equipaA.idEquipa  
        inner join equipa as equipaB
        on jogo.idEquipaB = equipaB.idEquipa
        where idJogo = ?';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
?>