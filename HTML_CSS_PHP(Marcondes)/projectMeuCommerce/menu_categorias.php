<?php
    $sql = "SELECT * from categorias order by id";
    $grupo = $conn->prepare($sql);
    $grupo->execute();
?>

<ul class="nav flex-column vertul">
    <li class="nav-item vert">
        <a class="nav-link vertI active" aria-current="page">Categorias</a>
    </li>
    <?php 
        foreach ($grupo as $li) {
        echo "<li class=\"nav-item vert\">
        <a class=\"nav-link vertI\" aria-current=\"page\" href=\"?categoria={$li['id']}\">{$li['descricao']}</a>
        </li>";
    };
    ?>
</ul>