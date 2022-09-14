<?php
$sql = "SELECT * from produtos where id = :codigo";
$produto = $conn->prepare($sql);
$produto->execute(["codigo" => $_GET["codigo"]]);

$linha = $produto->fetch();
?>
<div>
    <h1><?php echo $linha["descricao"]; ?></h1>
    <br>
    <img src="<?php echo $linha["imagem"]; ?>">
    <br>
    <p><?php echo $linha["caracteristicas"]; ?></p>
    <br>
    <br>
    <h3>R$ <?php echo $linha["valor"]; ?></h3>
    <br>
    <h2>No estoque: <?php echo $linha["estoque"]; ?></h2>
</div>