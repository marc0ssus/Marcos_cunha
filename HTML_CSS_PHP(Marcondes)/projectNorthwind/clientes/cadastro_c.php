<h1>Cadastro de Clientes</h1>

<?php
    if (isset($_POST['gravar']))
    {
        $sql = "INSERT into clientes(IDCliente,NomeCompanhia,NomeContato,TItuloContato,Endereco,Cidade,Regiao,CEP,Pais,Telefone,Fax) 
                        values (:IDCliente, :NomeCompanhia, :NomeContato, :TItuloContato, :Endereco, :Cidade, :Regiao, :CEP, :Pais, :Telefone, :Fax)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array (
                                "IDCliente" => $_POST['IDCliente'],
                                "NomeCompanhia" => $_POST['NomeCompanhia'],
                                "NomeContato" => $_POST['NomeContato'],
                                "TItuloContato" => $_POST['TItuloContato'],
                                "Endereco" => $_POST['Endereco'],
                                "Cidade" => $_POST['Cidade'],
                                "Regiao" => $_POST['Regiao'],
                                "CEP" => $_POST['CEP'],
                                "Pais" => $_POST['Pais'],
                                "Telefone" => $_POST['Telefone'],
                                "Fax" => $_POST['Fax']
                                ));
    }
?>

<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Código do Cliente:</span>
        <input type="text" class="form-control" maxlength="5" aria-describedby="basic-addon1" name="IDCliente">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome da Companhia:</span>
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
        <span class="input-group-text" id="basic-addon1">Região:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Regiao">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">CEP:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="CEP">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">País:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Pais">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Telefone:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Telefone">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fax:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="Fax">
    </div>
    <input class="btn btn-primary" type="submit" name="gravar" value="Salvar">
</form>