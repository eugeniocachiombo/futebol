<form action="CRUD/index.php" method="post">
        <h2><b>Cadastrar Jogador</b></h2> 
        <div class="row ">
            <div class="col">
                <input type="hidden" name="idJogador" id="idJogador" placeholder="Id" >
                <input type="text" name="nomeJogador" id="nomeJogador" placeholder="Nome"> 
            </div>

            <div class="col">
                <input type="text" name="idadeJogador" id="idadeJogador" placeholder="Idade"> 
                <input type="text" name="pesoJogador" id="pesoJogador" placeholder="Peso"> 
            </div>

            <div class="col">
                <input type="text" name="alturaJogador" id="alturaJogador" placeholder="Altura"> 
                <div>
                    <select  name="idEquipa" id="idEquipa"> 
                        <option value="">Selecione...</option>
                        <?php 
                        $equipaDAO = new EquipaDao();
                        $lista = $equipaDAO->Buscar();
                        foreach ( $lista as $value ) { ?>
                            <option value="<?php echo $value[ 'idEquipa' ]; ?>"><?php echo $value[ 'nomeEquipa' ]; ?></option>
                        <?php } ?>
                    </select> 
                </div>
            </div>
        </div>
        
        <div class="pt-3" >  
            <input type="submit" value="Cadastrar" name="cadastrar" style="width: 205px">    
        </div>
</form>

<a href='<?php echo $uri; ?>index.php?actualizar'>Actualizar</a>