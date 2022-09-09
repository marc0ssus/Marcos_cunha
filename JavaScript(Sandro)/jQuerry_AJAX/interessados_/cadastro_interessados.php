<?php
include_once('lib/conexao.php');

function select_estados() {
    $conn = $GLOBALS['conn'];     
    $sql = "SELECT Uf, Nome FROM estado";
    $consulta = $conn->prepare($sql);
    $estados = $consulta->execute();
    while($r = $consulta->fetch()) {
        echo '<option value="'.$r['Uf'].'">'.$r['Nome'].'</option>';
    } 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="lib/style.css">
    <title>Cadastro de Interessados</title>
</head>
<body class="container">
    <h1>INTERESSADOS - NewsLetter - DEVs-TI</h1>
    <div class="btn btn-light">
        <a href="index.php">Listar</a>
    </div>     
    <br>
    <h2 id="cadastro"></h2>
    <div id="dMsg"></div>
    <br>
    <form id="fInteressados" action="salvar_interessados.php" method="post">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nome:</span>
            <input type="text" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1" id="iNome" name="iNome" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">E-mail:</span>
            <input type="text" class="form-control" placeholder="e.mail@email.com" aria-label="Username" aria-describedby="basic-addon1" id="iEmail" name="iEmail" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Telefone:</span>
            <input type="text" class="form-control" placeholder="(99) 99999-9999" aria-label="Username" aria-describedby="basic-addon1" id="iFone" name="iFone" value="">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Estado:</span>
            <select class="form-select" aria-label="Default select example" id="sEstado" name="sEstado">
                <option value="00" selected>Selecionar</option>
                <?php select_estados(); ?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Cidade:</span>
            <select class="form-select" aria-label="Default select example" id="sCidade" name="sCidade">
                <option value="00">Selecionar</option>
            </select>
        </div>
        <br>
        <button id="bSalvar" name="bGravar" type="submit" class="btn btn-primary">Salvar</button>
        <button id="bLimpar" type="reset" class="btn btn-warning">Limpar</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script language="JavaScript" src="lib/funcoes.js"></script>
</html>
