<h1>Listagem de Funcionários</h1>

<?php
    $sql = "SELECT * from funcionarios order by IDFuncionario";
    $consulta = $conn ->prepare($sql);
    $resultado = $consulta ->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>ID Funcionário</td>
        <td>Sobrenome</td>
        <td>Nome</td>
        <td>Título</td>
        <td>Data de Nascimento</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone</td>
        <td></td>
    </tr>
    <?php
        foreach($consulta as $linha)
        {
            ?>
                <tr>
                    <td><?php echo $linha['IDFuncionario']; ?></td>
                    <td><?php echo $linha['Sobrenome']; ?></td>
                    <td><?php echo $linha['Nome']; ?></td>
                    <td><?php echo $linha['Titulo']; ?></td>
                    <td><?php echo $linha['DataNac']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['Cidade']; ?></td>
                    <td><?php echo $linha['Regiao']; ?></td>
                    <td><?php echo $linha['Cep']; ?></td>
                    <td><?php echo $linha['Pais']; ?></td>
                    <td><?php echo $linha['TelefoneResidencial']; ?></td>
                    <td>
                    <form>
                        <?php
                            echo "<a href=\"?pagina=fu_update&codigo={$linha['IDFuncionario']}\"><button type=\"button\" class=\"btn btn-info\" >Atualizar</button>";
                            echo "<a href=\"?pagina=fu_delete&codigo={$linha['IDFuncionario']}\"><button type=\"button\" class=\"btn btn-danger\" >Deletar</button>";
                        ?>
                    </form>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>