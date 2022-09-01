<h1>Deletar Cliente?</h1>

<?php
    if (isset($_POST['deletar']))
    {
        $sql = "DELETE from clientes where IDCliente = :codigo";
        $parse = $conn ->prepare($sql);
        $parse ->execute(array("codigo" => $_GET['codigo']));
        header("location: ?pagina=c_lista");
    }
?>

<?php
    $sql = "SELECT * from clientes where IDCliente = :codigo";
    $consulta = $conn ->prepare($sql);
    $consulta ->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta ->fetch();
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
    </tr>
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
    </tr>
</table>

<form method="POST" >
    <input type="hidden" name="codigo">
    <input type="submit" class="btn btn-danger" name="deletar" value="Deletar">
</form>