<h1>Listagem de Clientes</h1>

<?php
    $sql = "SELECT * from clientes order by IDCliente";
    $consulta = $conn ->prepare($sql);
    $resultado = $consulta ->execute();
?>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código do Cliente</td>
        <td>Nome da Companhia</td>
        <td>Nome do Contato</td>
        <td>Título do Contato</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>Região</td>
        <td>CEP</td>
        <td>País</td>
        <td>Telefone</td>
        <td>Fax</td>
        <td></td>
    </tr>
    <?php
        foreach($consulta as $linha)
        {
            ?>
                <tr>
                    <td><?php echo $linha['IDCliente']; ?></td>
                    <td><?php echo $linha['NomeCompanhia']; ?></td>
                    <td><?php echo $linha['NomeContato']; ?></td>
                    <td><?php echo $linha['TituloContato']; ?></td>
                    <td><?php echo $linha['Endereco']; ?></td>
                    <td><?php echo $linha['Cidade']; ?></td>
                    <td><?php echo $linha['Regiao']; ?></td>
                    <td><?php echo $linha['CEP']; ?></td>
                    <td><?php echo $linha['Pais']; ?></td>
                    <td><?php echo $linha['Telefone']; ?></td>
                    <td><?php echo $linha['Fax']; ?></td>
                    <td>
                    <form>
                        <?php
                            echo "<a href=\"?pagina=c_update&codigo={$linha['IDCliente']}\"><button type=\"button\" class=\"btn btn-info\" >Atualizar</button>";
                            echo "<a href=\"?pagina=c_delete&codigo={$linha['IDCliente']}\"><button type=\"button\" class=\"btn btn-danger\" >Deletar</button>";
                        ?>
                    </form>
                    </td>
                </tr>
            <?php
        }
    ?>
</table>