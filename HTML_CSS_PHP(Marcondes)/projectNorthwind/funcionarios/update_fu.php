<h1>Atualizar Funcionários</h1>

<?php
    if (isset($_POST['update']))
    {
        $sql = "UPDATE funcionarios set
                Sobrenome = :Sobrenome,
                Nome = :Nome,
                Titulo = :Titulo,
                DataNac = :DataNac,
                Endereco = :Endereco,
                Cidade = :Cidade,
                Regiao = :Regiao,
                Cep = :Cep,
                Pais = :Pais,
                TelefoneResidencial = :TelefoneResidencial
                where IDFuncionario = :codigo";
        
        $atualizar = $conn ->prepare($sql);

        $atualizar ->execute(array(
                            "Sobrenome" => $_POST['Sobrenome'],
                            "Nome" => $_POST['Nome'],
                            "Titulo" => $_POST['Titulo'],
                            "DataNac" => $_POST['DataNac'],
                            "Endereco" => $_POST['Endereco'],
                            "Cidade" => $_POST['Cidade'],
                            "Regiao" => $_POST['Regiao'],
                            "Cep" => $_POST['Cep'],
                            "Pais" => $_POST['Pais'],
                            "TelefoneResidencial" => $_POST['TelefoneResidencial'],
                            "codigo" => $_GET['codigo']
        ));
        echo "Sucesso!";
    }

    $sql = "SELECT * from funcionarios where IDFuncionario = :IDFuncionario";
    $funcionario = $conn ->prepare($sql);
    $funcionario ->execute(array("IDFuncionario" => $_GET['codigo']));

    $linha = $funcionario ->fetch();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Funcionário</td>
        <td>Sobrenome</td>
        <td>Nome</td>
        <td>Título</td>
        <td>Data de Nascimento</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone</td>
    </tr>
    <tr>
        <td><?php echo $linha['IDFuncionario']; ?></td>
        <td><?php echo $linha['Sobrenome']; ?></td>
        <td><?php echo $linha['Nome']; ?></td>
        <td><?php echo $linha['Titulo']; ?></td>
        <td><?php echo $linha['DataNac']; ?></td>
        <td><?php echo $linha['Endereco']; ?></td>
        <td><?php echo $linha['Cidade']; ?></td>
        <td><?php echo $linha['Regiao']; ?></td>
        <td><?php echo $linha['Cep']; ?></td>
        <td><?php echo $linha['Pais']; ?></td>
        <td><?php echo $linha['TelefoneResidencial']; ?></td>
    </tr>
</table>
<br><br>
<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Sobrenome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Sobrenome']; ?>" name="Sobrenome">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Nome']; ?>" name="Nome">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Título:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Titulo']; ?>" name="Titulo">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Data de Nascimento:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['DataNac']; ?>" name="DataNac">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Endereço:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Endereco']; ?>" name="Endereco">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cidade:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Cidade']; ?>" name="Cidade">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Região:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Regiao']; ?>" name="Regiao">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">CEP:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Cep']; ?>" name="Cep">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">País:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Pais']; ?>" name="Pais">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['TelefoneResidencial']; ?>" name="TelefoneResidencial">
    </div>
    <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
</form>