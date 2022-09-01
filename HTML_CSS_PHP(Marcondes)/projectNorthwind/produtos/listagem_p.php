<h1>Listagem de Produtos</h1>

<?php
    $sql = "SELECT p.IDProduto, p.NomeProduto,
                    f.NomeCompanhia, c.NomeCategoria, 
                    p.QuantidadePorUnidade, p.PrecoUnitario,
                    p.UnidadesEmEstoque, p.UnidadesEmOrdem,
                    p.NivelDeReposicao, p.Descontinuado
                    from produtos p 
                    inner join categorias c on (p.IDCategoria = c.IDCategoria)
                    inner join fornecedores f on (p.IDFornecedor = f.IDFornecedor)
                    order by p.IDProduto";
    $consulta = $conn ->prepare($sql);
    $resultado = $consulta ->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID Produto</td>
        <td>Nome</td>
        <td>Fornecedor</td>
        <td>Categoria</td>
        <td>Preço</td>
        <td>Estoque</td>
        <td></td>
    </tr>
    <?php
        foreach($consulta as $linha)
        {
            ?>
                <tr>
                    <td><?php echo $linha['IDProduto']; ?></td>
                    <td><?php echo $linha['NomeProduto']; ?></td>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['NomeCategoria']; ?></td>
                    <td><?php echo $linha['PrecoUnitario']; ?></td>
                    <td><?php echo $linha['UnidadesEmEstoque']; ?></td>
                    <td>
                    <form>
                        <?php
                            echo "<a href=\"?pagina=p_update&codigo={$linha['IDProduto']}\"><button type=\"button\" class=\"btn btn-info\" >Atualizar</button>";
                            echo "<a href=\"?pagina=p_delete&codigo={$linha['IDProduto']}\"><button type=\"button\" class=\"btn btn-danger\" >Deletar</button>";
                        ?>
                    </form>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>