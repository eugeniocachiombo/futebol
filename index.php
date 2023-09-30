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
    
    $equipaA = new Equipa(1, "Barcelona"); 
    $equipaB = new Equipa(2, "Real"); 
    $equipaC = new Equipa(3, "PSG"); 
    $equipaDAO = new EquipaDao();

    $equipaDAO->Cadastrar($equipaA);
    $equipaDAO->Actualizar($equipaB);
    $equipaDAO->Eliminar($equipaA);
    $equipaDAO->Buscar();
    echo "<hr>";

   
    $jogadorA = new Jogador(1, "Ronaldo", 39, 87.90, 1.90, $equipaB);
    $jogadorB = new Jogador(2, "Messi", 39, 87.90, 1.90, $equipaA);
    $jogadorC = new Jogador(3, "Mbape", 39, 87.90, 1.90, $equipaC);
    $jogadorDAO = new JogadorDao();
    
    $jogadorDAO->Cadastrar($jogadorA);
    $jogadorDAO->Cadastrar($jogadorB);
    $jogadorDAO->Cadastrar($jogadorC);
    $jogadorDAO->Buscar();
    echo "<hr>";

    $jogoA = new Jogo(1,"Partida Amigável", $equipaA, $equipaB, "10:30", "12/04/2024");
    $jogoDAO = new JogoDao();

    $jogoDAO->Cadastrar($jogoA);
    $jogoDAO->Buscar();
    echo "<hr>";

    $jogo = $jogoDAO->RetornoJogos();
    $jogo[0]->MarcarJogo();
    $jogo[0]->Jogar();
    $jogo[0]->info();
    echo "<hr>";

?>
