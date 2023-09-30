<a href="views/equipa/">Equipa</a> <br>
<a href="views/jogador/">Jogador</a> <br>
<a href="views/jogo/">Jogo</a> <br>

<?php
    include 'class/equipa.php';
    include 'class/jogador.php';
    include 'class/jogo.php';
    include 'dao/equipa_dao.php';
    include 'dao/jogador_dao.php';
    include 'dao/jogo_dao.php';
    
    /* 
     * 
     * Sempre que for para instânciar:
     * Equipa recebe 2 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * Jogador recebe 5 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * jogo recebe 7 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * 
     */
    
        
   

    /*
        $equipaDAO = new EquipaDao();
        $retornoDao = $equipaDAO->RetornoEquipas(26);

        $equipaA = new Equipa($retornoDao["idEquipa"], $retornoDao["nomeEquipa"]);
        $equipaB = new Equipa($retornoDao["idEquipa"], $retornoDao["nomeEquipa"]);

        $jogo = new Jogo(4, "Partida Amigável", $equipaA, $equipaB, "10:30", "2024-04-18", false, false);
        $jogoDAO = new JogoDao();

        //$jogoDAO->Cadastrar($jogo);
        //$jogoDAO->Actualizar($jogo);
        //$jogoDAO->Eliminar($id);
        //$jogoDAO->Buscar();
        echo "<hr>";

        $retornoMetodos = $jogoDAO->RetornoJogos(6);
        $Busca = new Jogo($retornoMetodos["idJogo"], $retornoMetodos["temaJogo"], $equipaA, $equipaB, $retornoMetodos["horaJogo"], $retornoMetodos["dataJogo"], $retornoMetodos["estadoJogo"], $retornoMetodos["infoJogo"]);
        $Busca->MarcarJogo();
        $Busca->Jogar();
        $Busca->info();
    */
?>
