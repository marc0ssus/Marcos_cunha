<?php
$sql_categorias = "SELECT * from categorias order by id";
$sql_prepara = $conn->prepare($sql_categorias);
$sql_prepara->execute();
?>

<ul class="nav flex-column vertul">
    <li class="nav-item vert">
        <a class="nav-link vertI active" aria-current="page">Categorias</a>
    </li>
    <?php while ($categoria = $sql_prepara->fetch()) {
      if (empty($categoria["categoria_pai"])) {
        $identacao = "• &nbsp";
      } else {
        $identacao = "";
      }
      echo "<li class=\"nav-item vert\"><a 
            href=\"?pagina=produtos&categoria={$categoria["id"]}\" 
            aria-current=\"page\" style=\"color: black;\" class=\"nav-link\">{$identacao}{$categoria["descricao"]}</a></li>";
    } ?>
</ul>