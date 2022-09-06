<?php
$sql = "SELECT * from categorias order by id";
$grupo = $conn->prepare($sql);
$grupo->execute();
?>

<div class="retn"></div>

<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MeuCommerce</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
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
        <?php foreach ($grupo as $li) {
          echo "<li class=\"nav-item vert\">
          <a class=\"nav-link vertI\" aria-current=\"page\" href=\"?pagina=categoria\">{$li["descricao"]}</a>
          </li>";
        } ?>

        <li class="nav-item vert">
            <a class="nav-link vertI" aria-current="page" href="?pagina=eletronicos">Eletrônicos</a>
        </li>
        <li class="nav-item vert">
            <a class="nav-link vertI" aria-current="page" href="?pagina=celulares">Celulares e Smartphones</a>
        </li>
        <li class="nav-item vert">
            <a class="nav-link vertI" aria-current="page" href="?pagina=consoles">Consoles e Video Games</a>
        </li>
        <li class="nav-item vert">
            <a class="nav-link vertI" aria-current="page" href="?pagina=pcs">PCs</a>
        </li>
    </ul>
</section>