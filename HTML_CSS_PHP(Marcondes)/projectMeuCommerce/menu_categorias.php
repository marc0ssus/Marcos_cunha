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
      if (!empty($categoria["categoria_pai"])) {
        $identacao = "&nbsp;&nbsp;&nbsp;";
      } else {
        $identacao = "";
      }
      echo "{$identacao}<a href=\"?pagina=produtos&categoria={$categoria["id"]}\" class=\"nav-link\">{$categoria["descricao"]}</a><br>";
    } ?>
</ul>
<!--echo "<li class=\"nav-item vert\">
        <a class=\"nav-link vertI\" aria-current=\"page\" href=\"?categoria={$li["id"]}\">{$li["descricao"]}</a>
        </li>"-->