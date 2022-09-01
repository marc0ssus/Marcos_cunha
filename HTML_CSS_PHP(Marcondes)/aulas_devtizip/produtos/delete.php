<?php
    if (isset($_POST['deletar']))
    {
        $sql = "DELETE from produtos where codigo = :codigo";
        $parse = $conn ->prepare($sql);
        $parse ->execute(array("codigo" => $_GET['codigo']));
        header("location: ?pagina=p_lista");
    }
?>

<h1>Deletar Produto?</h1>

<?php
    $sql = "SELECT p.codigo, p.nome, p.valor, pg.descricao from produtos p inner join produtos_grupos pg on (p.grupo_id = pg.id) where codigo = :codigo";
    $consulta = $conn ->prepare($sql);
    $consulta ->execute(array("codigo" => $_GET['codigo']));

    $linha = $consulta ->fetch();
?>
<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Valor</td>
        <td>Grupo</td>
    </tr>
    <tr>
        <td><?php echo $linha['codigo']; ?></td>
        <td><?php echo $linha['nome']; ?></td>
        <td><?php echo $linha['valor']; ?></td>
        <td><?php echo $linha['descricao']; ?></td>
    </tr>
</table>

<form method="POST" >
    <input type="hidden" name="codigo">
    <input type="submit" class="btn btn-danger" name="deletar" value="Deletar">
</form>