<h1>Deletar Fornecedor?</h1>

<?php
    if (isset($_POST['deletar']))
    {
        $sql = "DELETE from fornecedores where IDFornecedor = :codigo";
        $parse = $conn ->prepare($sql);
        $parse ->execute(array("codigo" => $_GET['codigo']));
        header("location: ?pagina=f_lista");
    }
?>

<?php
    $sql = "SELECT * from fornecedores where IDFornecedor = :codigo";
    $consulta = $conn ->prepare($sql);
    $consulta ->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta ->fetch();
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
    </tr>
    <tr>
        <td><?php echo $linha['IDFornecedor']; ?></td>
        <td><?php echo $linha['NomeCompanhia']; ?></td>
        <td><?php echo $linha['NomeContato']; ?></td>
        <td><?php echo $linha['TItuloContato']; ?></td>
        <td><?php echo $linha['Endereco']; ?></td>
        <td><?php echo $linha['Cidade']; ?></td>
        <td><?php echo $linha['Telefone']; ?></td>
    </tr>
</table>

<form method="POST" >
    <input type="hidden" name="codigo">
    <input type="submit" class="btn btn-danger" name="deletar" value="Deletar">
</form>