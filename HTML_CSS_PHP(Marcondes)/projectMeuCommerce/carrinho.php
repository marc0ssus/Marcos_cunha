<br>
<?php if (isset($_SESSION["carrinho"])) { ?>
<h3>Carrinho</h3>
<hr>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Descricao</th>
            <th scope="col">Valor</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        $keys = array_keys($_SESSION["carrinho"]);
        foreach ($keys as $item) {

          $sql_produto = "SELECT * from produtos where id = :id";
          $produto = $conn->prepare($sql_produto);
          $produto->execute(["id" => $_SESSION["carrinho"][$item]]);
          $produto = $produto->fetch();
          ?>
        <tr>
            <th scope="row"><?php echo $produto["id"]; ?></th>
            <td><?php echo $produto["descricao"]; ?></td>
            <td><?php echo $produto["valor"]; ?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="produto" value="<?php echo $item; ?>">
                    <input class="btn btn-danger" type="submit" name="remover_carrinho" value="Remover">
                </form>
            </td>
        </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<table>
    <tr>
        <td>
            <a class="btn btn-primary" href="?pagina=finalizar_pedido">Realizar pedido</a>
        </td>
    </tr>
    <tr>
        <td>
            <form method="post">
                <input class="btn btn-danger" type="submit" name="limpar_carrinho" value="Limpar carrinho">
            </form>
        </td>
    </tr>
</table>
<?php } else {echo "<h2>Carrinho vazio!</h2>";}
?>