<?php
$sql = "SELECT * from categorias order by id";
$grupo = $conn->prepare($sql);
$grupo->execute();

$sql2 = "SELECT * from paginas order by id";
$pagina = $conn->prepare($sql2);
$pagina->execute();
?>

<div class="retn"></div>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">Meu Commerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <?php 
                foreach ($pagina as $nav)
                {
                   echo "<li class=\"nav-item\">
                                <a class=\"nav-link\" aria-current=\"page\" href=\"?pagina={$nav['id']}\">{$nav['label']}</a>
                            </li>"; 
                };
                ?>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<br>
<section>
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
</section>