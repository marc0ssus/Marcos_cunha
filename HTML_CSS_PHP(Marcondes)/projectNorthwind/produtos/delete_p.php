<h1>Deletar Produto?</h1>

<?php
    if (isset($_POST['deletar']))
    {
        $sql = "DELETE from produtos where IDProduto = :codigo";
        $parse = $conn ->prepare($sql);
        $parse ->execute(array("codigo" => $_GET['codigo']));
        header("location: ?pagina=p_lista");
    }
?>

<?php
    $sql = "SELECT p.IDProduto, p.NomeProduto,
                f.NomeCompanhia, c.NomeCategoria, 
                p.QuantidadePorUnidade, p.PrecoUnitario,
                p.UnidadesEmEstoque, p.UnidadesEmOrdem,
                p.NivelDeReposicao, p.Descontinuado
                from produtos p 
                inner join categorias c on (p.IDCategoria = c.IDCategoria)
                inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)
                where IDProduto = :codigo";
    $consulta = $conn ->prepare($sql);
    $consulta ->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta ->fetch();
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

<form method="POST" >
    <input type="hidden" name="codigo">
    <input type="submit" class="btn btn-danger" name="deletar" value="Deletar">
</form>