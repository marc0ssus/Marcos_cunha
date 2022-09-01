<h1>Cadastro de Produtos</h1>

<?php
    if (isset($_POST['gravar']))
    {
        $sql = "INSERT into produtos(NomeProduto,IDFornecedor,IDCategoria,PrecoUnitario,UnidadesEmEstoque) 
                        values (:NomeProduto, :NomeCompanhia, :NomeCategoria, :PrecoUnitario, :UnidadesEmEstoque)";
        $consulta = $conn->prepare($sql);
        $consulta->execute(array (
                                "NomeProduto" => $_POST['NomeProduto'],
                                "NomeCompanhia" => $_POST['NomeCompanhia'],
                                "NomeCategoria" => $_POST['NomeCategoria'],
                                "PrecoUnitario" => $_POST['PrecoUnitario'],
                                "UnidadesEmEstoque" => $_POST['UnidadesEmEstoque']
                                ));
    }
?>

<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeProduto">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Fornecedor:</span>
        <select class="form-select" name="NomeCompanhia">
        <?php
            $sql = "SELECT * from fornecedores";
            $grupos_f = $conn->prepare($sql);
            $grupos_f->execute();
            while ($grupo_f = $grupos_f ->fetch())
            {
                if ($grupo_f['IDFornecedor'] == $linha['IDFornecedor'])
                {
                    echo "<option value=\"{$grupo_f['IDFornecedor']}\" selected>{$grupo_f['NomeCompanhia']}</option>";
                } else {
                    echo "<option value=\"{$grupo_f['IDFornecedor']}\">{$grupo_f['NomeCompanhia']}</option>";
                }
            }         
        ?>
    </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Categoria:</span>
        <select class="form-select" name="NomeCategoria">
        <?php
            $sql = "SELECT * from categorias";
            $grupos_c = $conn->prepare($sql);
            $grupos_c->execute();
            while ($grupo_c = $grupos_c ->fetch())
            {
                if ($grupo_c['IDCategoria'] == $linha['IDCategoria'])
                {
                    echo "<option value=\"{$grupo_c['IDCategoria']}\" selected>{$grupo_c['NomeCategoria']}</option>";
                } else {
                    echo "<option value=\"{$grupo_c['IDCategoria']}\">{$grupo_c['NomeCategoria']}</option>";
                }
            }         
        ?>
    </select>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Preço:</span>
        <input type="number" class="form-control" aria-describedby="basic-addon1" name="PrecoUnitario">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Estoque:</span>
        <input type="number" class="form-control" aria-describedby="basic-addon1" name="UnidadesEmEstoque">
    </div>
    <input class="btn btn-primary" type="submit" name="gravar" value="Salvar">
</form>