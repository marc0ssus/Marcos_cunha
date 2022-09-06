<h1>Atualizar Produto</h1>

<?php
    if (isset($_POST['update']))
    {
        $sql = "UPDATE produtos
                set
                NomeProduto = :NomeProduto,
                IDFornecedor = :NomeCompanhia,
                IDCategoria = :NomeCategoria,
                PrecoUnitario = :PrecoUnitario,
                UnidadesEmEstoque = :UnidadesEmEstoque
                where IDProduto = :codigo";
        
        $atualizar = $conn ->prepare($sql);

        $atualizar ->execute(array(
                            "NomeProduto" => $_POST['NomeProduto'],
                            "NomeCompanhia" => $_POST['NomeCompanhia'],
                            "NomeCategoria" => $_POST['NomeCategoria'],
                            "PrecoUnitario" => $_POST['PrecoUnitario'],
                            "UnidadesEmEstoque" => $_POST['UnidadesEmEstoque'],
                            "codigo" => $_GET['codigo']
        ));
        echo "Sucesso!";
    }

    $sql = "SELECT p.IDProduto, p.NomeProduto,
                    f.NomeCompanhia, 
                    c.NomeCategoria, 
                    p.QuantidadePorUnidade, 
                    p.PrecoUnitario,
                    p.UnidadesEmEstoque, 
                    p.UnidadesEmOrdem,
                    p.NivelDeReposicao, 
                    p.Descontinuado,
                    c.IDCategoria,
                    p.IDFornecedor
                    from produtos p 
                    inner join categorias c on (p.IDCategoria = c.IDCategoria)
                    inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)
                    where p.IDProduto = :IDProduto
                    ";
    $produto = $conn ->prepare($sql);
    $produto ->execute(array("IDProduto" => $_GET['codigo']));

    $linha = $produto ->fetch();

?>
<table class="table table-striped table-bordered">
    <tr>
        <td>ID Produto</td>
        <td>Nome</td>
        <td>Fornecedor</td>
        <td>Categoria</td>
        <td>Preço</td>
        <td>Estoque</td>
    </tr>
    <tr>
        <td><?php echo $linha['IDProduto']; ?></td>
        <td><?php echo $linha['NomeProduto']; ?></td>
        <td><?php echo $linha['NomeCompanhia']; ?></td>
        <td><?php echo $linha['NomeCategoria']; ?></td>
        <td><?php echo $linha['PrecoUnitario']; ?></td>
        <td><?php echo $linha['UnidadesEmEstoque']; ?></td>
    </tr>
</table>
<br><br>
<form method="POST">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Nome:</span>
        <input type="text" class="form-control" aria-describedby="basic-addon1" name="NomeProduto" value="<?php echo $linha['NomeProduto']; ?>">
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
        <input type="number" class="form-control" aria-describedby="basic-addon1" name="PrecoUnitario" value="<?php echo $linha['PrecoUnitario']; ?>">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Estoque:</span>
        <input type="number" class="form-control" aria-describedby="basic-addon1" name="UnidadesEmEstoque" value="<?php echo $linha['UnidadesEmEstoque']; ?>">
    </div>
    <input class="btn btn-primary" type="submit" name="update" value="Atualizar">
</form>