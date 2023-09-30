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
    
    $equipaDAO = new EquipaDao();
    $equipaDAO->Cadastrar("Barcelona");
    $equipaDAO->Cadastrar("Real Madrid");
    $equipaDAO->Cadastrar("Bayer");
    $equipaDAO->Cadastrar("PSG");
    $equipaDAO->Cadastrar("Manchester City");
    $equipaDAO->Cadastrar("Manchester United");
    $equipaDAO->Actualizar("PSG", 4);
    //$equipaDAO->Eliminar(1);
    $equipaDAO->Buscar();
    echo "<hr>";

    $equipa = $equipaDAO->RetornoEquipas();
    $jogadorDAO = new JogadorDao();
    $jogadorDAO->Cadastrar("Ronaldo", 39, 87.90, 1.90, $equipa[1]);
    $jogadorDAO->Buscar();
    echo "<hr>";
    $equipa = $equipaDAO->RetornoEquipas();
    $jogadorDAO = new JogadorDao();
    $jogadorDAO->Cadastrar("Messi", 39, 87.90, 1.90, $equipa[0]);
    $jogadorDAO->Buscar();
    echo "<hr>";



    $jogoDAO = new JogoDao();
    $jogoDAO->Cadastrar("Partida Amigável", $equipa[rand(0,2)], $equipa[rand(3,5)], "10:30", "12/04/2024");
    $jogoDAO->Buscar();
    $jogo = $jogoDAO->RetornoJogos();
    echo "<hr>";
    $jogo[0]->MarcarJogo();
    $jogo[0]->Jogar();
    $jogo[0]->info();
    echo "<hr>";

?>
