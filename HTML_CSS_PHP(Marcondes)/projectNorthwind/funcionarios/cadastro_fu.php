<h1>Cadastro de Funcionários</h1>

<?php
    if (isset($_POST['gravar']))
    {
        $sql = "INSERT into funcionarios(Sobrenome,Nome,Titulo,DataNac,Endereco,Cidade,Regiao,Cep,Pais,TelefoneResidencial) 
                        values (:Sobrenome, :Nome, :Titulo, :DataNac, :Endereco, :Cidade, :Regiao, :Cep, :Pais, :TelefoneResidencial)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array (
                                "Sobrenome" => $_POST['Sobrenome'],
                                "Nome" => $_POST['Nome'],
                                "Titulo" => $_POST['Titulo'],
                                "DataNac" => $_POST['DataNac'],
                                "Endereco" => $_POST['Endereco'],
                                "Cidade" => $_POST['Cidade'],
                                "Regiao" => $_POST['Regiao'],
                                "Cep" => $_POST['Cep'],
                                "Pais" => $_POST['Pais'],
                                "TelefoneResidencial" => $_POST['TelefoneResidencial']
                                ));
    }
?>

<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Sobrenome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Sobrenome">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Nome">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Título:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Titulo">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Data de Nascimento:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="DataNac">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Endereço:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Endereco">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cidade:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Cidade">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Região:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Regiao">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">CEP:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Cep">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">País:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Pais">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="TelefoneResidencial">
    </div>
    <input class="btn btn-primary" type="submit" name="gravar" value="Salvar">
</form>