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

    function MarcarJogo($id) {
        $this->db = GetConexao();
        $jogo = $this->RetornoJogos($id);
        $sql = 'insert into jogos_marcados (temaJogo, idEquipaA, idEquipaB, horaJogo, dataJogo ) values ( ?,?,?,?,? )';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $jogo["temaJogo"]);
        $stmt->bindValue( 2, $jogo["idEquipaA"]);
        $stmt->bindValue( 3, $jogo["idEquipaB"]);
        $stmt->bindValue( 4, $jogo["horaJogo"]);
        $stmt->bindValue( 5, $jogo["dataJogo"]);

        if ( $stmt->execute() ) {
            echo '<br>Cadastro feito com sucesso';
            $equipaDAO = new EquipaDao();
            $retornoEquipaA = $equipaDAO->RetornoEquipas($jogo["idEquipaA"]);
            $retornoEquipaB = $equipaDAO->RetornoEquipas($jogo["idEquipaB"]);

            $equipaA = new Equipa($retornoEquipaA["idEquipa"], $retornoEquipaA["nomeEquipa"]);
            $equipaB = new Equipa($retornoEquipaB["idEquipa"], $retornoEquipaB["nomeEquipa"]);
            $jogo_novos_dados = new Jogo($id, $jogo["temaJogo"],$equipaA,$equipaB, $jogo["horaJogo"], $jogo["dataJogo"], true, false);
            $this->Actualizar( $jogo_novos_dados );
        } else {
            echo '<br>Erro de Cadastro';
        }
    }

    function BuscarJogosMarcados() {
        $this->db = GetConexao();
        $sql = 'select jogos_marcados.*, equipaA.nomeEquipa as equipaA,  equipaB.nomeEquipa as equipaB from jogos_marcados
        inner join equipa as equipaA
        on jogos_marcados.idEquipaA = equipaA.idEquipa  
        inner join equipa as equipaB
        on jogos_marcados.idEquipaB = equipaB.idEquipa';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll(); 
    }

    function Jogar($id) {
        $jogo = $this->RetornoJogos($id);
        if($jogo["estadoJogo"] == true){
            echo "Jogo A Decorrer: ";
            echo "<br> Tema: " . $jogo["temaJogo"];
            echo "<br> Equipas: " . $jogo["equipaA"] . " x ". $jogo["equipaB"] . "<br> ------------------------ <br>";
            
            $equipaDAO = new EquipaDao();
            $retornoEquipaA = $equipaDAO->RetornoEquipas($jogo["idEquipaA"]);
            $retornoEquipaB = $equipaDAO->RetornoEquipas($jogo["idEquipaB"]);

            $equipaA = new Equipa($retornoEquipaA["idEquipa"], $retornoEquipaA["nomeEquipa"]);
            $equipaB = new Equipa($retornoEquipaB["idEquipa"], $retornoEquipaB["nomeEquipa"]);
            $jogo_novos_dados = new Jogo($id, $jogo["temaJogo"],$equipaA,$equipaB, $jogo["horaJogo"], $jogo["dataJogo"], false, true);
            $this->Actualizar( $jogo_novos_dados );
        }
        else if($jogo["infoJogo"] == true){
            echo "<br> Este jogo Já aconteceu <br> ------------------------ <br>";
        } else{
            echo "<br> Este jogo ainda não foi marcado <br> ------------------------ <br>";
        }
    }

    function Info($id) {
        $jogo = $this->RetornoJogos($id);
        if($jogo["infoJogo"] == true){

            $info = $jogo["equipaA"] . " " . rand(0,5) . " x ". rand(0,5) . " " . $jogo["equipaB"] . "</h2> <br> ------------------------ ";
            echo "<h2> Resultado final:  <br>" .  $info;

            $this->Eliminar( $jogo["idJogo"] );
            $this->CadastrarResultadoFinal($info);
        }else{
            echo "<br> Nenhuma informação de momento <br> ------------------------ <br>";
        }
    }

    function CadastrarResultadoFinal($info){
        $sql = 'insert into resultado_final (info) values (?)';
        $stmt = $this->db->prepare( $sql );
        $stmt->bindValue( 1, $info );

        if ( $stmt->execute() ) {
            echo '<br>Cadastro feito com sucesso';
        } else {
            echo '<br>Erro de Cadastro';
        }
    }

    function ResultadoFinal() {
        $this->db = GetConexao();
        $sql = 'select * from resultado_final';
        $stmt = $this->db->prepare( $sql );
        $stmt->execute();
        return $stmt->fetchAll(); 
    }
}
?>