<h1>Deletar Funcionário?</h1>

<?php
    if (isset($_POST['deletar']))
    {
        $sql = "DELETE from funcionarios where IDFuncionario = :codigo";
        $parse = $conn ->prepare($sql);
        $parse ->execute(array("codigo" => $_GET['codigo']));
        header("location: ?pagina=fu_lista");
    }
?>

<?php
    $sql = "SELECT * from funcionarios where IDFuncionario = :codigo";
    $consulta = $conn ->prepare($sql);
    $consulta ->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta ->fetch();
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
    </tr>
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
    </tr>
</table>

<form method="POST" >
    <input type="hidden" name="codigo">
    <input type="submit" class="btn btn-danger" name="deletar" value="Deletar">
</form>