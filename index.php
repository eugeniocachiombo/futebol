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
    
    $equipaDAO = new EquipaDao();
    $equipaDAO->Cadastrar("Barcelona");
    $equipaDAO->Cadastrar("Real Madrid");
    $equipaDAO->Cadastrar("Bayer");
    $equipaDAO->Cadastrar("PSG");
    $equipaDAO->Actualizar("PSG Neymar e Mbappe", 4);
    $equipaDAO->Eliminar(1);
    $equipaDAO->Buscar();

    

?>
