<h1>Cadastro de Fornecedores</h1>

<?php
    if (isset($_POST['gravar']))
    {
        $sql = "INSERT into fornecedores(NomeCompanhia,NomeContato,TItuloContato,Endereco,Cidade,Telefone) 
                        values (:NomeCompanhia, :NomeContato, :TItuloContato, :Endereco, :Cidade, :Telefone)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array (
                                "NomeCompanhia" => $_POST['NomeCompanhia'],
                                "NomeContato" => $_POST['NomeContato'],
                                "TItuloContato" => $_POST['TItuloContato'],
                                "Endereco" => $_POST['Endereco'],
                                "Cidade" => $_POST['Cidade'],
                                "Telefone" => $_POST['Telefone']
                                ));
    }
?>

<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeCompanhia">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeContato">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Título do Contato:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="TItuloContato">
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
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Telefone">
    </div>
    <input class="btn btn-primary" type="submit" name="gravar" value="Salvar">
</form>