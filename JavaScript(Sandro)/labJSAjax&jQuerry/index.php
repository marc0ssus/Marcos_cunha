<?php
    include_once("lib/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viagens_Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script lang="JavaScript" src="lib/funcs.js"></script>
</head>
<body class="container">
    <h3>Informações da Viagem:</h3>
    <br>
    <div id="msg" class="alert alert-warning"></div>
    <br>
    <form action="salvar_viagem.php" name="fViagem">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Placa:</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" id="placa" placeholder="ABC-123" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Motorista:</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" id="nome" placeholder="Nome" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Origem:</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" id="origem" placeholder="Local de partida" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Destino:</span>
            <input type="text" class="form-control" aria-describedby="basic-addon1" id="destino" placeholder="Local de chegada" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Kilometragem percorrida:</span>
            <input type="number" class="form-control" aria-describedby="basic-addon1" id="km" placeholder="Km" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Litros gastos:</span>
            <input type="number" class="form-control" aria-describedby="basic-addon1" id="litros" placeholder="L" required>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Valor atual do combustível:</span>
            <input type="number" class="form-control" aria-describedby="basic-addon1" id="gas" placeholder="R$" required>
        </div>
        <input type="button" class="btn btn-primary" value="Salvar" id="salvar">
    </form>
    <br><hr class="border border-secondary border-3 opacity-75"><br>
    <p class="container" id="lista"></p>
</body>
<script>
    $(document).ready(function()
    {
        $("#salvar").click(function()
        {
            $.post("salvar_viagem.php",{ 
                placa : $("#placa").val(),
                nome : $("#nome").val(),
                origem : $("#origem").val(),
                destino : $("#destino").val(),
                km : $("#km").val(),
                litros : $("#litros").val(),
                gas : $("#gas").val()
            }, function () {
                mostramsg("Dados salvos com sucesso!");
            });
        })
        $("#salvar").click(function()
        {
            $.get("lista.php", function(text)
            {
                $("#lista").html(text);
            })
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>