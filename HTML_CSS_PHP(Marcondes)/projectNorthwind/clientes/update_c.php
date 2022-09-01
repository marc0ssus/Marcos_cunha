<h1>Atualizar Clientes</h1>

<?php
    if (isset($_POST['update']))
    {
        $sql = "UPDATE clientes set
                NomeCompanhia = :NomeCompanhia,
                NomeContato = :NomeContato,
                TituloContato = :TituloContato,
                Endereco = :Endereco,
                Cidade = :Cidade,
                Regiao = :Regiao,
                CEP = :CEP,
                Pais = :Pais,
                Telefone = :Telefone,
                Fax = :Fax
                where IDCliente = :codigo";
        
        $atualizar = $conn ->prepare($sql);

        $atualizar ->execute(array(
                            "NomeCompanhia" => $_POST['NomeCompanhia'],
                            "NomeContato" => $_POST['NomeContato'],
                            "TituloContato" => $_POST['TituloContato'],
                            "Endereco" => $_POST['Endereco'],
                            "Cidade" => $_POST['Cidade'],
                            "Regiao" => $_POST['Regiao'],
                            "CEP" => $_POST['CEP'],
                            "Pais" => $_POST['Pais'],
                            "Telefone" => $_POST['Telefone'],
                            "Fax" => $_POST['Fax'],
                            "codigo" => $_GET['codigo']
        ));
        echo "Sucesso!";
    }

    $sql = "SELECT * from clientes where IDCliente = :IDCliente";
    $produto = $conn ->prepare($sql);
    $produto ->execute(array("IDCliente" => $_GET['codigo']));

    $linha = $produto ->fetch();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Código do Cliente</td>
        <td>Nome da Companhia</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone</td>
        <td>Fax</td>
    </tr>
    <tr>
        <td><?php echo $linha['IDCliente']; ?></td>
        <td><?php echo $linha['NomeCompanhia']; ?></td>
        <td><?php echo $linha['NomeContato']; ?></td>
        <td><?php echo $linha['TituloContato']; ?></td>
        <td><?php echo $linha['Endereco']; ?></td>
        <td><?php echo $linha['Cidade']; ?></td>
        <td><?php echo $linha['Regiao']; ?></td>
        <td><?php echo $linha['CEP']; ?></td>
        <td><?php echo $linha['Pais']; ?></td>
        <td><?php echo $linha['Telefone']; ?></td>
        <td><?php echo $linha['Fax']; ?></td>
    </tr>
</table>
<br><br>
<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome Companhia:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['NomeCompanhia']; ?>" name="NomeCompanhia">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['NomeContato']; ?>" name="NomeContato">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Título do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['TituloContato']; ?>" name="TituloContato">
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
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['CEP']; ?>" name="CEP">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">País:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Pais']; ?>" name="Pais">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Telefone']; ?>" name="Telefone">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fax:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" value="<?php echo $linha['Fax']; ?>" name="Fax">
    </div>
    <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
</form>