<?php
    include 'class/equipa.php';
    include 'class/jogador.php';
    include 'class/jogo.php';
    include 'dao/equipa_dao.php';

    /* 
     * 
     * Sempre que for para instânciar:
     * Equipa recebe 2 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * Jogador recebe 5 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * jogo recebe 7 argumentos como parâmetro após ser instanciado, por intermédio do que lhe foi passado ao do construtor
     * 
     */

    // 
    $equipa = array(
        new Equipa(1, "Real Madrid"),
        new Equipa(2, "Barcelona"),
        new Equipa(3, "Liverpool"),
        new Equipa(4, "PSG")
    );
    
    $jogo1 = new Jogo(1, "Partida Amigável", $equipa[0], $equipa[1], "10:00", "10/02/2023");    
    $jogo2 = new Jogo(2, "Partida Amigável", $equipa[1], $equipa[3], "10:00", "10/02/2023");    
    $jogo3 = new Jogo(3, "Partida Amigável", $equipa[3], $equipa[0], "10:00", "10/02/2023");    
    $jogo4 = new Jogo(4, "Partida Amigável", $equipa[3], $equipa[2], "10:00", "10/02/2023");    
    $jogo5 = new Jogo(5, "Partida Amigável", $equipa[2], $equipa[1], "10:00", "10/02/2023");    
    
    $jogador = array(
        new Jogador(1, "Ronaldo", 27, 97.4, 1.74, $equipa[1]),
        new Jogador(2, "Snuff", 27, 97.4, 1.74, $equipa[3]),
        new Jogador(3, "Eugénio", 27, 97.4, 1.74, $equipa[2]),
        new Jogador(4, "Producer", 27, 97.4, 1.74, $equipa[3]),
        new Jogador(5, "Somário", 27, 97.4, 1.74, $equipa[1])
    );

    //array_push($equipa, new Equipa(1, "Real Madrid"));
    $posicao = array_search(new Equipa(4, "PSG"), $equipa);

    echo "<pre>";
    print_r($equipa);
    echo "</pre>";

?>
