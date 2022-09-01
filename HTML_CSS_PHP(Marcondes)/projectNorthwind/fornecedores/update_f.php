<h1>Atualizar Fornecedor</h1>

<?php
    if (isset($_POST['update']))
    {
        $sql = "UPDATE fornecedores
                set
                NomeCompanhia = :NomeCompanhia,
                NomeContato = :NomeContato,
                TItuloContato = :TItuloContato,
                Endereco = :Endereco,
                Cidade = :Cidade,
                Telefone = :Telefone
                where IDFornecedor = :codigo";
        
        $atualizar = $conn ->prepare($sql);

        $atualizar ->execute(array(
                            "NomeCompanhia" => $_POST['NomeCompanhia'],
                            "NomeContato" => $_POST['NomeContato'],
                            "TItuloContato" => $_POST['TItuloContato'],
                            "Endereco" => $_POST['Endereco'],
                            "Cidade" => $_POST['Cidade'],
                            "Telefone" => $_POST['Telefone'],
                            "codigo" => $_GET['codigo']
        ));
        echo "Sucesso!";
    }

    $sql = "SELECT * from fornecedores where IDFornecedor = :IDFornecedor";
    $produto = $conn ->prepare($sql);
    $produto ->execute(array("IDFornecedor" => $_GET['codigo']));

    $linha = $produto ->fetch();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Fornecedor</td>
        <td>Nome da Companhia</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Telefone</td>
    </tr>
    <tr>
        <td><?php echo $linha['IDFornecedor']; ?></td>
        <td><?php echo $linha['NomeCompanhia']; ?></td>
        <td><?php echo $linha['NomeContato']; ?></td>
        <td><?php echo $linha['TItuloContato']; ?></td>
        <td><?php echo $linha['Endereco']; ?></td>
        <td><?php echo $linha['Cidade']; ?></td>
        <td><?php echo $linha['Telefone']; ?></td>
    </tr>
</table>
<br><br>
<form method="POST">
<div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeCompanhia" value="<?php echo $linha['NomeCompanhia']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeContato" value="<?php echo $linha['NomeContato']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Título do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="TItuloContato" value="<?php echo $linha['TItuloContato']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Endereço:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Endereco" value="<?php echo $linha['Endereco']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Cidade:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Cidade" value="<?php echo $linha['Cidade']; ?>">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Telefone" value="<?php echo $linha['Telefone']; ?>">
    </div>
    <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
</form>