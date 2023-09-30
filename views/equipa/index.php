
<body>
    <form action="CRUD/index.php" method="post">
        <b>Formulário de Equipa</b> <br> <br>
        <input type="text" name="idEquipa" id="idEquipa" placeholder="Id" style="width: 50px">
        <input type="text" name="nomeEquipa" id="nomeEquipa" placeholder="Nome"> <br> <br>
        <input type="submit" value="Cadastrar" name="cadastrar"> 
        <input type="submit" value="Actualizar" name="actualizar">
        <input type="submit" value="Eliminar" name="eliminar">
    </form>

    <?php include "CRUD/buscar.php"; ?>
</body>


