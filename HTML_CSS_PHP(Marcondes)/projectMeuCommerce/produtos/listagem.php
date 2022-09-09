<?php
$sql = "SELECT * from produtos where categoria_id = {$_GET['categoria']}";
$consulta = $conn->prepare($sql);
$resultado = $consulta->execute();
?>

<section class="container flex">
    <?php foreach ($consulta as $linha) { ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $linha["imagem"]; ?>" class="card-img-top" alt="">
        <div class="card-body">
            <h2 class="card-title"><?php echo $linha["descricao"]; ?></h2>
            <h5 class="card-title"><?php echo $linha["resumo"]; ?></h5>
            <p class="card-text">
                <td>R$ <?php echo $linha["valor"]; ?></td>
            </p>
            <?php echo "<a href=\"?pagina=produto&codigo={$linha["id"]}\" class=\"btn btn-primary\">Ver página do produto</a>"; ?>
        </div>
        <?php } ?>
</section>