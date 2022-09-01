<h1>Listagem de Produtos</h1>

<?php
    $sql = "SELECT p.codigo, p.nome, p.valor, pg.descricao from produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id)";
    $consulta = $conn ->prepare($sql);
    $resultado = $consulta ->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
        <td></td>
    </tr>
    <?php
        foreach($consulta as $linha)
        {
            ?>
                <tr>
                    <td><?php echo $linha['codigo']; ?></td>
                    <td><?php echo $linha['nome']; ?></td>
                    <td><?php echo $linha['valor']; ?></td>
                    <td><?php echo $linha['descricao']; ?></td>
                    <td>
                        <form>
                            <?php
                                echo "<a href=\"?pagina=p_atualizar&codigo={$linha['codigo']}\"><button type=\"button\" class=\"btn btn-info\" >Atualizar</button>";
                                echo "";
                                echo "<a href=\"?pagina=p_delete&codigo={$linha['codigo']}\"><button type=\"button\" class=\"btn btn-danger\" >Deletar</button>";
                            ?>
                        </form>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>