<?php
include '../../dao/equipa_dao.php';
include '../../dao/__conexao.php';
include '../../class/equipa.php';

$equipaDAO = new EquipaDao();
$lista = $equipaDAO->Buscar();
?>
<link rel="stylesheet" href="../../assets/css/tabela.css">

<hr>
<h2>Tabela de dados</h2>
<div  id="table-responsive">
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th colspan="2"></th>
    </tr>

    <?php foreach ( $lista as $value ) { ?>
        <form action='CRUD/index.php' method="post">
            <tr>
                <td>
                    <?php echo $value[ 'idEquipa' ]; ?>
                    <input type='hidden' value="<?php echo $value[ 'idEquipa' ]; ?>"  name='idEquipa' id='idEquipa' placeholder='Id' style='width: 50px'>
                </td>

                <td>
                    <?php echo $value[ 'nomeEquipa' ]; ?>
                    <input type='hidden' value="<?php echo $value[ 'nomeEquipa' ]; ?>"  name='nomeEquipa' id='nomeEquipa' placeholder='Nome'> 
                </td>
                
                <td><input type='submit' value='Actualizar' name='actualizar'></td>
                <td><input type='submit' value='Eliminar' name='eliminar'></td>
            </tr>
        </form>
    <?php } ?>
    
</table>
</div>