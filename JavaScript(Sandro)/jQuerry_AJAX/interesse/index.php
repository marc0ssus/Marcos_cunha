<?php
    include_once('lib/conexao.php');

    function option_estados() {
        $conn = $GLOBALS['conn'];    
        $sql = "SELECT Uf, Nome FROM estado";
        $consulta = $conn->prepare($sql);
        $estados = $consulta->execute();
        while($r = $consulta->fetch()){
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
    <link rel="stylesheet" href="lib/normalize.css">
    <title>Interessados</title>
</head>
<body>
    <div class="container">
    <h1>Interessados</h1>
    <br>
    <div id="Msg"></div>

    <form action="salvar_interessados.php" id="FormInteressados" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Nome:</span>
            <input type="text" id="Nome" name="Nome" class="form-control" placeholder="Nome" aria-label="Username" aria-describedby="basic-addon1">
          </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">E-mail:</span>
            <input type="text" id="Email" name="Email" class="form-control" placeholder="e.mail@email.com" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Telefone:</span>
            <input type="text" id="Fone" name="Fone" class="form-control" placeholder="(99) 9999-9999" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Estado:</span>
            <select class="form-select" id="Estado" name="Estado">
                <option value="00" selected>Selecionar Estado</option>
                <?php option_estados();?>
            </select>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Cidade:</span>
            <select class="form-select" id="Cidade" name="Cidade">
                <option value="00" selected>Selecionar Cidade</option>
              </select>
        </div>
        <input class="btn btn-primary" id="Salvar" name="Gravar" type="submit" value="Gravar">&nbsp;|&nbsp;
        <input class="btn btn-warning" id="Limpar" type="reset" value="Limpar">
    </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script lang="JavaScript" src="lib/funcs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script> 
</body>
</html>