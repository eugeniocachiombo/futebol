
<body>
    <a href="../../">Início</a> <hr>
    <form action="CRUD/index.php" method="post">
        <b>Formulário de Jogador</b> <br> <br>
        <input type="text" name="idJogador" id="idJogador" placeholder="Id" style="width: 50px">
        <input type="text" name="nomeJogador" id="nomeJogador" placeholder="Nome"> <br> <br>

        <input type="text" name="idadeJogador" id="idadeJogador" placeholder="Idade"> 
        <input type="text" name="pesoJogador" id="pesoJogador" placeholder="Peso"> <br> <br>

        <input type="text" name="alturaJogador" id="alturaJogador" placeholder="Altura"> 
        <select name="idEquipa" id=""> 
            <option value="">Selecione...</option>
            <?php 
            include '../../dao/__conexao.php';
            include '../../dao/equipa_dao.php';
            $equipaDAO = new EquipaDao();
            $lista = $equipaDAO->Buscar();
            foreach ( $lista as $value ) { ?>
                <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
            <?php } ?>
       </select> 
        <br> <br>

        <input type="submit" value="Cadastrar" name="cadastrar"> 
        <input type="submit" value="Actualizar" name="actualizar">
        <input type="submit" value="Eliminar" name="eliminar">
    </form>
    
    <?php include "CRUD/tabela.php"; ?>
</body>


