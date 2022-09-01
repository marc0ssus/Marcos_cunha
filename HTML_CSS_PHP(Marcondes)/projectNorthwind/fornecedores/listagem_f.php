<h1>Listagem de Fornecedores</h1>

<?php
    $sql = "SELECT * from fornecedores order by IDFornecedor";
    $consulta = $conn ->prepare($sql);
    $resultado = $consulta ->execute();
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
        <td></td>
    </tr>
    <?php
        foreach($consulta as $linha)
        {
            ?>
                <tr>
                    <td><?php echo $linha['IDFornecedor']; ?></td>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['TItuloContato']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['Cidade']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td>
                    <form>
                        <?php
                            echo "<a href=\"?pagina=f_update&codigo={$linha['IDFornecedor']}\"><button type=\"button\" class=\"btn btn-info\" >Atualizar</button>";
                            echo "<a href=\"?pagina=f_delete&codigo={$linha['IDFornecedor']}\"><button type=\"button\" class=\"btn btn-danger\" >Deletar</button>";
                        ?>
                    </form>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>