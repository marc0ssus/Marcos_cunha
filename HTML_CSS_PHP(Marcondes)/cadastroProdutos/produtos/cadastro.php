<h1>Cadastro de Produtos</h1>

<?php
    if (isset($_POST['gravar']))
    {
        $sql = "INSERT into produtos(nome,valor,grupo_id) values (:nome, :valor, :grupo_id)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array ("nome" => $_POST['nome_produto'], 
                            "valor" => $_POST['valor_produto'], 
                            "grupo_id" => $_POST['grupo_produto'])
                            );
    }
?>

<form method="post">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="nome_produto">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Valor:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="valor_produto">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Grupo:</span>
        <select class="form-select" name="grupo_produto">
        <?php
            $sql = "SELECT * from produtos_grupos";
            $consulta = $conn->prepare($sql);
            $consulta->execute();
            while ($linha = $consulta->fetch())
            {
                echo "<option value=\"{$linha['id']}\">{$linha['descricao']}</option>";
            }        
        ?>
    </select>
    </div>
    <input class="btn btn-primary" type="submit" name="gravar" value="Salvar">
</form>